<?php

/*
	Question2Answer (c) Gideon Greenspan

	http://www.question2answer.org/


	File: qa-plugin/meta-tag-seo/qa-seo-meta-tag-layer.php
	Version: See define()s at top of qa-include/qa-base.php
	Description: Theme layer class for SEO Meta Tags layer plugin
*/

	class qa_html_theme_layer extends qa_html_theme_base {

		function head_metas()
		{
			if (qa_opt('seomt_activity') && ($this->template=='activity'))
			{
				$this->output('<meta name="Robots" content="INDEX, FOLLOW">
<meta name="Robots" content="NOODP">
<meta name="Robots" content="Noarchive">
<meta name="rating" content="5">
<meta name="distribution" content="web">');
			}

			if (qa_opt('seomt_questions') && ($this->template=='questions'))
			{
				$this->output('<meta name="Robots" content="INDEX, FOLLOW">
<meta name="Robots" content="NOODP">
<meta name="Robots" content="Noarchive">
<meta name="rating" content="5">
<meta name="distribution" content="web">');
			}

			if (qa_opt('seomt_hot') && ($this->template=='qa'))
			{
				$this->output('<meta name="Robots" content="INDEX, FOLLOW">
<meta name="Robots" content="NOODP">
<meta name="Robots" content="Noarchive">
<meta name="rating" content="5">
<meta name="distribution" content="web">');
			}

			qa_html_theme_base::head_metas();
		}
	}


/*
	Omit PHP closing tag to help avoid accidental output
*/
