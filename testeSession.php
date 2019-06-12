<?php

// session_start(); // siempre inicializo independiente de crear o mostrar

// $_SESSION['nome'] = "leslie cespedes";
// var_dump($_SESSION);

$exp = time() + 1000;
setcookie("nome","leslie",$exp);
var_dump($_COOKIE);