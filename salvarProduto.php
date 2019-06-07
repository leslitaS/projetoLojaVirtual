
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

if($contadorInputVazio == count($_POST)){
     
    echo " <h1>Voce nao envio nenhuma informacoe sobre o produto</h1>";
    echo '  <a class="btn btn-primary" href="cadastroProduto.php">Voltar para pagina de Cadastro!</a>';

//  para la ejecucion de la pag si no tiene  un POST E UM FILE para hacer la validacao
 exit;
}


$imgAceitas = ["image/png","image/jpg","image/jpeg"];
$erroEnvio =$_FILES['arquivo']['error'];


$nomeProduto = $_POST['nomeProduto'];
$precoProduto = $_POST['precoProduto'];
$descProduto = $_POST['descProduto'];

$nomeArquivo = $_FILES['arquivo']['name'];
$arquivoTmp = $_FILES['arquivo']['tmp_name'];

$caminhoImg= "img/$nomeArquivo";
$typeFile = $_FILES['arquivo']['type'];

if($erroEnvio !== 0){
     
    echo " <h1>Ouve um erro no envio do arquivo verifique e tente novamente!</h1>";
    echo '  <a class="btn btn-primary" href="cadastroProduto.php">Voltar para pagina de Cadastro!</a>';

 exit;
}

if (array_search($typeFile, $imgAceitas) == false) {
    echo " <h1>Extensao do arquivo invalido! veifique se o arquivo e uma imagem do tipo png, jpg, jpeg</h1>";
    echo '  <a class="btn btn-primary" href="cadastroProduto.php">Voltar para pagina de Cadastro!</a>';

 exit;
}




// ese arq temp va estar en la pasta img con ese nome va a parecer con ese nome na pasta
move_uploaded_file($arquivoTmp, "img/$nomeArquivo");


// esta funcao esta en el arquivo funcoes.php que ya tengo enlazado en mi head.php
addProduto($nomeProduto,$precoProduto,$descProduto,$caminhoImg);


?>