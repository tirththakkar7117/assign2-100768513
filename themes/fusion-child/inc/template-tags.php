<?php 
/**
 * Adding custom theme template tags
 */

function custom_post_wp_query() {
    $custompost_args = array(
        'post-type'      => 'post',
        'post-status'    => 'publish',
        'posts_per_page' => 3
        );
        $custompost_query = new Wp_Query( $custompost_args );
        if( $custompost_query->have_posts() ) {
            ?>
            <h3 class="has-text-align-center wp-block-site-title">Recent Posts</h3>
            <div class="post-query">
                <div class="grid-x grid-margin-x grid-margin-y center">
                    <?php
                    while ( $custompost_query->have_posts() ) {
                        $custompost_query->the_post();
                        ?>
                        <div class="cell medium-4 large-4">
                            <?php the_post_thumbnail(); ?>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <?php the_excerpt(); ?>
                        </div>
                <?php
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <?php
    }
}
?>