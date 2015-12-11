<?php

require_once("functions.php");

$_POST['title'] = "Serviços";
$page = "services";

get_header("page");
get_content($page);
get_footer(false);