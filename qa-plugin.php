<?php

/*
	Plugin Name: Category Email Notifications
	Plugin URI: https://github.com/dunse/qa-category-email-notifications
	Plugin Description: Sends email for new questions, to users who favoritised the category where it was posted
	Plugin Version: 0.9
	Plugin Date: 2013-02-20
	Plugin Author: Pehr Johansson
	Plugin Author URI: 
	Plugin License: MIT License
	Plugin Minimum Question2Answer Version: 1.5
	Plugin Update Check URI: 
*/

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
	header('Location: ../../');
	exit;
}

	qa_register_plugin_module('event', 'qa-category-email-notifications-event.php', 'qa_category_email_notifications_event', 'Category Email Notifications');


/*
        Omit PHP closing tag to help avoid accidental output
*/

