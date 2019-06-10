<?php 
 include_once "funcoes.php"; 


$contadorInputVazio = 0;
foreach($_POST as $item){
    $item == ""?$contadorInputVazio++:0;    
}

$itensPost = is_array($_POST)?count($_POST):0;//si mi array no es 0
//count($_POST)
if($contadorInputVazio == $itensPost){
    echo " <h1>Voce nao envio nenhuma informacoe sobre o login</h1>";
    echo ' <a class="btn btn-primary" href="login.php">Voltar para pagina de Login!</a>';
 exit;
}



// las informaciones de mi usuario estan en usuario.json entonces pego as informacoes

$Usuarios = file_exists("Usuarios.json")? file_get_contents('Usuarios.json'):"";
$Usuarios = json_decode($Usuarios,true);

$email = $_POST['emailUsuario'];
$senha = $_POST['senhaUsuario'];


foreach ($Usuarios['usuarios'] as $key => $usuario) {
    if($usuario['email'] == $email){
        $usuarioExiste = $Usuarios['usuarios'][$key];
        break;
    }
}

if (isset($usuarioExiste) && password_verify($senha,$usuarioExiste['senha'])) {
    header("Location:index.php");
}else {
    echo " email ou asenha invalida! Tente Novamente";
    echo ' <a class="btn btn-primary" href="login.php">Voltar para pagina de Login!</a>';
    
}
