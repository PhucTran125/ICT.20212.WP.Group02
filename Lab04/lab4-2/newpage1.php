<?php
include "page.php";
$newPage = new Page("New page 1", "2022", "Lam");
$newPage->addContent("Web Programming");
$newPage->get();
?>