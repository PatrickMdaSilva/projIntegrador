<?php
require_once(dirname(__DIR__)."/app/templates/header.php");
require_once(dirname(__DIR__)."/app/dao/UserDAO.php");
require_once("../app/models/model.php");


$model = new Model();


if (isset($_GET['pag']) && isset($_GET['folder'])) {

    $pag = $_GET['pag'];
    $folder = $_GET['folder'];
    $road = $model->getRoute($pag, $folder);

    require_once($road);
} elseif (!isset($_GET['pag'])) {

    require_once("../app/templates/home.php");
}
