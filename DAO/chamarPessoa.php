<?php
     namespace PHP\Modelo\DAO;
     require_once('Conexao.php');
     require_once('Inserir.php');
     use PHP\Modelo\DAO\Inserir;
     use PHP\Modelo\DAO\Conexao;
?>
 
<!Doctype HTML>
            <head>
                <meta charset="UTF-8"/>
                <title>Página Principal</title>        
            </head>
 
   
                    <body style="background-image: url('../Imagem/fundo-1.png');">
                   
 
                            <form method="POST">
                                                            <label>Código</label>
                                                            <input type="number" name="codigo" id="codigo"><br><br>
 
                                                            <label>Nome</label>
                                                            <input type="text" name="nome" id="nome"><br><br>
 
                                                            <label>Endereço</label>
                                                            <input type="text" name="endereco" id="endereco"><br><br>
 
                                                            <label>Telefone</label>
                                                            <input type="text" name="telefone" id="telefone"><br><br>
 
                                                            <button type="submit">Cadastrar
                                                                <?php
                                                                    $conexao = new Conexao();
 
                                                                    $codigo   = $_POST['codigo'];
                                                                    $nome     = $_POST['nome'];
                                                                    $endereco = $_POST['endereco'];
                                                                    $telefone = $_POST['telefone'];
                                                                    $inserir  = new Inserir();
                                                                    echo $inserir -> cadastrarPessoa($conexao, $codigo, $nome, $endereco, $telefone);
 
                                                                ?>
                                                            </button>
                                                       
                            </form><!--fim do form-->
                            <br><br>
                           
                            <a href="index.php"><button>Voltar</button></a>
 
 
 
                    </body>
 
                   
                                           
                       
 
 
                   
 
 
 
</html>
 
 