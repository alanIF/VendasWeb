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
    function getProduto($id){
        require_once 'connect.php';
        $conn = F_conect();
        $result = mysqli_query($conn, "Select * from produto where id='".$id."'");
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
            return "Produto cadastrado com sucesso";
            

        } else {
            return  "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    function editar($id,$nome,$preco){
        require_once 'connect.php';
        $conn = F_conect();
        $sql = "update produto set nome='".$nome."' , preco='".$preco."' where id='".$id."'";
        if ($conn->query($sql) == TRUE) {
                        return "Produto atualizado com sucesso";

                
                            } else {
                                return "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    function delete($id) {
        require_once 'connect.php';

        $conn = F_conect();
        $sql = "DELETE FROM produto WHERE id=" . $id ;

        if ($conn->query($sql)) {
            return "Produto excluído com sucesso";
            
        }

        $conn->close();
      
}
}
