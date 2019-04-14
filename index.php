<?php get_header(); ?>

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1><a href="#">Ion</a></h1>
				<nav id="nav">
					<?php

						$menu = array(

							'theme_location'	=> 'primary',
							'menu_id'		=> 'nav',
						);

						wp_nav_menu($menu);
					 ?>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner" style="background-image: url(<?php the_post_thumbnail(); ?>);" >
				<?php

				global $post;
				$args = array( 'posts_per_page' => 1, 'post_type'=> 'hero', 'orderby' => 'menu_order', 'order' => 'ASC' );
				$myposts = get_posts( $args );
				foreach( $myposts as $post ) : setup_postdata($post); ?>

				<?php
				   $btn_text= get_post_meta($post->ID, 'btn_text', true);
				   $btn_link= get_post_meta($post->ID, 'btn_link', true);
					 $btn_text2= get_post_meta($post->ID, 'btn_text2', true);
					 $btn_link2= get_post_meta($post->ID, 'btn_link2', true);

				?>
				<div  class="inner" >
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
					<ul class="actions">
						<li><a class="button big special" href="<?php echo $btn_link; ?>"><?php echo $btn_text; ?></a></li>
						<li><a class="button big alt" href="<?php echo $btn_link2; ?>"><?php echo $btn_text2; ?></a></li>
					</ul>
				</div>
			<?php endforeach; wp_reset_query(); ?>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style1">
				<header class="major">
					<h2>Ipsum feugiat consequat</h2>
					<p>Tempus adipiscing commodo ut aliquam blandit</p>
				</header>
				<div class="container">
					<div class="row">

				    <?php while ( have_posts() ) : the_post(); ?>

							<div class="4u">
								<section class="special box">
									<i class="icon fa-area-chart major"></i>
									<h3><?php the_title(); ?></h3>
									<?php the_content(); ?>
								</section>
							</div>

				    <?php endwhile; ?>
					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<header class="major">
					<h2>Commodo accumsan aliquam</h2>
					<p>Amet nisi nunc lorem accumsan</p>
				</header>
				<div class="container">
					<div class="row">
						<?php

						global $post;
						$args = array( 'posts_per_page' => 2, 'post_type'=> 'service', 'orderby' => 'menu_order', 'order' => 'ASC' );
						$myposts = get_posts( $args );
						foreach( $myposts as $post ) : setup_postdata($post); ?>

						<?php
							 $btn_text2= get_post_meta($post->ID, 'btn_text2', true);
							 $btn_link2= get_post_meta($post->ID, 'btn_link2', true);

						?>
						<div class="6u">
							<section class="special">
                <?php
                      echo get_the_post_thumbnail( $post_id, 'large', array( 'class' => 'image fit' ) );
                 ?>
								<h2><?php the_title(); ?></h2>
								<?php the_content(); ?>
								<ul class="actions">
									<li><a class="button alt" href="<?php echo $btn_link2; ?>"><?php echo $btn_text2; ?></a></li>
								</ul>
							</section>
						</div>
						<?php endforeach; wp_reset_query(); ?>
					</div>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style1">
				<div class="container">
					<div class="row">
						<div class="8u">
              <?php
              global $post;
              $args = array( 'posts_per_page' =>1, 'post_type'=> 'service', 'orderby' => 'menu_order', 'order' => 'ASC' );
              $myposts = get_posts( $args );
              foreach( $myposts as $post ) : setup_postdata($post); ?>

							<section>
								<h2><?php the_title(); ?></h2>
                <?php
                      echo get_the_post_thumbnail( $post_id, 'large', array( 'class' => 'image fit' ) );
                 ?>
								<?php the_content(); ?>
							</section>
						<?php endforeach; wp_reset_query(); ?>

						</div>
						<div class="4u">
							<div>
                <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
                    <?php dynamic_sidebar( 'sidebar' ); ?>
                  <?php endif; ?>
							</div>
							<hr />
							<section>
                <?php if ( is_active_sidebar( 'footer1' ) ) : ?>
                    <?php dynamic_sidebar( 'footer1' ); ?>
                    <?php endif; ?>
							</section>
						</div>
					</div>
				</div>
			</section>

	<?php get_footer(); ?>
