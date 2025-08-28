<?php
get_header();

// Load the main app template
echo file_get_contents( get_template_directory() . '/app-template.html' );

get_footer();
