<!DOCTYPE html>
<html lang="en">
<?php include_once "head.php"; ?>
<body>
    <?php include_once "header.php"; ?>
<!--  -->
<main class="container">
    <section class="row">
        <div class="div col-md-6">
            
            <!-- todos los datos de mi form se guardaran en salvarProduto e o enctype="multipart/form-data ->guarda las inf del usuario  -->
                <form action="logarUsuario.php" method="post" enctype="multipart/form-data">
                
                
                <div class="form-group">
                    <label for="email">Email do Usuario</label>
                    <input type="email" step="any" class="form-control" id="emailUsuario" placeholder="email@example.com" name="emailUsuario">
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" id="senhaUsuario" placeholder="senha 8-20 digitos" name="senhaUsuario">
                      
                </div>

               
               
                <button class="btn btn-success" type="submit"> Logar</button>
                    <p>Ou</p>
                <a class="btn btn-primary" href="cadastroUsuario.php"> Criar Cadastro!</a>
              

            </form>
        </div>
    </section>
</main>




</body>
</html>