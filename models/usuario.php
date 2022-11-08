<?php 
class usuario{
private $usuario;
private $password;
private $salt;
private $nombre;

public function __construct($usuario,$password,$salt,$nombre){

$this ->usuario=$usuario;
$this->password= $password;
$this->$salt= $salt;
$this->$nombre=$nombre;

}
public function valida_usuario(){



$tabla[]=["usuario"=>"leo10", "password"=>"04c69e6ac625a7e0b8841bf7d4e4c5b2e572d1f3","salt"=>"gfYyO3T683y7","nombre"=>"Leo Messi"];
$tabla[]=["usuario"=>"jou1234", "password"=>"4e9a323ab6ea79e0fa09ca9a17a7d55da588aff8","salt"=>"vJhfX9b6x0bS","nombre"=>"Josting Ramos"];
$tabla[]=["usuario"=>"alexa17", "password"=>" 677df6252ce5d7697ae4977bbb67a080be518372","salt"=>"196ff4Z2VZh2","nombre"=>"Alexandra Stark"];
foreach ($tabla as $t) 
{
    $pass=sha1($this->password.$t["salt"]);
    if($this->usuario == $t["usuario"]&& $pass == $t["password"] )
    return $t;
}
return [];

}

}



?>