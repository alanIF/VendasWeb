<?php
           
      

    if (isset( $_GET['id'])) {
        require_once '../Controller/VendasController.php';

         $id=(int)$_GET['id'];
        $objControl = new VendasController();
       $mensagem=  $objControl->excluirVenda($id);
         echo "<script language='javascript' type='text/javascript'>"
            . "alert('".$mensagem."');";

                echo "</script>";
                echo "<script language='javascript' type='text/javascript'>
window.location.href = 'Venda_listar.php';
</script>";
           

    }else{
        
        header("Location:Produto_listar.php");
        
    }

?>