<?php

require __DIR__.'/vendor/autoload.php';

use \App\Controller\Pages;
use \App\Controller\Pages\Home;
use \App\Controller\Pages\Autenticacao;
use \App\Http\Router;


//define('URL', 'http://localhost/Skillsync/ENGENHARIADESOFTWARE2023.2/');

//$obResponse = new \App\Http\Response(200, 'olá mundo');
//$obResponse->sendResponse();

//$obRouter = new Router(URL);

//$obRouter->get('/', [
//   function()
//   {
//       return new Response(200, Home::getHome());
//   }
//]);

//$obRouter->run()->sendResponse();

//exit;
header("location: resources/View/Pages/Login.php");