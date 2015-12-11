<?php

function get_template_part($part, $page)
{
	return include(__DIR__ . "/template/" . $part . "/" . $page . ".php");
}

function get_header($page)
{
	return get_template_part("header", $page);
}

function get_content($page)
{
	return get_template_part("content", $page);
}

function get_footer($is_subpage)
{
	return $is_subpage ? include(__DIR__ . "/template/subfooter.php") : include(__DIR__ . "/template/footer.php");
}