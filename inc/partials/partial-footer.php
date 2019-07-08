<?php if(is_active_sidebar('footer-four')): ?>
  <section class="footer-widget-4">
    <div class="container">
      <?php dynamic_sidebar('footer-four'); ?>
    </div>
  </section>
<?php endif; ?>

<?php if(is_active_sidebar('footer-three')): ?>
  <section class="footer-widget-3">
    <div class="container">
      <?php dynamic_sidebar('footer-three'); ?>
    </div>
  </section>
<?php endif; ?>

<?php if(is_active_sidebar('footer-two')): ?>
  <section class="footer-widget-2">
    <div class="container">
      <?php dynamic_sidebar('footer-two'); ?>
    </div>
  </section>
<?php endif; ?>

<?php if(is_active_sidebar('footer-one')): ?>
  <section class="footer-widget-1">
    <div class="container">
      <?php dynamic_sidebar('footer-one'); ?>
    </div>
  </section>
<?php endif; ?>

<!-- Footer copyright area -->
<footer class="page-footer grey lighten-4">
  <div class="footer-copyright grey darken-3 grey-text text-lighten-1">
    <div class="container">
      <p>&copy; <?php echo Date('Y'); ?> <?php bloginfo('name'); ?><span class="right"><small>Powered by <a href="#" rel="noopener" target="_blank">movly</a></small></span></p>
    </div>
  </div>
</footer>