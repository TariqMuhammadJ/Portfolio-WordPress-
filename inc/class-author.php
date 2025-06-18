<?php 
class Author_Fields {
    private $fields = [
        'author_profession' => 'Profession',
        'author_location' => 'Location',
        'author_skills' => 'Skills',
    ];

    public function __construct() {
        add_action('show_user_profile', [$this, 'add_custom_fields']);
        add_action('edit_user_profile', [$this, 'add_custom_fields']);
        add_action('personal_options_update', [$this, 'save_custom_fields']);
        add_action('edit_user_profile_update', [$this, 'save_custom_fields']);
    }
        public function add_custom_fields($user) {
            ?>
            <h2>Extra Author Info</h2>
            <table class="form-table">
                <?php foreach ($this->fields as $key => $label): 
                    $value = get_user_meta($user->ID, $key, true);

                    // Convert skills array to comma-separated string
                    if ($key === 'author_skills' && is_array($value)) {
                        $value = implode(', ', $value);
                    }

                    $value = esc_attr($value);
                ?>
                    <tr>
                        <th><label for="<?php echo $key; ?>"><?php echo $label; ?></label></th>
                        <td>
                            <input type="text" name="<?php echo $key; ?>" id="<?php echo $key; ?>" 
                                value="<?php echo $value; ?>" class="regular-text" />
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <?php
    }


    public function save_custom_fields($user_id) {
        if (!current_user_can('edit_user', $user_id)) return;

       foreach($this->fields as $key => $label){
            if(isset($_POST[$key])){
                $value = sanitize_text_field($_POST[$key]);
                if($key = 'author_skills'){
                    $skills_array = array_map('trim', explode(',', $value));
                    update_user_meta($user_id, $key, $skills_array);

                } else {
                    update_user_meta($user_id, $key, $value);
                }
            }
       }
    }

    public function get_field($field_key, $user_id = null) {
        $user_id = $user_id ?: get_the_author_meta('ID');
        return get_user_meta($user_id, $field_key, true);
    }
}

// 🔁 Instantiate once (in functions.php or an init file)
