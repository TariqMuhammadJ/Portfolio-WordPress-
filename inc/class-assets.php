<?php 

class Theme_Assets{
    private static $instance = null;
    public static function getInstance(){
        if(self::$instance === null){
            self::$instance = new self();

        }

        return self::$instance;

    }

    private function construct(){
        add_action('wp_enqueue_scripts', [$this, 'enqueue_assets']);
    }

    public function enqueue_assets(){
        wp_enqueue_style(
            'theme-fonts',
            'https://fonts.googleapis.com/css2?display=swap&family=Inter:wght@400;500;700;900&family=Noto+Sans:wght@400;500;700;900',
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

        }

    
}

?>