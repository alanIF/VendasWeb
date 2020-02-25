<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VendaController
 *
 * @author PICHAU
 */
class VendasController {
     public function listar(){
        require_once '../Model/VendasDAO.php';
        $vendas= new VendasDAO();
        return $vendas->listar();
    }
    public function excluirVenda($id){
        require_once ('../Model/VendasDAO.php');
        $vendas = new VendasDAO();
        $vendas->delete($id);        
        
    }
    public function cadastrarVenda($id_produto,$qtd){
        require_once '../Model/VendasDAO.php';
        $vendas = new VendasDAO();
        $vendas->cadastrar($id_produto,$qtd);    
        
    }
    
}
