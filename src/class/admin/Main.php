<?php

require_once("generate/GenerateFileEntity.php");
require_once("class/model/Entity.php");

class GenAdminMain extends GenerateFileEntity {

  public function __construct(Entity $entity) {
    $dir = PATH_GEN."src/class/controller/admin/".$entity->getName("xxYy")."/";
    $file = "Main.php";
    parent::__construct($dir, $file, $entity);
  }
  
  
  //***** Generar codigo de clase *****
  protected function generateCode(){
        $this->string .= "<?php

require_once(\"class/controller/Admin.php\");
require_once(\"class/model/Entity.php\");
require_once(\"class/model/Sqlo.php\");

class " . $this->getEntity()->getName("XxYy") . "AdminControllerMain extends EntityAdminController {

  public function __construct() {
    \$this->entity = Entity::getInstanceRequire(\"" . $this->getEntity()->getName() . "\");
    \$this->sqlo = EntitySqlo::getInstanceRequire(\"" . $this->getEntity()->getName() . "\");
  }
  
}
";
  }
  

}
