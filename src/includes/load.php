<?php
/**
 * Bootstrap file for setting the APPROOT constant and loading the config file.
 * The config file will then load the settings file, which will then set up the
 * application environment.
 */

// Define APPROOT as the application's root directory
if (!defined('APPROOT')) {
	define('APPROOT', realpath(dirname(__FILE__) . '/..') . '/');
}

// Load config file
if (file_exists(APPROOT . 'includes/config.php')) {
	require_once(APPROOT . 'includes/config.php');
} else {
	die('The config file can not be found.');
}

// Load the localization library
require_once(APPROOT . 'includes/l10n.php');

// Load the application library
require_once(APPROOT . 'includes/library/App.php');
$app = new App();
