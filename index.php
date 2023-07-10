<?php
require "configs/Core.php";
require "configs/Database.php";
require "controllers/Controller.php";
require "controllers/Home.php";

require_once "entities/Barang.php";
require_once "repositories/BarangRepository.php";

$req_uri = explode("/", $_SERVER['REQUEST_URI']);
$req_uri = $req_uri[1];

define("BASE_URL", "http://" . $_SERVER['HTTP_HOST'] . "/" . $req_uri);

$init = new Core();