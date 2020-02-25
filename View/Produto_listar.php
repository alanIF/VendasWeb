<?php
    include("head.php");
?>
<div class="container">   
    <h3>Meus Produtos</h3>
    <div class="table-responsive">

        <table  class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Preço</th>
                                       
                                       
                                        <th>Ações</th>

                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
                                    require_once '../Controller/ProdutoController.php';
                                    $objControl = new ProdutoController();
                                    $dados= $objControl->listar();
                                    $tamanho = count($dados);
                                    if ($tamanho > 0) {
                                        for ($i = 0; $i < $tamanho; $i++) {
                                            echo "<tr>";
                                    
                                            echo"<td>" . $dados[$i]['nome'] . "</td>";
                                            echo"<td>" . $dados[$i]['preco'] . "</td>";
                                            echo"<td>  <a href='Produto_editar.php?id=" . $dados[$i]['id'] . "'><i class='fas fa-file' title='Editar Produto'  aria-hidden='true'></i></a>
                                      <a onclick='return confirmar();' href='Produto_excluir.php?id=" . $dados[$i]['id'] . "'><i class='fa fa-trash' title='Excluir Produto'  aria-hidden='true'></i></a></td></tr>";
                                
                                        }
                                    
                                    }
                                        ?>                                   

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th> <a href="Produto_cadastrar.php"><i class="fa fa-plus-square" aria-hidden="true"></i></a></th>
                                        <th></th>
                                        <th></th>
                                      
                                    </tr>
                                </tfoot>
            </table>
    </div>
</div>
<?php
    include ("footer.php");
?>


