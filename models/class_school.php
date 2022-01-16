<?php
class class_school extends DB
{
  public function list_classes(): array
  {
    $query = 'SELECT * FROM `list_classes`';
    parent::connection();
    $classes = $this->pdoObj->prepare($query);
    $classes->execute();
    parent::close();
    return $classes->fetchAll();
  }
}
