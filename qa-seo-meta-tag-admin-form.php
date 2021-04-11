<?php

/*
	Question2Answer (c) Gideon Greenspan

	http://www.question2answer.org/


	File: qa-plugin/meta-tag-seo/qa-seo-meta-tag-admin-form.php
	Version: See define()s at top of qa-include/qa-base.php
	Description: Generic module class for meta tags seo plugin to provide admin form and options
*/

	class qa_seo_meta_tag_admin_form
	{
		function admin_form(&$qa_content)
		{
			$saved=false;

			if (qa_clicked('seo_meta_tag_save_button')) {
				qa_opt('seomt_activity', (int)qa_post_text('seomt_activity_field'));
				qa_opt('seomt_questions', (int)qa_post_text('seomt_questions_field'));
				qa_opt('seomt_qa', (int)qa_post_text('seomt_qa_field'));
				$saved=true;
			}

			return array(
				'ok' => $saved ? 'SEO Meta Tag settings saved' : null,

				'fields' => array(
					array(
						'label' => 'Apply if your homepage <code> activity page</code>',
						'type' => 'checkbox',
						'value' => qa_opt('seomt_activity'),
						'tags' => 'NAME="seomt_activity_field" ID="seomt_activity_field"',
					),

					array(
						'label' => 'Apply if your homepage <code>questions page</code>',
						'type' => 'checkbox',
						'value' => qa_opt('seomt_questions'),
						'tags' => 'NAME="seomt_questions_field" ID="seomt_questions_field"',
					),

					array(
						'label' => 'Apply if your homepage <code> questions and answers (qa)</code>',
						'type' => 'checkbox',
						'value' => qa_opt('seomt_qa'),
						'tags' => 'NAME="seomt_qa_field" ID="seomt_qa_field"',
					),
					
				),

				'buttons' => array(
					array(
						'label' => 'Save Changes',
						'tags' => 'NAME="seo_meta_tag_save_button"',
					),
				),
			);
		}
	}


/*
	Omit PHP closing tag to help avoid accidental output
*/