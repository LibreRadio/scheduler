<?php
/**
 * Front of the application. This file contins the main dashborard, and
 * redirects to the login form if necessary.
 */

// Run the bootstrap before continuing
require(dirname(__FILE__) . '/includes/load.php');

$app->print_html_head();
$app->print_page_header();

echo '<p>' . gettext('LibreRadio scheduler dashboard') . '</p>';

$app->print_page_footer();
$app->print_html_foot();
