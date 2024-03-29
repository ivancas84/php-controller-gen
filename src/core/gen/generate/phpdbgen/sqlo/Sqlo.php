<?php

require_once("class/model/Entity.php");

require_once("generate/GenerateFileEntity.php");


/**
 * Generar clase
 */
class ClassSqlo extends GenerateFileEntity {  


  public function __construct(Entity $entity) {
    $directorio = PATH_ROOT."src/class/model/sqlo/" . $entity->getName("xxYy") . "/";
    $nombreArchivo = $entity->getName("XxYy").".php";
    parent::__construct($directorio, $nombreArchivo, $entity);
  } 
  
  protected function generateCode() {
    $this->string .= "<?php

require_once(\"class/model/sqlo/" . $this->getEntity()->getName("xxYy") . "/Main.php\");

//***** implementacion de Sqlo para una determinada tabla *****
class " . $this->getEntity()->getName("XxYy") . "Sqlo extends " . $this->getEntity()->getName("XxYy") . "SqloMain{  
  
}

";
  }
  

}
