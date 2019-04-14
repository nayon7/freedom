<!-- Footer -->
  <footer id="footer">
    <div class="container">
      <div class="row double">
        <div class="6u">
          <div class="row collapse-at-2">
              <div>
                <?php if ( is_active_sidebar( 'footer1' ) ) : ?>
                    <?php dynamic_sidebar( 'footer1' ); ?>
                  <?php endif; ?>
              </div>
              <div>
                <?php if ( is_active_sidebar( 'footer1' ) ) : ?>
                    <?php dynamic_sidebar( 'footer1' ); ?>
                    <?php endif; ?>

              </div>
          </div>
        </div>
        <div class="6u">
          <?php if ( is_active_sidebar( 'footer2' ) ) : ?>
              <?php dynamic_sidebar( 'footer2' ); ?>
              <?php endif; ?>
          <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
            <li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
          </ul>
        </div>
      </div>
      <ul class="copyright">
        <li><?php dynamic_sidebar( 'footer3' ); ?></li>
      </ul>
    </div>
  </footer>
<?php wp_footer(); ?>
</body>
</html>
