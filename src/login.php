<?php
/**
 * Handles authentication.
 */

// Run the bootstrap before continuing
require(dirname(__FILE__) . '/includes/load.php');

$app->print_html_head();
$app->print_page_header();
?>

<form action="/login.php" method="post">
	<figure>
		<img src="/media/logo.png" alt="LibreRadio scheduler logo" />
	</figure>

	<div class="container">
		<label for="username"><?php echo gettext('Username'); ?></label>
		<input type="text" placeholder="<?php echo gettext('Enter username'); ?>" name="username" required />

		<label for="password"><?php echo gettext('Password'); ?></label>
		<input type="password" placeholder="<?php echo gettext('Enter password'); ?>" name="password" required />

		<button type="submit"><?php echo gettext('Login'); ?></button>
		<button type="button" class="cancel"><?php echo gettext('Cancel'); ?></button>
	</div>
</form>

<?php
$app->print_page_footer();
$app->print_html_foot();
