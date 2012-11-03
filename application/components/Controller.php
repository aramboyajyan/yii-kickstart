<?php

/**
 * @file
 * Customized base controller class for the application.
 *
 * Created by: Topsitemakers
 * http://www.topsitemakers.com/
 */

/**
 * All controllers in application should extend this class.
 */
class Controller extends CController {

	// Default layout for the application
	public $layout = '//layouts/column1';
	
	// Menu items; start with an empty array
	public $menu = array();
	
	// Breadcrumbs; start with an empty array
	public $breadcrumbs = array();

}