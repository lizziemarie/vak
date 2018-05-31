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
function x_add_social_sharing() {
  if ( (!is_front_page() && is_home()) || is_single() ) {
    echo do_shortcode('[x_share title="Share this Post" facebook="true" twitter="true" google_plus="true" linkedin="true" pinterest="true" reddit="true" email="true"]');
  }
}
add_action('x_before_the_excerpt_end', 'x_add_social_sharing');
add_action('x_before_the_content_end', 'x_add_social_sharing');
// =============================================================================
