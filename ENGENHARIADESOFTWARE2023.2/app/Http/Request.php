<?php

namespace App\Http;

class request
{
    private $httpmethod;
    private $uri;
    private $queryParams = [];
    private $postVars = [];
    private $headers = [];

    public function __construct()
    {
        $this->queryParams = isset($_GET) ? $_GET : [];
        $this->postVars = isset($_POST) ? $_POST : [];
        $this->headers = getallheaders();
        $this->httpmethod = $_SERVER['REQUEST_METHOD'] ? : '';
        $this->uri = $_SERVER['REQUEST_URI'] ? : '';
    }

    public function getHttpMethod()
    {
        return $this->httpMethod;
    }

    public function getUri()
    {
        return $this->uri;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function getQueryParams()
    {
        return $this->queryParams;
    }

    public function getPostVars()
    {
        return $this->postVars;
    }

}
