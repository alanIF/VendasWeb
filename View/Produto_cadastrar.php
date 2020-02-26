<?php
    include("head.php");
?>
<div class="container">   
    <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome do produto">
    </div>
    <div class="form-group">
      <label for="preco">Preço:</label>
      <input type="number" class="form-control" id="preco" step="0.01"  placeholder="Digite o preço do produto" name="preco">
    </div>
  
     <button type="submit" class="btn btn-primary btn-user btn-block" name="botao">Cadastrar</button>
  </form>
    <?php
                    
                    if (isset($_POST["botao"])) {
                        require_once '../Controller/ProdutoController.php';
                        $objControl = new ProdutoController();
                        $mensagem = $objControl->cadastrarProduto($_POST["nome"], $_POST["preco"]);
                                echo "<script language='javascript' type='text/javascript'>"
                                  . "alert('".$mensagem."');";
                                echo "</script>";
                            
                      
                    }
    ?>  
</div>
<br>
<?php
    include ("footer.php");
?>


