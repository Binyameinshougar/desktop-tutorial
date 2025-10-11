<?php
if (!defined("ABSPATH")) exit;

function weise_elfen_child_enqueue_styles() {
    wp_enqueue_style("weise-elfen-parent-style", get_template_directory_uri() . "/style.css");
    wp_enqueue_style("weise-elfen-child-style", get_stylesheet_uri(), array("weise-elfen-parent-style"));
}
add_action("wp_enqueue_scripts", "weise_elfen_child_enqueue_styles");
