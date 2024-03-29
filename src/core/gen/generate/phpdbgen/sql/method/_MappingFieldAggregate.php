<?php


class ClassSql__mappingFieldAggregate extends GenerateEntity{

  public function generate(){
    $this->start();
    $this->nf();
    $this->fk();
    $this->end();
    return $this->string;
  }


  protected function start(){
    $this->string .= "  public function _mappingFieldAggregate(\$field){
    \$t = \$this->entity->getAlias();

    switch (\$field) {
      case 'min_id': return \"MIN({\$t}.id)\";
      case 'max_id': return \"MAX({\$t}.id)\";
      case 'count_id': return \"COUNT({\$t}.id)\";

";
  }

  protected function nf(){
    foreach ($this->getEntity()->getFieldsNf() as $field){
      switch($field->getDataType()){
        case "float": case "integer":
          $this->string .= "      case 'sum_" . $field->getName() . "': return \"SUM({\$t}.{$field->getName()})\";
      case 'avg_" . $field->getName() . "': return \"AVG({\$t}.{$field->getName()})\";
      case 'min_" . $field->getName() . "': return \"MIN({\$t}.{$field->getName()})\";
      case 'max_" . $field->getName() . "': return \"MAX({\$t}.{$field->getName()})\";
      case 'count_" . $field->getName() . "': return \"COUNT({\$t}.{$field->getName()})\";

";
        break;
        case "date": case "timestamp":
        $this->string .= "      case 'avg_" . $field->getName() . "': return \"AVG({\$t}.{$field->getName()})\";
      case 'min_" . $field->getName() . "': return \"MIN({\$t}.{$field->getName()})\";
      case 'max_" . $field->getName() . "': return \"MAX({\$t}.{$field->getName()})\";
      case 'count_" . $field->getName() . "': return \"COUNT({\$t}.{$field->getName()})\";

";
        break;
      }

    }
  }

  protected function fk(){
    foreach ($this->getEntity()->getFieldsFk() as $field){
      $this->string .= "      case 'min_" . $field->getName() . "': return \"MIN({\$t}.{$field->getName()})\";
      case 'max_" . $field->getName() . "': return \"MAX({\$t}.{$field->getName()})\";
      case 'count_" . $field->getName() . "': return \"COUNT({\$t}.{$field->getName()})\";

";

    }
  }

  protected function end(){
    $this->string .= "      default: return null;
    }
  }

";
  }


}
