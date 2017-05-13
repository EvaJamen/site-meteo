<?php

include 'config.php';

$q = isset($_GET['q']) ? $_GET['q'] : '';

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

else
{
    $page = '404';
}

include 'views/pages/'.$page.'.php';