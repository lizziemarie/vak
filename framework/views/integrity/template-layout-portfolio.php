<?php

// =============================================================================
// VIEWS/INTEGRITY/TEMPLATE-LAYOUT-PORTFOLIO.PHP
// -----------------------------------------------------------------------------
// Portfolio page output for Integrity. X Child Theme
// =============================================================================

?>

<?php get_header(); ?>

  <div class="x-container max width offset">

    <div class="<?php x_main_content_class(); ?>" role="main">

      <?php x_get_view( 'global', '_portfolio' ); ?>
      <?php x_get_view( 'global', '_content', 'the-content' ); ?>

    </div>

    <?php get_sidebar(); ?>

  </div>

<?php get_footer(); ?>
