<footer class="site-footer">
  <div class="footer-container">

    <div class="footer-top">
      <div class="footer-logo">
        <a href="<?php echo home_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Laced Up Logo" height="40" style="filter: brightness(0) invert(1);">
        </a>
      </div>

      <div class="footer-social">
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-tiktok"></i></a>
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-pinterest-p"></i></a>
      </div>
    </div>

    <div class="footer-bottom">
      <p>&copy; <?php echo date('Y'); ?> Laced Up</p>
      <div class="footer-links">
        <a href="/faq">FAQ</a> | 
        <a href="/terms-of-service">Terms</a> | 
        <a href="/privacy-policy">Privacy</a> | 
        <a href="/contact">Contact</a>
      </div>
    </div>

  </div>

  <?php wp_footer(); ?>
</footer>
</body>
</html>
