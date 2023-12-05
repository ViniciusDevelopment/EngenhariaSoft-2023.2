<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Page
{
    public static function getPage($title, $content)
    {
        return View::render('Pages/page.php',[
            'title' => $title,
            'content' => $content,
        ]);
    }
}