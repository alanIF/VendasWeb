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
        require_once ('../Model/ProdutoDAO.php');
        $produtos = new ProdutoDAO();
        return $produtos->delete($id);        
        
    }
    public function atualizarProduto($id,$nome,$preco){
        require_once ('../Model/ProdutoDAO.php');
        $produtos = new ProdutoDAO();
        $mensagem= $produtos->editar($id,$nome,$preco);
        return $mensagem;
    }
    public function getProduto($id){
        require_once '../Model/ProdutoDAO.php';
        $produtos = new ProdutoDAO();
        return $produtos->getProduto($id);
    }

    public function cadastrarProduto($nome,$preco){
        require_once '../Model/ProdutoDAO.php';
        $produtos = new ProdutoDAO();
        $msg= $produtos->cadastrar($nome,$preco);    
        return $msg;
    }
}
