<?php get_header(); ?>

<div class="container mx-auto px-4 py-10 max-w-4xl">
  <h1 class="text-3xl font-bold mb-6">
    Search Results for: <span class="text-blue-600"><?php echo get_search_query(); ?></span>
  </h1>

  <?php if (have_posts()) : ?>
    <div class="space-y-6">
      <?php while (have_posts()) : the_post(); ?>
        <div class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition-shadow">
          <h2 class="text-xl font-semibold text-[#121416] mb-2">
            <a href="<?php the_permalink(); ?>" class="hover:underline"><?php the_title(); ?></a>
          </h2>
          <p class="text-[#4b5563] text-sm">
            <?php echo wp_trim_words(get_the_excerpt(), 30, '...'); ?>
          </p>
        </div>
      <?php endwhile; ?>
    </div>

    <!-- Pagination -->
    <div class="mt-10">
      <?php
      the_posts_pagination([
        'mid_size' => 2,
        'prev_text' => __('← Previous'),
        'next_text' => __('Next →'),
        'screen_reader_text' => 'Search pagination'
      ]);
      ?>
    </div>

  <?php else : ?>
    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded">
      <p class="text-yellow-800">Sorry, no results found. Please try a different search.</p>
    </div>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
