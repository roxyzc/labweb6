<?php
require_once("class/Modularisasi.php");
require_once("class/Database.php");
require_once("template/header.php");
require_once("template/sidebar.php");
require_once("class/Form.php");
$moduleName = strpos(@$_REQUEST["mod"], "/") ? str_split(@$_REQUEST["mod"], strpos(@$_REQUEST["mod"], "/"))[0] : @$_REQUEST['mod'];

$mod = [
    "home" => "module/home.php",
    "update" => "module/artikel/update.php",
    "about" => "module/artikel/about.php",
    "add" => "module/artikel/add.php",
    "delete" => "module/artikel/delete.php",
    "contact" => "module/artikel/contact.php",
    "error" => "module/error/404/error.php",
];

$moduleLoader = new Modularisasi($mod);
$moduleLoader->load($moduleName);
require_once("template/footer.php");
