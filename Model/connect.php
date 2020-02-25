<?php



    function F_conect(){
        $servidor = "localhost";    
        $nomebanco = "sig_vendas" ;
        $usuario = "root";
        $senha = "";

        // Criando conexão com o Banco de Dados
        $conn = new mysqli($servidor, $usuario, $senha,$nomebanco);
        // Checando conexão erro
        if ($conn->connect_error)
            {
         echo "<script language='javascript' type='text/javascript'>"
        . "alert('O sistema está fora do ar. Este sistema está hospedado em um servidor gratuito e os recursos foram muito utilizados nas ultimas horas. Daqui a uma hora, o sistema voltará a funcionar normalmente!');";

            echo "</script>";
        echo "<script language='javascript' type='text/javascript'>
window.location.href = 'javascript:window.history.go(-1);';
</script>";
        }else{
            // Caso falso, retorna a conexão
            return $conn;
        }
    }  

