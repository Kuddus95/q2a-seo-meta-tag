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
				$this->output('<META NAME="Robots" CONTENT="INDEX, FOLLOW">
				<META NAME="Robots" CONTENT="NOODP">
<META NAME="Robots" CONTENT="Noarchive">
<META NAME="revisit-after" CONTENT="3 days">
<META NAME="rating" CONTENT="5">
<META NAME="distribution" CONTENT="web">');
			}

			if (qa_opt('seomt_questions') && ($this->template=='questions'))
			{
				$this->output('<META NAME="Robots" CONTENT="INDEX, FOLLOW">
				<META NAME="Robots" CONTENT="NOODP">
<META NAME="Robots" CONTENT="Noarchive">
<META NAME="revisit-after" CONTENT="3 days">
<META NAME="rating" CONTENT="5">
<META NAME="distribution" CONTENT="web">');
			}

			if (qa_opt('seomt_hot') && ($this->template=='qa'))
			{
				$this->output('<META NAME="Robots" CONTENT="INDEX, FOLLOW">
				<META NAME="Robots" CONTENT="NOODP">
<META NAME="Robots" CONTENT="Noarchive">
<META NAME="revisit-after" CONTENT="3 days">
<META NAME="rating" CONTENT="5">
<META NAME="distribution" CONTENT="web">');
			}

			qa_html_theme_base::head_metas();
		}
	}


/*
	Omit PHP closing tag to help avoid accidental output
*/