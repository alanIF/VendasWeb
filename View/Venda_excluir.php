<?php
           
      

    if (isset( $_GET['id'])) {
        require_once '../Controller/VendasController.php';

         $id=(int)$_GET['id'];
        $objControl = new VendasController();
        $objControl->excluirVenda($id);

    }else{
        
        header("Location:Produto_listar.php");
        
    }

?>