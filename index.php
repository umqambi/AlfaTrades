<?php
include ("./views/header.php");

if ($_SERVER['REQUEST_URI'] == '/') {
    include ("./views/index.html");
} elseif ($_SERVER['REQUEST_URI'] == '/about') {
    include ("./views/about.html");
} elseif ($_SERVER['REQUEST_URI'] == '/reviews') {
    include ("./views/reviews.html");
}

include ("./views/footer.php");
?>