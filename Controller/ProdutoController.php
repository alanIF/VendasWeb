<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProdutoController
 *
 * @author PICHAU
 */
class ProdutoController {
     public function listar(){
        require_once '../Model/ProdutoDAO.php';
        $produtos = new ProdutoDAO();
        return $produtos->listar();
    }
    public function excluirProduto($id){
        require ('../Model/ProdutoDAO.php');
        $produtos = new ProdutoDAO();
        $produtos->delete($id);        
        
    }
    public function cadastrarProduto($nome,$preco){
        require_once '../Model/ProdutoDAO.php';
        $produtos = new ProdutoDAO();
        $produtos->cadastrar($nome,$preco);    
        
    }
}
