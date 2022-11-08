<?php 
class seg{
public static function codificar($p){
    return  base64_encode($p);

}
public static function decodificar($p){
    return   base64_decode($p);
}

public static function GetToken(){
    if(isset($_SESSION["token"]))
        return $_SESSION["token"];

    $token = sha1(random_bytes(100));
    return $token;
}

public static function validaSesion($token){
    if(!isset($_SESSION["token"]) || !hash_equals($token,$_SESSION["token"]))
        return false;
    return true;
}


}


?>