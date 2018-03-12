<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper pt-0" id="single-wrapper">

	<?php if ( have_posts() ) : while ( have_posts() ) :
	the_post(); ?>
    <div class="banner py-5">
        <h1 class="banner-header text-center"><?php the_title(); ?></h1>
    </div>
    <div class="<?php echo esc_attr( $container ); ?> px-0" id="content" tabindex="-1">

        <div class="row content-wrapper">
            <main class="site-main main-content col-lg-8" id="main">
                <article class="row single-post mt-5 no-gutters">
                    <div class="image-wrapper float-left">
						<?php
						the_post_thumbnail(); ?>
                    </div>
                    <div class="single-post-content-wrapper p-3">
						<?php the_content(); ?>
                    </div>
                </article>
                <div class="posts-links pt-5 row justify-content-between no-gutters">
					<?php previous_post_link('%link','Previous'); ?>
                    <?php next_post_link('%link','Next'); ?>
                </div>
            </main><!-- #main -->
			<?php endwhile; else: ?>
			<?php endif; ?>

            <aside class="sidebar col-lg-4 mt-5">
				<?php dynamic_sidebar( 'right_sidebar' ); ?>
            </aside>
        </div>
    </div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
