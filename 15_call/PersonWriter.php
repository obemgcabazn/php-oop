<?php


class PersonWriter {
  public function writeName( Person $p ) {
    return "Имя: " . $p->getName();
  }

  public function writeAge( Person $p ){
    return "Возраст: " . $p->getAge();
  }
}