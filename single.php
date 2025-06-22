<?php 
get_header(); 
?>

<div
  class="relative flex min-h-screen flex-col justify-between overflow-x-hidden bg-white group/design-root"
  style='font-family: Newsreader, "Noto Sans", sans-serif;'
>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="w-full max-w-4xl mx-auto">
      
      <!-- Back Icon -->
      <div class="flex items-center justify-between p-4 pb-2 bg-white">
        <a href="<?php echo esc_url(home_url('/blog')); ?>" aria-label="Go back" class="text-[#111418] flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
            <path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path>
          </svg>
          <span class="ml-2 text-sm">Back to Blog</span>
        </a>
      </div>

      <!-- Title and Meta -->
      <header class="px-4 pt-5 pb-3">
        <h1 class="text-[#111418] text-2xl font-bold leading-tight tracking-tight">
          <?php the_title(); ?>
        </h1>
        <p class="text-[#60758a] text-sm font-normal pt-1">
          <?php echo get_the_date(); ?> · By <?php the_author(); ?>
        </p>
      </header>

      <!-- Featured Image -->
    <?php if (has_post_thumbnail()) : ?>
        <div class="w-full py-3 px-4">
            <?php 
            // Get the custom-sized thumbnail URL
            $thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'single-post-featured');
            ?>
            <div 
            class="aspect-[3/2] w-full overflow-hidden rounded-lg bg-center bg-no-repeat bg-cover"
            style='background-image: url("<?php echo esc_url($thumb_url); ?>");'>
            </div>
        </div>
    <?php endif; ?>


      <!-- Blog Content -->
      <div class="prose prose-neutral max-w-none px-4 pt-4 pb-8">
        <?php the_content(); ?>
      </div>

      <!-- Pagination to Next/Previous Posts -->
      <div class="px-4 pb-12 flex justify-between items-center text-sm font-medium text-blue-600">
        <div>
          <?php previous_post_link('%link', '← %title'); ?>
        </div>
        <div>
          <?php next_post_link('%link', '%title →'); ?>
        </div>
      </div>
      
    </article>
  <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
