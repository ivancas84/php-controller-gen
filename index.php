<?php

//controlador para generar el proyecto AngularIoGen

//configuracion general
require_once("./config/config.php"); //configuracion
require_once("config/structure.php");
require_once("class/admin/Main.php");
require_once("class/admin/Admin.php");

foreach($structure as $entity) {
  $gen = new GenAdminMain($entity);
  $gen->generate();

  $gen = new GenAdmin($entity);
  $gen->generateIfNotExists();
}