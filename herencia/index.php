<?php

class User
{
  public $name;

  public function __construct($name)
  {
    $this->name = $name;
  }

  final public function getName() // No puede sobreescribir el metodo
  {
    return $this->name;
  }
}

class Admin extends User
{

}

$admin = new Admin('Rodcko');
echo $admin->getName(); // Uso en reaalidad lo que tiene User
