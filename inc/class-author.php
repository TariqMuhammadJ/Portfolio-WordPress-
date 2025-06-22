<?php
class Author_Fields {
    public function __construct() {
        add_action('show_user_profile', [$this, 'add_custom_fields']);
        add_action('edit_user_profile', [$this, 'add_custom_fields']);
        add_action('personal_options_update', [$this, 'save_custom_fields']);
        add_action('edit_user_profile_update', [$this, 'save_custom_fields']);
    }

    public function add_custom_fields($user) {
        $skills = get_user_meta($user->ID, 'author_skills', true) ?: [];
        $profile_links = get_user_meta($user->ID, 'profile_links', true) ?: [];
        $experiences = get_user_meta($user->ID, 'author_experiences', true) ?: [];
        ?>
        <h2>Extra Author Info</h2>
        <table class="form-table">
            <!-- Skills -->
            <tr>
                <th>Skills</th>
                <td>
                    <div id="skills-container">
                        <?php foreach ($skills as $skill): ?>
                            <input type="text" name="author_skills[]" value="<?php echo esc_attr($skill); ?>" class="regular-text" />
                        <?php endforeach; ?>
                        <button type="button" id="add-skill">+ Add Skill</button>
                    </div>
                </td>
            </tr>

            <!-- Profile Links -->
            <tr>
                <th>Profile Links</th>
                <td>
                    <div id="profile-links-container">
                        <?php foreach ($profile_links as $link): ?>
                            <div class="profile-link-row">
                                <input type="text" name="profile_links[label][]" placeholder="Label" value="<?php echo esc_attr($link['label']); ?>" />
                                <input type="text" name="profile_links[url][]" placeholder="URL" value="<?php echo esc_url($link['url']); ?>" />
                                <input type="text" name="profile_links[icon][]" placeholder="Icon class" value="<?php echo esc_attr($link['icon']); ?>" />
                            </div>
                        <?php endforeach; ?>
                        <button type="button" id="add-profile-link">+ Add Link</button>
                    </div>
                </td>
            </tr>

            <!-- Experience -->
            <tr>
                <th>Experience</th>
                <td>
                    <div id="experience-container">
                        <?php foreach ($experiences as $exp): ?>
                            <div class="experience-row">
                                <input type="text" name="author_experiences[title][]" placeholder="Title" value="<?php echo esc_attr($exp['title']); ?>" />
                                <input type="text" name="author_experiences[date][]" placeholder="Date" value="<?php echo esc_attr($exp['date']); ?>" />
                                <textarea name="author_experiences[description][]" placeholder="Description"><?php echo esc_textarea($exp['description']); ?></textarea>
                            </div>
                        <?php endforeach; ?>
                        <button type="button" id="add-experience">+ Add Experience</button>
                    </div>
                </td>
            </tr>
        </table>

        <script>
        document.getElementById('add-skill').addEventListener('click', () => {
            const input = document.createElement('input');
            input.type = 'text';
            input.name = 'author_skills[]';
            input.placeholder = 'Skill';
            input.className = 'regular-text';
            document.getElementById('skills-container').insertBefore(input, event.target);
        });

        document.getElementById('add-profile-link').addEventListener('click', () => {
            const container = document.getElementById('profile-links-container');
            const wrapper = document.createElement('div');
            wrapper.className = 'profile-link-row';

            wrapper.innerHTML = `
                <input type="text" name="profile_links[label][]" placeholder="Label" />
                <input type="text" name="profile_links[url][]" placeholder="URL" />
                <input type="text" name="profile_links[icon][]" placeholder="Icon class" />
            `;
            container.insertBefore(wrapper, event.target);
        });

        document.getElementById('add-experience').addEventListener('click', () => {
            const container = document.getElementById('experience-container');
            const row = document.createElement('div');
            row.className = 'experience-row';

            row.innerHTML = `
                <input type="text" name="author_experiences[title][]" placeholder="Title" />
                <input type="text" name="author_experiences[date][]" placeholder="Date" />
                <textarea name="author_experiences[description][]" placeholder="Description"></textarea>
            `;
            container.insertBefore(row, event.target);
        });
        </script>
        <?php
    }

    public function save_custom_fields($user_id) {
        if (!current_user_can('edit_user', $user_id)) return;

        // Save skills
        if (isset($_POST['author_skills'])) {
            $skills = array_filter(array_map('sanitize_text_field', $_POST['author_skills']));
            update_user_meta($user_id, 'author_skills', $skills);
        }

        // Save profile links
        if (isset($_POST['profile_links'])) {
            $labels = $_POST['profile_links']['label'] ?? [];
            $urls = $_POST['profile_links']['url'] ?? [];
            $icons = $_POST['profile_links']['icon'] ?? [];

            $links = [];
            for ($i = 0; $i < count($labels); $i++) {
                if (!empty($labels[$i]) && !empty($urls[$i])) {
                    $links[] = [
                        'label' => sanitize_text_field($labels[$i]),
                        'url'   => esc_url_raw($urls[$i]),
                        'icon'  => sanitize_text_field($icons[$i]),
                    ];
                }
            }
            update_user_meta($user_id, 'profile_links', $links);
        }

        // Save experience
        if (isset($_POST['author_experiences'])) {
            $titles = $_POST['author_experiences']['title'] ?? [];
            $dates = $_POST['author_experiences']['date'] ?? [];
            $descs = $_POST['author_experiences']['description'] ?? [];

            $experiences = [];
            for ($i = 0; $i < count($titles); $i++) {
                if (!empty($titles[$i])) {
                    $experiences[] = [
                        'title'       => sanitize_text_field($titles[$i]),
                        'date'        => sanitize_text_field($dates[$i]),
                        'description' => sanitize_textarea_field($descs[$i]),
                    ];
                }
            }
            update_user_meta($user_id, 'author_experiences', $experiences);
        }
    }

    public function get_field($field_key, $user_id = null) {
        $user_id = $user_id ?: get_the_author_meta('ID');
        return get_user_meta($user_id, $field_key, true);
    }
}
?>