<?php
/* Template Name: Blog Page */
get_header();

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

$args = [
    'post_type' => 'post',
    'posts_per_page' => 6,
    'paged' => $paged,
];

$query = new WP_Query($args);
?>

<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <h2 class="text-[#111418] text-3xl sm:text-4xl font-extrabold tracking-tight mb-8 text-center">
        📝 Latest Blog Posts
    </h2>

    <!-- Search Bar -->
    <div class="max-w-xl mx-auto mb-10">
       <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Blog Posts Section -->
        <div class="lg:col-span-2 space-y-6">
            <?php if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow hover:shadow-md transition-shadow duration-300">
                        <div class="p-6">
                            <h3 class="text-[#111418] text-2xl font-semibold mb-2">
                                <a href="<?php the_permalink(); ?>" class="hover:underline">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <p class="text-sm text-gray-500 mb-4">
                                Published on <?php echo get_the_date(); ?> by <?php the_author(); ?>
                            </p>
                            <p class="text-[#4B5563] text-base leading-relaxed mb-4">
                                <?php the_excerpt(); ?>
                            </p>
                            <a href="<?php the_permalink(); ?>" class="text-[#2563eb] text-sm font-medium hover:underline">
                                Read More →
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>

                <div class="mt-10 text-center">
                    <?php
                    echo paginate_links([
                        'total' => $query->max_num_pages,
                        'current' => $paged,
                        'prev_text' => '← Prev',
                        'next_text' => 'Next →',
                        'type' => 'list',
                        'before_page_number' => '<span class="inline-block px-3 py-1 rounded-lg bg-gray-100 hover:bg-gray-200 text-gray-800">',
                        'after_page_number' => '</span>',
                    ]);
                    ?>
                </div>
            <?php else : ?>
                <p class="text-gray-500 text-center">No blog posts found.</p>
            <?php endif; ?>
        </div>

        <!-- Sidebar -->
        <aside class="lg:col-span-1">
            <!-- Add your dynamic sidebar here later -->
            <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow">
                <h4 class="text-lg font-semibold mb-4">📌 Sidebar Area</h4>
                <p class="text-sm text-gray-600">This is a placeholder. You can register a widget area and use `dynamic_sidebar()` here later.</p>
            </div>
        </aside>
    </div>
</section>

<?php
wp_reset_postdata();
get_footer();
?>
