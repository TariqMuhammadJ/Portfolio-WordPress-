<?php
/* Template Name: Projects Page */
get_header(); 

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

$args = [
    'post_type' => 'project',
    'posts_per_page' => 6,
    'paged' => $paged
];

$query = new WP_Query($args);

if ($query->have_posts()) : ?>
    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <h2 class="text-[#111418] text-3xl sm:text-4xl font-extrabold tracking-tight mb-8 text-center">
            🌟 Featured Projects
        </h2>

        <div class="grid md:grid-cols-2 gap-6">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300 flex flex-col md:flex-row">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="md:w-1/2 h-48 md:h-auto bg-cover bg-center"
                             style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url()); ?>');">
                        </div>
                    <?php endif; ?>

                    <div class="p-6 flex flex-col justify-between md:w-1/2">
                        <div class="mb-4">
                            <p class="text-[#2563eb] text-sm font-semibold uppercase tracking-wide">
                                <?php echo esc_html(get_post_meta(get_the_ID(), 'tech_stack', true)); ?>
                            </p>
                            <h3 class="text-[#111418] text-xl font-bold mt-2 mb-1">
                                <?php the_title(); ?>
                            </h3>
                            <p class="text-[#4B5563] text-sm leading-relaxed">
                                <?php the_excerpt(); ?>
                            </p>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="text-[#2563eb] text-sm font-medium hover:underline">
                            View Project →
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>

        <div class="mt-10 text-center">
            <?php
            echo paginate_links([
                'total' => $query->max_num_pages,
                'current' => $paged,
                'prev_text' => '← Prev',
                'next_text' => 'Next →',
                'type' => 'list',
                'before_page_number' => '<span class="inline-block px-3 py-1 rounded-lg bg-gray-100 hover:bg-gray-200 text-gray-800">',
                'after_page_number' => '</span>'
            ]);
            ?>
        </div>
    </section>

<?php else : ?>
    <section class="max-w-4xl mx-auto px-4 py-10 text-center">
        <p class="text-lg text-gray-500">🚫 No projects found at the moment.</p>
    </section>
<?php endif;

wp_reset_postdata();
?>
