<?php $container = get_theme_mod( 'understrap_container_type' ); ?>
<section class="works-section">
	<div class="<?php echo esc_attr( $container ); ?> px-0" id="content" tabindex="-1">
		<div class="section-description-wrapper text-center">
			<h1 class="header text-center pt-5"><?= get_sub_field( 'section_header' ) ?></h1>
			<p class="section-description"><?= get_sub_field( 'section_description' ) ?></p>
		</div>
		<ul class="row list-inline text-center portfolio-menu justify-content-center justify-content-sm-around">
			<?php
			$terms = get_terms('works'); //Getting all terms from taxonomy
			$count = count($terms); //Counting received terms
			?>
			<li class="list-inline-item portfolio-menu-item">
				<span class="portfolio-menu-link active-portfolio-link" data-filter="*">All</span>
			</li>
			<?php
			if($count > 0) { //If received terms more than 0 then display menu links with data-filter as slug and menu name as term name
				foreach ($terms as $term) { ;?>

					<li class="list-inline-item portfolio-menu-item">
						<span class="portfolio-menu-link" data-filter="<?= '.' . $term->slug; ?>"><?= $term->name; ?></span>
					</li>
					<?php
				}
			}
			?>
		</ul>

		<ul class="row portfolio-list justify-content-center">
			<?php
			$args = array('post_type' => 'portfolio', //custom post type args
			              'posts_per_page' => -1,
			              'orderby' => 'menu_order',
			              'order' => 'ASC');
			$loop = new WP_Query($args);
			while ($loop->have_posts()) : $loop->the_post(); //loop for custom post type

				$terms = get_the_terms(get_the_ID(),'works'); //get terms from design taxonomy by post id for particular post
				$terms_string = ""; //string that will contain terms
				foreach ($terms as $term) { //for each term create string that will contain all the slugs
					$terms_string = $term->slug;
				}
				?>
				<li class="col-md-6 col-lg-4 portfolio-item <?= $terms_string ?>"> <!-- adding term slug as a class to item-->
					<div class="image-wrapper">
						<?php
						the_post_thumbnail('full', ['class' => 'img-fluid']);
						?>
						<div class="overlay mx-auto">
							<div class="overlay-content">
								<a class="item-link" href="<?php the_permalink();?>"><?= $term->name ?></a>
							</div>
						</div>
					</div>
				</li>
			<?php endwhile; ?>
		</ul>
	</div>
</section>