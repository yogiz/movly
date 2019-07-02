  <?php wp_footer(); ?>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      M.Sidenav.init(document.querySelectorAll('.sidenav'));
      M.Materialbox.init(document.querySelectorAll('.materialboxed'));
      M.Carousel.init(document.querySelectorAll('.carousel'), {
        fullWidth: true,
        indicators: true,
        noWrap: true
      });
      M.Parallax.init(document.querySelectorAll('.parallax'));
    });
  </script>

</body>
</html>