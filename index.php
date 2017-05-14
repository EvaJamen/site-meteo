<?php

include 'config.php';

//cookies pendant 30min
setcookie('city', '$city', time() + 60 * 30);

////session. A revoir si utilisation d'une base de données plus tard
//session_start();
//
//$_SESSION['login']    = 'login_visiteur';
//$_SESSION['is_admin'] = true;
//$_SESSION['toto']     = array('tata', 'tutu');;



//Routing
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