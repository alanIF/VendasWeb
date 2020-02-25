<?php
    include("head.php");
    
    if (isset($_GET['id'])){
        require_once '../Controller/ProdutoController.php';
        $objControl = new ProdutoController();
        $id = (int)$_GET['id'];   
        $produto= $objControl->getProduto($id);
        if ($produto==null){
                              echo "<script language= 'JavaScript'>
                                        location.href='./Produto_listar.php'
                                </script>";
        }
        
    }
?>
<div class="container">   
    <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $produto[0]["nome"];?>" required="">
    </div>
    <div class="form-group">
      <label for="preco">Preço:</label>
      <input type="number" class="form-control" id="preco"  step="0.01"  value="<?php echo $produto[0]["preco"];?>" name="preco" required="">
    </div>
  
     <button type="submit" class="btn btn-primary btn-user btn-block" name="botao">Atualizar</button>
  </form>
    <?php
                    
                    if (isset($_POST["botao"])) {
                        
                        $objControl->atualizarProduto($id,$_POST["nome"], $_POST["preco"]);
                        echo "<meta HTTP-EQUIV='refresh' CONTENT='1;URL='`Produto_editar.php?id=".$id."'>";

                            
                      
                    }
    ?>  
</div>
<br>
<?php
    include ("footer.php");
?>
