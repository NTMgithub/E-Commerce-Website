<?php
	require_once '../core/init.php';
	if (!is_logged_in()) {
		login_error_redirect();
	}
	require_once '../helpers/helpers.php';
	include 'includes/head.php';
	include 'includes/navigation.php';
?>

Archived Page Home
<?php include 'includes/footer.php';?>