<?php

/*
	Question2Answer (c) Gideon Greenspan

	http://www.question2answer.org/


	File: qa-plugin/seo-meta-tags/qa-plugin.php
	Version: See define()s at top of qa-include/qa-base.php
	Description: Initiates SEO Meta Tags layer plugin
*/

/*
	Plugin Name: SEO Meta Tag
	Plugin URI: http://github.com/Kuddus95/q2a-seo-meta-tag
	Plugin Description: Adds "noindex,follow" meta tags to various user-defined pages.
	Plugin Version: 1.0
	Plugin Date: 2021-04-11
	Plugin Author: Aman
	Plugin Author URI: http://ask-ans.com
	Plugin Minimum Question2Answer Version: 1.8
*/


	if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
		header('Location: ../../');
		exit;
	}

	qa_register_plugin_module('module', 'qa-seo-meta-tag-admin-form.php', 'qa_seo_meta_tag_admin_form', 'SEO Meta Tag');
	qa_register_plugin_layer('qa-seo-meta-tag-layer.php', 'SEO Meta Tag');

/*
	Omit PHP closing tag to help avoid accidental output
*/
