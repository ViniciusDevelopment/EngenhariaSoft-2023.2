<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Home extends Page
{
    public static function getHome()
    {
//        return View::render('Pages/Home.php',[
//            'name' => 'Tela Home',
//            'description' => 'descrição home',
//        ]);
        $content = View::render('pages/Home.php',[
            'name' => 'Tela Home',
            'description' => 'descrição home',
        ]);

        return parent::getPage('Tela Home', $content);
    }
}