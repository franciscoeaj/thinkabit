<?php

require_once("functions.php");

$_POST['title'] = "Contato";
$page = "contact";

get_header("page");
get_content($page);
get_footer(false);