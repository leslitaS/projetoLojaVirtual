<!DOCTYPE html>
<html lang="en">
<?php include_once "head.php"; ?>
<body>
    <?php include_once "header.php"; ?>
<!--  -->
<main class="container">
    <section class="row">
        <div class="div col-md-6">
            
            <!-- todos los datos de mi form se guardaran en salvarProduto -->
                <form action="salvarProduto.php" method="post" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label for="nomeProduto">Nome do Produto</label>
                    <input type="text" class="form-control" id="nomeProduto" placeholder="Nome do Produto" name="nomeProduto">
                
                </div>
                <div class="form-group">
                    <label for="precoProduto">Preco do Produto</label>
                    <input type="number" step="any" class="form-control" id="precoProduto" placeholder="Preco do Produto" name="precoProduto">
                </div>
                <div class="form-group">
                    <label for="descProduto">Descricao do Produto</label>
                    <textarea   class="form-control" name="descProduto" id="descProduto"> </textarea>       
                </div>

                <div class="form-group">
                    <label for="imgProduto">Descricao do Produto</label>
                    <input type="file" id="imgProduto"  name="arquivo">
                    
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