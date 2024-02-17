<?php
$base_url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . '/';

$titleMappings = [
    "home" => "Accueil",
   
];


if (empty($_GET)) {
    $title = "Accueil";
    include 'pages/home.php';
} else {

    $url = explode("/", filter_var($_GET['url'], FILTER_SANITIZE_URL));
    
   if (!empty($url[0])) {
        $title = $titleMappings[$url[0]] ?? "Default Title";
    } else {
        $title = "Default Title";
    }

    #var_dump($base_url,$url = explode("/", filter_var($_GET['url'],FILTER_SANITIZE_URL)));
    switch ($url[0]) {
        case "home":
            include 'pages/home.php';
            break;
            case "success":
            include 'pages/home.php';
            break;
       
        default:
            include 'pages/home.php';
            break;
    }
}
