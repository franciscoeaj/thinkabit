<?php

require_once("functions.php");

$_POST['title'] = "Portfolio";
$page = "portfolio";

get_header("page");
get_content($page);
get_footer(false);