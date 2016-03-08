<?php
/**
 *Template Name: about
 **/
get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="container">
                <?php
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content-about', 'page' );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
                ?>
                <?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
            </div>
        </main><!-- #main -->

    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();