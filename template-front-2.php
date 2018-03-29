<?php
/**
 * Template Name: Front 2 Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
    <?php get_template_part('templates/content', 'page'); ?>


    <?php
    $term_list = get_terms(
        array (
            'taxonomy' => 'variants',
            'hide_empty' => false
        )
    );

    $clean_term_list = array();

    foreach ($term_list as $key => $val) {
        $clean_terms_list[] = $val->slug;
    }

    $args = array(
        'post_type' => 'cakes',
        'orderby' => 'publish',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'variants',
                'field' => 'slug',
                'terms' => $clean_terms_list
            ),
        ),
    );
    $query = new WP_Query($args);
    ?>

    <?php if ($query->have_posts()) : ?>
        <?php $counter = 1; ?>
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <?php
            $terms = get_the_terms(get_the_ID(), 'variants');

            if($counter == 1) { ?>
                <div class="menus">
                    <span class="section-icon cheese"><img
                            src="<?php echo get_template_directory_uri() . '/dist/images/icon-cheese.png' ?>"
                            class="img-fluid"/><?php echo $terms[0]->slug ?></span>

                <div class="row">
            <?php } ?>

            <div class="col">
                <div class="wrapper">
                    <?php
                    $style = '';
                    if (get_the_post_thumbnail_url()) {
                        $style = "background-image:url('" . get_the_post_thumbnail_url() . "')";
                    }

                    ?>
                    <div style="<?php echo $style ?>" class="bg-img img-fluid">
                        <div class="description">
                            <h6><?php the_title(); ?></h6>
                            <a href="">
                                <button class="btn btn-default btn-resep">Lihat Resep</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $next_post = get_next_post();

            if ($next_post) {
                $terms_next = get_the_terms($next_post, 'variants');
                if ($terms_next[0]->slug !== $terms[0]->slug ) { ?>
                    </div>
                    <a href="#" class="view-wrap">
                    <span class="fa fa-caret-right view-all" title="icon media play" aria-hidden="true"><span
                            class="view">View All</span></span>
                    </a>
                    </div>
                    <div class="menus">
                    <span class="section-icon cheese"><img
                            src="<?php echo get_template_directory_uri() . '/dist/images/icon-cheese.png' ?>"
                            class="img-fluid"/><?php echo $terms_next[0]->slug ?></span>

                    <div class="row">
                <?php }
            }

            $counter++;
            ?>

        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

    <?php else : ?>
        <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
<?php endwhile; ?>
