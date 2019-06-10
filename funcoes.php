<?php

function logarUsuario ($nome, $nivelDeAcesso) {

$usuario = ["logado"=>true,"nome"=>$nome, "nivelAcesso"=>$nivelDeAcesso];
return $usuario; 
}

function addProduto ($nome,$descricao,$preco, $img){
        
    $jsonProdutos = file_get_contents('Produtos.json'); // llamo al arqivo json
    $produtos = json_decode($jsonProdutos,true); // para transformar um json a string
    // $produtos = $produtos['Produtos'];

    $chave = count($produtos['Produtos']) + 1;
    $novoProduto = ["id"=>"produto$chave",'nome' =>$nome, 'descricao'=>$descricao, 'preco'=>$preco, 'img' =>$img];
    $produtos["Produtos"][]=$novoProduto;

    $jsonProdutos = json_encode($produtos);

    file_put_contents('Produtos.json', $jsonProdutos);

    
    return true;
}

function validarNome($nome){
    return strlen($nome) >= 3;
}

function validarCPF($cpf){
    return strlen($cpf) == 11;
}

function validarCartao($nrnCartao){
    return strlen($nrnCartao) == 16;
}

function validarDataValidade($dataValidade){
    return $dataValidade > date('y-m-d');
}

function validarCVV($cvv) {
    return strlen($cvv) == 3;
}



function addUsuario ($nomeUsuario,$emailUsuario,$senhaUsuario, $nivelDeAcesso){
        
    $jsonUsuarios = file_exists("Usuarios.json")? file_get_contents('Usuarios.json'):""; // llamo al arqivo json y pego todo el conteudo
    $Usuarios = json_decode($jsonUsuarios,true); // para transformar um json a string asociativa con el true porq json_decode devolve um obj
    // $produtos = $produtos['Produtos'];

    $itensUsuarios = is_array($Usuarios['usuarios'])?count($Usuarios['usuarios']):0;
    // count($Usuarios['usuarios'])
    $chave = $itensUsuarios  + 1;
    $novoUsuario = ["id"=>"usuario$chave",'nome' =>$nomeUsuario, 'email'=>$emailUsuario, 'senha'=>$senhaUsuario, 'nivelAcesso' =>$nivelDeAcesso];
   
    $Usuarios["usuarios"][]=$novoUsuario; // acesso a nosso primeira array

    $jsonUsuarios = json_encode($Usuarios); // pego toda la informacion y lo vuelvo a transformar a json para q sea compatible

   

    
    return  file_put_contents('Usuarios.json', $jsonUsuarios);// coloco json en el file_put_contents;
}
