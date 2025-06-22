<?php 

class Theme_Assets {
    private static $instance = null;
    public static string $version;

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct() {
        self::$version = wp_get_theme()->get('Version');

        add_action('wp_enqueue_scripts', [$this, 'enqueue_assets']);
        add_action('init', [$this, 'init_hook']);
        add_action('admin_init', [$this, 'yourbrand_register_settings']);
        add_action('after_setup_theme', [$this, 'after_setup']);
        add_action('admin_menu', [$this, 'brand_theme_settings']);
        add_action('add_meta_boxes', [$this, 'meta_boxes']);
        add_action('wp_enqueue_scripts', [$this, 'setup_page']);
        add_action('save_post_project', [$this, 'save_post_meta']);
    }

    public function after_setup() {
        $this->load_theme_widget_areas();
        $this->theme_setup();
    }

    public function init_hook() {
        $this->register_custom_post_type();
        $this->register_custom_blocks();
    }

    public function enqueue_assets() {
        if (is_page('portfolio')) {
            wp_enqueue_style('portfolio-css', get_template_directory_uri() . '/css/portfolio.css', [], false, 'all');
        }

        if (is_page()) {
            wp_enqueue_script('footer-js', get_template_directory_uri() . '/js/footer.js', [], false, true);
        }

        wp_enqueue_style(
            'theme-fonts',
            'https://fonts.googleapis.com/css2?display=swap&family=Inter:wght@400;500;700;900&family=Noto+Sans:wght@400;500;700;900&family=Fira+Sans',
            [],
            null
        );

        wp_enqueue_script(
            'tailwind',
            'https://cdn.tailwindcss.com?plugins=forms,container-queries',
            [],
            null,
            true
        );

        wp_enqueue_style(
            'theme-style',
            get_template_directory_uri() . '/style.css',
            [],
            filemtime(get_template_directory() . '/style.css')
        );

        wp_enqueue_style('wp-block-styles');
    }

    public function register_custom_post_type() {
        register_post_type('project', [
            'labels' => [
                'name' => __('Projects'),
                'singular_name' => __('Project'),
            ],
            'public' => true,
            'has_archive' => true,
            'rewrite' => ['slug' => 'projects'],
            'supports' => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'revisions'],
            'show_in_rest' => true,
        ]);

        register_post_meta('project', 'tech_stack', [
            'type' => 'string',
            'single' => true,
            'show_in_rest' => true,
            'sanitize_callback' => 'sanitize_text_field',
            'auth_callback' => function () {
                return current_user_can('edit_posts');
            },
            'default' => ''
        ]);
    }

    public function meta_boxes() {
        add_meta_box(
            'tech_stack_box',
            'Tech Stack',
            [$this, 'render_tech_stack'],
            'project',
            'normal',
            'default'
        );
    }

    public function render_tech_stack($post) {
        $value = get_post_meta($post->ID, 'tech_stack', true);
        wp_nonce_field('save_tech_stack_meta_box', 'tech_stack_meta_box_nonce');
        echo '<label for="tech_stack">Enter Tech Stack (comma-separated):</label><br>';
        echo '<input type="text" id="tech_stack" name="tech_stack" value="' . esc_attr($value) . '" style="width:80%; text-align:center">';
    }

    public function save_post_meta($post_id) {
        if (!isset($_POST['tech_stack_meta_box_nonce']) ||
            !wp_verify_nonce($_POST['tech_stack_meta_box_nonce'], 'save_tech_stack_meta_box')) {
            return;
        }

        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
        if (!current_user_can('edit_post', $post_id)) return;

        if (isset($_POST['tech_stack'])) {
            update_post_meta($post_id, 'tech_stack', sanitize_text_field($_POST['tech_stack']));
        }
    }

    public function load_theme_widget_areas() {
        $widget = new Widget_Area();
        $widget->add('footer-social', 'social-footer-area', 'A footer area for social icons', '<div class="flex flex-wrap justify-center gap-4">', '</div>');
    }

    public function register_custom_blocks() {
        wp_register_script(
            'portfolio-tech-block',
            get_template_directory_uri() . '/blocks/technologies/index.js',
            ['wp-blocks', 'wp-element', 'wp-editor', 'wp-block-editor'],
            filemtime(get_template_directory() . '/blocks/technologies/index.js'),
            true
        );

        register_block_type(get_template_directory() . '/blocks/technologies');
    }

    public function theme_setup() {
        add_theme_support('editor-styles');
        add_editor_style('editor-style.css');
        add_theme_support('wp-block-styles');
        add_theme_support('align-wide');
        add_theme_support('responsive-embeds');
        add_theme_support('custom-line-height');
        add_theme_support('custom-spacing');
        add_theme_support('custom-units');
        add_theme_support('custom-gradient-presets');
    }

    public function setup_page() {
        if (is_singular('project')) {
            wp_enqueue_style(
                'project-style',
                get_template_directory_uri() . '/css/project.css',
                [],
                null,
                'all'
            );

            wp_enqueue_style(
                'project-font',
                'https://fonts.googleapis.com/css2?family=Fira+Sans&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap',
                [],
                null
            );
        }
    }

    public function brand_theme_settings() {
        add_menu_page('Theme Settings', 'Theme Settings', 'manage_options', 'theme-settings', [$this, 'your_brand_theme_settings_page_markup']);
    }

    public function your_brand_theme_settings_page_markup() {
        ?>
        <div class="wrap">
            <h2>YourBrand Settings</h2>
            <form method="post" action="options.php">
                <?php
                settings_fields('yourbrand_settings');
                do_settings_sections('yourbrand_settings');
                ?>
                <table class="form-table">
                    <tr>
                        <th><label for="yourbrand_name">Brand Name</label></th>
                        <td><input type="text" id="yourbrand_name" name="yourbrand_name" value="<?php echo esc_attr(get_option('yourbrand_name', 'YourBrand')); ?>" class="regular-text" /></td>
                    </tr>
                    <tr>
                        <th><label for="yourbrand_tagline">Tagline</label></th>
                        <td><textarea name="yourbrand_tagline" id="yourbrand_tagline" class="large-text"><?php echo esc_textarea(get_option('yourbrand_tagline', 'Building beautiful, fast, and accessible WordPress solutions.')); ?></textarea></td>
                    </tr>
                </table>
                <?php submit_button(); ?>
            </form>
        </div>
        <?php
    }

    public function yourbrand_register_settings() {
        register_setting('yourbrand_settings', 'yourbrand_name');
        register_setting('yourbrand_settings', 'yourbrand_tagline');
    }
}

?>
