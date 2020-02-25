<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProdutoDAO
 *
 * @author PICHAU
 */
class ProdutoDAO {
    function listar(){
        require_once 'connect.php';
        $conn = F_conect();
        $result = mysqli_query($conn, "Select * from produto");
        $i = 0;
        $produtos= array();
        if (mysqli_num_rows($result)) {
            while ($row = $result->fetch_assoc()) {
                   $produtos[$i]['id'] = $row['id'];
                   $produtos[$i]['nome'] = $row['nome'];
                   $produtos[$i]['preco'] = $row['preco'];
                  
                    $i++;
                }
        }
       $conn->close();
       return $produtos;
    }
    function cadastrar($nome,$preco){
        require_once 'connect.php';

        $conn = F_conect();
        $sql = "INSERT INTO produto(nome, preco)
                VALUES('" . $nome . "','" . $preco ."' )";
        if ($conn->query($sql) == TRUE) {
            echo "<script language='javascript' type='text/javascript'>"
            . "alert('Produto cadastrado com sucesso!');";
                            echo "</script>";

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    function delete($id) {
        require_once 'connect.php';

        $conn = F_conect();
        $sql = "DELETE FROM produto WHERE id=" . $id ;

        if ($conn->query($sql)) {
            echo "<script language='javascript' type='text/javascript'>"
            . "alert('Produto excluído com sucesso!');";

                echo "</script>";
            echo "<script language='javascript' type='text/javascript'>
            window.location.href = 'javascript:window.history.go(-1);';
            </script>";
        }

        $conn->close();
      
}
}
