<?php
declare(strict_types=1);

require_once "./vendor/autoload.php";
require_once "./app/config.php";


$url = $_GET['url'] ?? '/';


switch($url){
    case '/':
        $ctr = new Ifba\Controller\HomeController();
        $ctr->index();
    break;
    default:
         $ctr = new Ifba\Controller\ErroController();
         $ctr->erro404();
}



