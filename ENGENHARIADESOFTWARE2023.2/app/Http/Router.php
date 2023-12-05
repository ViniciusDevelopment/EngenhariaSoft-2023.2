<?php

namespace App\Http;

use \Closure;
use \Exception;

class Router{
    private $url = '';

    private $prefix = '';

    private $routes = [];

    private $request;

    public function __construct($url)
    {
        $this->request = new Request();
        $this->url = $url;
        $this->setPrefix();
    }

    private function setPrefix()
    {
        $parseUrl = parse_url($this->url);
        $this->prefix = $parseUrl['path'] ? : '';

    }

    private function addRoute($method, $route, $params = [])
    {

        foreach($params as $key=>$value)
        {
            if($value instanceof Closure)
            {
                $params['controller'] = $value;
                unset($params[$key]);
                continue;
            }
        }

        $patternRoute = '/^'.str_replace('/','\/', $route).'$/';

        $this->routes[$patternRoute][$method] = $params;

    }

    public function get($route, $params = [])
    {
        return $this->addRoute('GET',$route,$params);
    }

    public function run()
    {
        try
        {
            throw new \RuntimeException("Página não encontrada", 404);
        }catch(Exception $e)
        {
            return new Response(404,$e->getMessage());
        }
    }
}