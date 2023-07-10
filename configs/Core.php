<?php

class Core
{
    protected $controller = "home";
    protected $method = "index";
    protected $params;

    public function __construct()
    {
        $req_uri = explode("/", $_SERVER['REQUEST_URI']);
        $this->controller = ucfirst($req_uri[2]);
        $this->method = $req_uri[3] ?? "index";
        $this->params = $req_uri[4] ?? "";


        if (file_exists("controllers/$this->controller.php")) {
            require_once "controllers/$this->controller.php";
            $this->controller = new $this->controller;
            call_user_func_array([$this->controller, $this->method], [$this->params]);
        } else if ($this->controller == "") {
            header("Location: ". BASE_URL . "/home");
        } else {
            require_once "public/404.html";
        }
    }
}