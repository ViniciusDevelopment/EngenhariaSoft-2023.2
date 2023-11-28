<?php

namespace App\Utils;

class View
{
    //Metodo reponsavel por retornar o onteudo de uma view
    private static function getContentView($view)
    {
        $file = __DIR__.'/../../resources/view/'.$view;
        return file_exists($file) ? file_get_contents($file) : '';
    }

    //Metodo responsavel por retornar o conteudo renderizado de uma view
    public static function render($view, $vars = [])
    {
        $keys = array_keys($vars);
        $keys = array_map(function($item){
            return '{{'.$item.'}}';
        }, $keys);

        $contentView = self::getContentView($view);

        return str_replace($keys, array_values($vars), $contentView);

    }
}