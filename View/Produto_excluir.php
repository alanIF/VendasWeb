<?php
           
      

    if (isset( $_GET['id'])) {
        require_once '../Controller/ProdutoController.php';

         $id=(int)$_GET['id'];
        $objControl = new ProdutoController();
        $objControl->excluirProduto($id);
    }else{
        
        header("Location:Produto_listar.php");
        
    }

?>