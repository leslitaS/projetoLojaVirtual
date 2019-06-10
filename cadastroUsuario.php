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
                <form action="salvarUsuario.php" method="post" enctype="multipart/form-data">
                
                <div class="form-group">
                    <!-- for ="" linko esa descricao com o input  si sekecciono o input deja atomaticamente seleccionado-->
                    <label for="nomeUsuario">Nome Completo</label>
                    <input type="text" class="form-control" id="nomeUsuario" placeholder="Nome de Usuario" name="nomeUsuario">
                
                </div>
                <div class="form-group">
                    <label for="email">Email do Usuario</label>
                    <input type="email" step="any" class="form-control" id="emailUsuario" placeholder="email@example.com" name="emailUsuario">
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" id="senhaUsuario" placeholder="senha 8-20 digitos" name="senhaUsuario">
                      
                </div>

                <div class="form-group">
                    <label for="nivelAcesso">Nivel de Acceso</label>
                    <select name="nivelUsuario" id="nivelUsuario" class="form-control">
                        <option selected disabled>Selectione!</option>
                        <option value="0">Administrador</option>
                        <option value="1">usuario</option>
                    </select>

                    
                </div>

                <button class="btn btn-success" type="submit"> Finalizar Cadastro</button>

            <!-- name="arquivo"==> damos el nombre de arquivo y lo llamamos en salvarProducto.php -->
                <!-- <input type="file" name="arquivo" id=""> -->

            </form>
        </div>
    </section>
</main>




</body>
</html>