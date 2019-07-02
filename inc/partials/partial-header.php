<?php if(is_active_sidebar('header-one')): ?>
  <section class="header-widget-1">
    <div class="container">
      <?php dynamic_sidebar('header-one'); ?>
    </div>
  </section>
<?php endif; ?>

<?php if(is_active_sidebar('header-two')): ?>
  <section class="header-widget-2">
    <div class="container">
      <?php dynamic_sidebar('header-two'); ?>
    </div>
  </section>
<?php endif; ?>

<?php if(is_active_sidebar('header-three')): ?>
  <section class="header-widget-3">
    <div class="container">
      <?php dynamic_sidebar('header-three'); ?>
    </div>
  </section>
<?php endif; ?>

<?php if(is_active_sidebar('header-four')): ?>
  <section class="header-widget-4">
    <div class="container">
      <?php dynamic_sidebar('header-four'); ?>
    </div>
  </section>
<?php endif; ?>