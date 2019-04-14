
<?php

/*

Template Name: nosidebar Template

*/



 ?>

<?php get_header(); ?>


  <section id="three" class="wrapper style3">
    <header class="major">
      <h2>NO SIDEBAR</h2>
      <p>Tempus adipiscing commodo ut aliquam blandit</p>
    </header>


  <div class="container">
    <div class="row ">
      <div class="12u" >
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
    </div>
  </div>
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




<?php get_footer(); ?>
