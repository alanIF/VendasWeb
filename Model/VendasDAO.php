<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VendasDAO
 *
 * @author PICHAU
 */
class VendasDAO {
     function listar(){
        require_once 'connect.php';
        $conn = F_conect();
        $result = mysqli_query($conn, "Select v.id id, p.nome produto,p.preco preco, v.qtd qtd from produto p, venda v where p.id=v.id_produto");
        $i = 0;
        $vendas= array();
        if (mysqli_num_rows($result)) {
            while ($row = $result->fetch_assoc()) {
                   $vendas[$i]['id'] = $row['id'];
                   $vendas[$i]['produto'] = $row['produto'];                  
                   $vendas[$i]['preco'] = $row['preco'];

                   
                   $vendas[$i]['qtd'] = $row['qtd'];
                  
                    $i++;
                }
        }
       $conn->close();
       return $vendas;
    }
    function cadastrar($id_produto,$qtd){
        require_once 'connect.php';

        $conn = F_conect();
        $sql = "INSERT INTO venda(id_produto, qtd)
                VALUES('" . $id_produto. "','" . $qtd ."' )";
        if ($conn->query($sql) == TRUE) {
            return "Venda realizada com sucesso";
           

        } else {
           return  "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    function delete($id) {
        require_once 'connect.php';

        $conn = F_conect();
        $sql = "DELETE FROM venda WHERE id=" . $id ;

        if ($conn->query($sql)) {
            return "Venda excluída com sucesso";
          

          
        }

        $conn->close();
      
}
}
