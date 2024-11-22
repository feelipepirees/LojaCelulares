<?php
    namespace PHP\Modelo\DAO;
 
    class Conexao{
        function conectar(){
            try{
                $conn = mysqli_connect('localhost','root','','lojaCelulares');
                if($conn){
                    echo "<br>Conectado com sucesso!";
                    return $conn;
                }else{
                    echo "<br>Algo deu errado!";
                }
            }catch(Except $erro){
                return "Algo deu errado <br><br>".$erro;
            }
        }//fim do método
    }//fim da classe
 
?>