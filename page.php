<?php 

get_header();



?>


  <div class="relative flex size-full min-h-screen flex-col bg-white justify-between group/design-root overflow-x-hidden" style='font-family: Inter, "Noto Sans", sans-serif;'>
      <div>
       <?php get_template_part('templates/template', 'head'); ?>
       <?php if(is_page('portfolio')) {
       get_template_part('templates/template', 'projects');
       }
       elseif(is_page('about')){

        get_template_part('templates/template', 'about');
        
       }

       elseif(is_page('contact')){
        do_action('contact_form');
       }

       elseif(is_page('blog')){
        get_template_part('templates/template', 'blog');
       }



       ?>
    </div>

<?php 
get_footer();

?>
