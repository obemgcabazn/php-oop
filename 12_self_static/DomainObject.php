<?php

namespace selfstatic;

abstract class DomainObject {
  public static function create(): DomainObject {
    // В данном случае self() будет преобразовываться в ссылку на класс DomainObject
    // То есть класс, в котором он определен
    // return new self();
    // Поэтому Document:create() вызовет ошибку о том, что нельзя создать экземпляр абстрактного класса
    // Cannot instantiate abstract class DomainObject

    // В данном случае static() относится к вызывающему классу, а self к содержащему
    return new static();
  }
}

class User extends DomainObject {

}

class Document extends DomainObject {

}
