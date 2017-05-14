<?php

include 'config.php';

//Cookies during 30min
setcookie('city', '$city', time() + 60 * 30);

//Prevent the user for writing q on the URL
$q = isset($_GET['q']) ? $_GET['q'] : '';

//Routing for all pages
if($q == '')
{
    $page = 'home';
}
else if($q == 'home')
{
    $page = 'home';
}
else if($q == 'geolocation')
{
    $page = 'geolocation';
}
else if($q == 'city')
{
    $page = 'city';
}
else if($q == 'actus')
{
    $page = 'actus';
}
else if($q == 'preference')
{
    $page = 'preference';
}

else
{
    $page = '404';
}

include 'views/partials/header.php';
include 'views/pages/'.$page.'.php';
include 'views/partials/footer.php';