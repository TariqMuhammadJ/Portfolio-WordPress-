<?php 

class Widget_Area{
    private $widget_areas = [];

    public function __construct(){
        add_action('widgets_init', [$this, 'register_widget_areas']);
    }

    public function add($id, $name, $description, $before, $after){
        $this->widget_areas[] = [
            'id' => $id,
            'name' => $name,
            'description' => $description,
            'before_widget' => $before,
            'after_widget' => $after,
        ];
    }

    public function register_widget_areas(){
        foreach($this->widget_areas as $area){
            register_sidebar([
                'id' => $area['id'],
                'name' => $area['name'],
                'description' => $area['description'],
                'before_widget' => $area['before_widget'],
                'after_widget' => $area['after_widget'],
                'before_title'  => '<h3 class="text-lg font-semibold mb-2">',
                'after_title'   => '</h3>',
            ]);
        }
    }
}