<?php 

get_header();



?>


  <div class="relative flex size-full min-h-screen flex-col bg-white justify-between group/design-root overflow-x-hidden" style='font-family: Inter, "Noto Sans", sans-serif;'>
      <div>
       <?php get_template_part('templates/template', 'head'); ?>
       <?php if(is_page('projects')) {
       get_template_part('templates/template', 'projects');
       }
       elseif(is_page('about')){

        get_template_part('templates/template', 'about');
        
       }

       elseif(is_page('contact')){
        get_template_part('templates/template', 'contact');
       }



       ?>
      <?php get_template_part('templates/template', 'footer'); ?>
    </div>

<?php 
get_footer();

?>
