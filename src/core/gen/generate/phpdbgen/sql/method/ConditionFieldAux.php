<?php


require_once("generate/GenerateEntityRecursiveFk.php");

class ClassSql_conditionFieldAux extends GenerateEntityRecursiveFk{



  protected function start(){
    $this->string .= "  protected function conditionFieldAux(\$field, \$option, \$value) {
    if(\$c = \$this->_conditionFieldAux(\$field, \$option, \$value)) return \$c;
";
  }


  protected function body(Entity $entity, $prefix){
    $this->string .= "    if(\$c = EntitySql::getInstanceFromString('{$entity->getName()}','{$prefix}')->_conditionFieldAux(\$field, \$option, \$value)) return \$c;
";
  }

  protected function end(){
    $this->string .= "  }

";
  }







}
