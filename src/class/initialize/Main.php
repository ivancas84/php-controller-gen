<?php

require_once("generate/GenerateFileEntity.php");
require_once("class/model/Entity.php");

class GenInitializeMain extends GenerateFileEntity {

  public function __construct(Entity $entity) {
    $dir = PATH_GEN."src/class/controller/initialize/".$entity->getName("xxYy")."/";
    $file = "Main.php";
    parent::__construct($dir, $file, $entity);
  }
  
  
  //***** Generar codigo de clase *****
  protected function generateCode(){
        $this->string .= "<?php

require_once(\"class/controller/Initialize.php\");
require_once(\"class/model/Entity.php\");
require_once(\"class/model/Sqlo.php\");

class " . $this->getEntity()->getName("XxYy") . "InitializeControllerMain extends EntityInitializeController {

  public function __construct() {
    \$this->entity = Entity::getInstanceRequire(\"" . $this->getEntity()->getName() . "\");
    \$this->sqlo = EntitySqlo::getInstanceRequire(\"" . $this->getEntity()->getName() . "\");
  }
  
}
";
  }
  

}
