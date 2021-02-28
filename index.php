<?php

require 'greet.php';

echo greet('Rodcko', 'Como estas...');


class User
{
  public $type;
}

class Admin
{
  public function greet()
  {
    return "Hola Admin";
  }
}

$user = new User;
$user->type = new Admin;
echo $user->type->greet();