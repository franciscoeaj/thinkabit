<?php

require_once("../functions.php");

$_POST['title'] = "Sobre nós";
$page = "thinkabit";

get_header("subpage");
get_content($page);
get_footer(true);