<?php 
$senha ="leslie123";
$senhaC = password_hash($senha ,PASSWORD_DEFAULT);
var_dump(password_verify($senha,$senhaC));
// echo $senhaC;


?>