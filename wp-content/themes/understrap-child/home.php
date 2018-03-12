<?php
get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper pt-0" id="single-wrapper">
    <div class="banner py-5">
        <h1 class="banner-header text-center"><?= __( 'Blog Posts', 'understrap' ); ?></h1>
    </div>

    <div class="<?php echo esc_attr( $container ); ?> px-0" id="content" tabindex="-1">

        <div class="row content-wrapper">
            <main class="site-main main-content col-lg-8 mt-5" id="main">
                <div class="row">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <article class="col-sm-6 article mb-4">
                            <div class="image-wrapper">
                                <a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail(); ?>
                                </a>
                                <a class="arrow-link" href="<?php the_permalink(); ?>">
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="article-description">
                                <h3 class="article-header"><a href="<?php the_permalink(); ?>"
                                                              class="article-header-link"><?php the_title(); ?></a></h3>
								<?php the_excerpt(); ?>
                            </div>
                            <div class="time-wrapper py-2">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <time class="post-date"
                                      datetime="<?php the_date( 'Y-m-d' ); ?>"> <?= get_the_time( 'd, m, Y' ); ?></time>
                            </div>


                        </article>
					<?php endwhile; else: ?>
					<?php endif; ?>
                </div>
                <div class="pagination row no-gutters">
					<?php pagination(); ?>
                </div>
            </main><!-- #main -->

            <aside class="sidebar col-lg-4 mt-5">
				<?php dynamic_sidebar( 'right_sidebar' ); ?>
            </aside>
        </div>


    </div><!-- Container end -->

</div><!-- Wrapper end -->


<?php
get_footer();
?>
