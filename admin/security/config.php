<?php
//  Kiem tra dang nhap
// Neu chua chua dang nhap thi bao loi

define("BASE_DIR", "dsakdhaksldlasjdlasdasdsdsa");

$file_dir = __DIR__;
$root_dir = str_replace(BASE_DIR . DIRECTORY_SEPARATOR . "security", "", $file_dir);
define("ROOT_DIR", $root_dir );

require_once(ROOT_DIR . "functions/functions.php");
require_once(ROOT_DIR . "classes/dbConnection.php");
session_start();
$checkLoggedIn = (isset($_SESSION["logged"]) && $_SESSION["logged"] == 1) ? 1 : 0;
if ($checkLoggedIn == 0) {
    echo "Access Denny !";
    exit();
}
