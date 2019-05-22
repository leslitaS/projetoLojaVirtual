<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- <h1>  -->
        <?php 
        $nome = "Leslie Cespedes";

        // echo $nome;

        if($nome == "Leslie Cespedes" ){
            var_dump($nome); // tipo de var e o tamanho
        }
        else{
            echo "Nao e Leslie Cespedes!";
        }

        //  echo "<h1>Ola Mundo!</h1>";
        //  echo "Leslie Cespedes";

        for($i=0;$i<5;$i++){
            echo "Estou dentro de um for"."<br>"; //para concatenar uso .
        }

        for($i=0;$i<5;$i++){
            echo "Ola $nome"."<br>"; //para mostrar una variable.
        }

        ?>
     <!-- </h1>  -->

</body>
</html>