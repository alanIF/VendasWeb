<?php
           
      

    if (isset( $_GET['id'])) {
        require_once '../Controller/ProdutoController.php';

         $id=(int)$_GET['id'];
        $objControl = new ProdutoController();
        $mensagem= $objControl->excluirProduto($id);
        echo "<script language='javascript' type='text/javascript'>"
            . "alert('".$mensagem."');";

                echo "</script>";
                echo "<script language='javascript' type='text/javascript'>
       window.location.href = 'Produto_listar.php';
       </script>";
           
        
    }else{
        
        header("Location:Produto_listar.php");
        
    }

?>