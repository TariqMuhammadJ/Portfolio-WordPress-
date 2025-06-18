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
        <a href="<?php echo esc_url(home_url('/portfolio')); ?>" aria-label="Go back" class="text-[#111418] flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
            <path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path>
          </svg>
        </a>
      </div>

      <!-- Title and Meta -->
      <header class="px-4 pt-5 pb-3">
        <h1 class="text-[#111418] text-[22px] font-bold leading-tight tracking-[-0.015em]"><?php the_title(); ?></h1>
        <p class="text-[#60758a] text-sm font-normal leading-normal pt-1"><?php echo get_post_meta(get_the_ID(), 'tech_stack', true); ?> · <?php echo get_the_date('Y'); ?></p>
      </header>

      <!-- Featured Image -->
      <?php if (has_post_thumbnail()) : ?>
        <div class="w-full py-3 px-4">
          <div class="aspect-[3/2] w-full overflow-hidden rounded-lg bg-center bg-no-repeat bg-cover" 
            style='background-image: url("<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>");'>
          </div>
        </div>
      <?php endif; ?>

      <!-- Content -->
      <div class="prose prose-neutral max-w-none px-4 pt-4 pb-8">
        <?php the_content(); ?>
      </div>

      <!-- Action Buttons -->
      <div class="flex flex-wrap justify-between gap-3 px-4 pb-6">
        <a href="#" class="flex items-center justify-center h-10 px-4 text-sm font-bold text-white bg-[#0b79ee] rounded-lg min-w-[84px]">
          <span class="truncate">View Project</span>
        </a>
        <a href="<?php echo esc_url(home_url('/portfolio')); ?>" class="flex items-center justify-center h-10 px-4 text-sm font-bold text-[#111418] bg-[#f0f2f5] rounded-lg min-w-[84px]">
          <span class="truncate">Back to Portfolio</span>
        </a>
      </div>

    </article>
  <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
