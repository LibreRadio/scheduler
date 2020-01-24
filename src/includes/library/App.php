<?php
/**
 * This class contins methods all pages need access to.
 */

class App {
	// Properties
	public $name = '';
	public $color = '';

	// Methods for printing page components
	public function print_html_head() {
		$page_title = 'LibreRadio scheduler';
		require_once(APPROOT . '/components/html_head.php');
	}
	public function print_page_header() {
		require_once(APPROOT . '/components/page_header.php');
	}
	public function print_page_footer() {
		require_once(APPROOT . '/components/page_footer.php');
	}
	public function print_html_foot() {
		require_once(APPROOT . '/components/html_foot.php');
	}
}
