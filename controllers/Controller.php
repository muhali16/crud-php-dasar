<?php


class Controller
{
    public function view($name, $data = []){
        if (file_exists("public/$name.php")) {
            require_once "public/$name.php";
        } else {
            require_once "public/404.html";
        }
    }
}