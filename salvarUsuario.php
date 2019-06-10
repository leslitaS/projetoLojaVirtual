
<?php 
 include_once "funcoes.php"; 



// deja a tela formatado uma debaixo de outra
echo "<pre>";
// var_dump($_FILES);

// verifico si existe un POST E UM FILE para hacer la validacao

$contadorInputVazio = 0;
foreach($_POST as $item){
    $item == ""?$contadorInputVazio++:0;    
}

$itensPost = is_array($_POST)?count($_POST):0;//si mi array no es 0
//count($_POST)
if($contadorInputVazio == $itensPost){
    echo " <h1>Voce nao envio nenhuma informacoe sobre o usuario</h1>";
    echo ' <a class="btn btn-primary" href="cadastroUsuario.php">Voltar para pagina de Cadastro!</a>';
 exit;
}

$nomeUsuario = $_POST['nomeUsuario'];
$emailUsuario = $_POST['emailUsuario'];
$senhaUsuario = password_hash($_POST['senhaUsuario'],PASSWORD_DEFAULT);
$nivelUsuario = $_POST['nivelUsuario'];


if(addUsuario($nomeUsuario,$emailUsuario,$senhaUsuario,$nivelUsuario)){
    echo ' <h1> Usuario cadastrado com sucesso! </h1>';
    echo ' <a class="btn btn-primary" href="login.php">Ir para pagina de Login!</a>';

}else{
    echo ' <h1> Erro na hora de salvar! tenta de novo!</h1>';
}