<?php

// =============================================================================
// FUNCTIONS.PHP
// -----------------------------------------------------------------------------
// Overwrite or add your own custom functions to X in this file.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Enqueue Parent Stylesheet
//   02. Additional Functions
// =============================================================================

// Enqueue Parent Stylesheet
// =============================================================================

add_filter( 'x_enqueue_parent_stylesheet', '__return_true' );



// Additional Functions
// =============================================================================

// Add social sharing icons
// =============================================================================
function add_excerpt_social_sharing_icons ( $content ) {
  echo do_shortcode('<div style="margin: 20px 0;">[x_share title="Share this Post" facebook="true" twitter="true" google_plus="true" linkedin="true" pinterest="true" reddit="true" email="true"]</div>');
}
add_action('x_before_the_excerpt_end', 'add_excerpt_social_sharing_icons');
// =============================================================================
