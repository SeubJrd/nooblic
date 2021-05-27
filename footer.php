<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

<div><!-- #content -->
    <footer class="piedpage">
        <section class="contenu3">

            <!-- ajout de ma nouvelle widget area -->
            <?php if ( is_active_sidebar( 'foot1' ) ) : ?>
                <div id="header-widget-area" class="nwa-header-widget widget-area" role="complementary">
                    <?php the_custom_logo(); ?>
                    <?php dynamic_sidebar( 'foot1' ); ?>
                </div>
            <?php endif; ?>


            <!-- ajout de ma nouvelle widget area -->
            <?php if ( is_active_sidebar( 'foot2' ) ) : ?>
                <div id="header-widget-area" class="nwa-header-widget widget-area" role="complementary">
                    <?php dynamic_sidebar( 'foot2' ); ?>
                </div>
            <?php endif; ?>
            <!-- fin nouvelle widget area -->


            <!-- ajout de ma nouvelle widget area -->
            <?php if ( is_active_sidebar( 'foot3' ) ) : ?>
                <div id="header-widget-area" class="nwa-header-widget widget-area" role="complementary">
                    <?php dynamic_sidebar( 'foot3' ); ?>
                </div>
            <?php endif; ?>
            <!-- fin nouvelle widget area -->

        </section>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
