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
    <h2 class="text-[#111418] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Featured Projects</h2>

    <?php while ($query->have_posts()) : $query->the_post(); ?>
        <div class="p-4">
            <div class="flex items-stretch justify-between gap-4 rounded-lg">
                <div class="flex flex-col gap-1 flex-[2_2_0px]">
                    <p class="text-[#60748a] text-sm font-normal leading-normal">
                        <?php echo esc_html(get_post_meta(get_the_ID(), 'tech_stack', true)); ?>
                    </p>
                    <p class="text-[#111418] text-base font-bold leading-tight"><?php the_title(); ?></p>
                    <p class="text-[#60748a] text-sm font-normal leading-normal"><?php the_excerpt(); ?></p>
                </div>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex-1"
                         style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url()); ?>');">
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endwhile; ?>

    <div class="pagination px-4 py-6 text-center">
        <?php
        echo paginate_links([
            'total' => $query->max_num_pages,
            'current' => $paged,
            'prev_text' => '« Prev',
            'next_text' => 'Next »',
        ]);
        ?>
    </div>

<?php else : ?>
    <p class="px-4 py-5">No projects found.</p>
<?php endif;

wp_reset_postdata();

