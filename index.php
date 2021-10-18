<?php
include ("./views/header.php");

if ($_SERVER['REQUEST_URI'] == '/') {
    include ("./views/index.html");
} elseif ($_SERVER['REQUEST_URI'] == '/ppol') {
    include ("./views/ppol.html");
} elseif ($_SERVER['REQUEST_URI'] == '/about') {
    include ("./views/about.html");
} elseif ($_SERVER['REQUEST_URI'] == '/reviews') {
    include ("./views/reviews-2.html");
} elseif ($_SERVER['REQUEST_URI'] == '/contacts') {
    include ("./views/contacts.html");
} elseif ($_SERVER['REQUEST_URI'] == '/partners') {
    include ("./views/for-partners.html");
} elseif ($_SERVER['REQUEST_URI'] == '/rates') {
    include ("./views/rates.html");
} elseif ($_SERVER['REQUEST_URI'] == '/reserves') {
    include ("./views/reserves.html");
}elseif ($_SERVER['REQUEST_URI'] == '/support') {
    include ("./views/support.html");
} elseif ($_SERVER['REQUEST_URI'] == '/news') {
    include ("./views/news.html");
} elseif ($_SERVER['REQUEST_URI'] == '/start') {
    include ("./views/rates-line.html");
    include ("./views/exchange-direction.html");
} elseif ($_SERVER['REQUEST_URI'] == '/step2') {
    include ("./views/rates-line.html");
    include ("./views/exchange-details.html");
} elseif ($_SERVER['REQUEST_URI'] == '/step3') {
    include ("./views/rates-line.html");
    include ("./views/exchange-confirm.html");
} elseif ($_SERVER['REQUEST_URI'] == '/result') {
    include ("./views/rates-line.html");
    include ("./views/exchange-result.html");
} else {
    include ("./views/error404.html");
}

include ("./views/footer.php");
?>
