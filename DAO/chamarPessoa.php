<?php
     namespace PHP\Modelo\DAO;
     require_once('CadastrarPessoa.php');
     require_once('Conexao.php');
     use PHP\Modelo\DAO\Inserir;
     use PHP\Modelo\DAO\Conexao;
 
?>
 
 
 
 
<!Doctype HTML>
 
     <head>
        <meta charset="UTF-8"/>
        <title>Página Principal</title>        
    </head>
 
                <body>
                    <form method="POST" action="CadastrarPessoa.php">
                        <label>Código</label>
                        <input type="number" name="codigo" id="codigo"><br><br>
 
                        <label>Nome</label>
                        <input type="number" name="nome" id="nome"><br><br>
 
                        <label>Endereço</label>
                        <input type="number" name="endereco" id="endereco"><br><br>
 
                        <label>Telefone</label>
                        <input type="number" name="telefone" id="telefone"><br><br>
 
                        <button type="submit">Cadastrar
                            <?php
                                $cadastrar = new CadastrarPessoa();
 
                                $codigo = $_POST['codigo'];
 
                            ?>
                        </button>
                       
                    </form><!--fim do form-->
                    <br><br>
                    <a href="index.php"><button>Voltar</button></a>
                   
 
 
                </body>
 
 
 
</html>
 
 