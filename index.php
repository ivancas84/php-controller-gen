<?php

//controlador para generar el proyecto AngularIoGen

//configuracion general
require_once("./config/config.php"); //configuracion
require_once("config/structure.php");

foreach($structure as $entity) {
  require_once("class/admin/Main.php");
  $gen = new GenAdminMain($entity);
  $gen->generate();

  require_once("class/admin/Admin.php");
  $gen = new GenAdmin($entity);
  $gen->generateIfNotExists();

  require_once("class/initialize/Main.php");
  $gen = new GenInitializeMain($entity);
  $gen->generate();

  require_once("class/initialize/Initialize.php");
  $gen = new GenInitialize($entity);
  $gen->generateIfNotExists();
}