<?php
    include("head.php");
?>
<div class="container">   
    <h3>Minhas Vendas</h3>
    <div class="table-responsive">

        <table  class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Produto</th>
                                        <th>Quantidade</th>
                                        <th> Total da Venda (R$)</th>
                                       
                                        <th>Ações</th>

                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
                                    require_once '../Controller/VendasController.php';
                                    $objControl = new VendasController();
                                    $dados= $objControl->listar();
                                    $tamanho = count($dados);
                                    if ($tamanho > 0) {
                                        for ($i = 0; $i < $tamanho; $i++) {
                                            echo "<tr>";
                                    
                                            echo"<td>" . $dados[$i]['produto'] . "</td>";
                                            echo"<td>" . $dados[$i]['qtd'] . "</td>";
                                            $total = $dados[$i]['qtd']*$dados[$i]['preco'];
                                            echo "<td>".$total."</td>";
                                            echo"<td>  
                                      <a onclick='return confirmar();' href='Venda_excluir.php?id=" . $dados[$i]['id'] . "'><i class='fa fa-trash' title='Excluir Venda'  aria-hidden='true'></i></a></td></tr>";
                                
                                        }
                                    
                                    }
                                        ?>                                   

                                </tbody>
                                <tfoot>
                                    <?php 
                                        require_once '../Controller/ProdutoController.php';
                                        $objControl2 = new ProdutoController();
                                        $dados= $objControl2->listar();
                                        $tamanho = count($dados);
                                        
                                    ?>
                                    <tr>
                                            <form action="" method="post" enctype="multipart/form-data">

                                                <th colspan="2">   <select class="form-control" name="produto" required="">
                                                        <?php 
                                                        if ($tamanho > 0) {
                                                            for ($i = 0; $i < $tamanho; $i++) {
                                                                echo "<option value='". $dados[$i]['id'] ."'>" . $dados[$i]['nome'] ." - R$ ". $dados[$i]['preco'] ."</option> ";
                                                            }
                                                        }
                                                        ?>
                                                                
      </select></th>
                                        <th>      <input type="number" class="form-control" id="qtd" placeholder="Digite a quantidade " name="qtd" required="">
</th>

                                        <th>     <button type="submit" class="btn btn-success btn-user btn-block" name="botao">Realizar Venda</button>
</th>
                                          <?php
                    
                                if (isset($_POST["botao"])) {
                                        if($_POST["qtd"]>0){
                                            $objControl->cadastrarVenda($_POST["produto"], $_POST["qtd"]);
                                          echo "<meta HTTP-EQUIV='refresh' CONTENT='1;URL='Venda_listar.php'>";

                                        }


                                }
                                 ?> 
                                            </form>
                                    </tr>
                                </tfoot>
            </table>
    </div>
</div>
<?php
    include ("footer.php");
?>


