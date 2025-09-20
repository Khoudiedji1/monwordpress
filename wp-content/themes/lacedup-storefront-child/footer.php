<?php
/**
 * The template for displaying the footer
 */
?>

<footer class="site-footer">
  <div class="footer-container">

    <div class="footer-top">
      <!-- Logo -->
      <div class="footer-logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Logo_Lacedup1.png" alt="LacedUp Logo">
      </div>

      <!-- Social -->
      <div class="footer-social">
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
      <p>© 2025 Lacedup Inc. Tous droits réservés</p>
      <div class="footer-links">
        <a href="#">Guides</a>
        <a href="#">Conditions d'utilisation</a>
        <a href="#">Conditions générales de vente</a>
        <a href="#">Informations sur l'entreprise</a>
        <a href="#">Politique de confidentialité et de gestion des cookies</a>
        <a href="#">Paramètres de confidentialité et des cookies</a>
      </div>
    </div>
    
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
