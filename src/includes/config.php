<?php
/**
 * The base configuration for LibreRadio scheduler, should normally not be
 * changed after the installation is done.
 *
 * This file contains the following configurations:
 * - MySQL settings
 * - Locale
 */

// Database (MySQL) settings
define('DB_HOST', 'localhost');
define('DB_NAME', 'lr_scheduler');
define('DB_USER', 'username');
define('DB_PASS', 'password');
define('TBL_PFX', ''); // Table prefix

// Locale
define('LOCALE', 'en_GB');
