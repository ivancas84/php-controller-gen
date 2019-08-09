<?php

require_once("generate/GenerateFileEntity.php");
require_once("class/model/Entity.php");

class GenAdmin extends GenerateFileEntity {

  public function __construct(Entity $entity) {
    $dir = PATH_GEN."src/class/controller/admin/".$entity->getName("xxYy")."/";
    $file = $entity->getName("XxYy").".php";
    parent::__construct($dir, $file, $entity);
  }
  
  
  //***** Generar codigo de clase *****
  protected function generateCode(){
        $this->string .= "<?php

require_once(\"class/controller/admin/".$this->entity->getName("xxYy")."/Main.php\");

class " . $this->getEntity()->getName("XxYy") . "AdminController extends " . $this->getEntity()->getName("XxYy") . "AdminControllerMain {

}
";
  }
  

}
