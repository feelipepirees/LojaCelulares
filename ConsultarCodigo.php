<?php
    namespace PHP\Modelo\DAO;
    require_once('DAO\Conexao.php');
    require_once('DAO\Consultar.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\MOdelo\DAO\Consultar;
 
?>
 
 
<!Doctype HTML>
        <head>
            <meta chartset="UTF-8"/>
            <title>Página de Consulta</title>
        </head>
        <body>
            <form metho="POST">
                <label>Código: </label>
                <input type="number" name="codigo" id="codigo"><br><br>
 
                <button type="submit">Cadastrar
                            <?php
                                $cadastrar = new consultarIndividual();
 
                                $codigo = $_POST['codigo'];
 
                            ?>
                        </button>
            </form>
            <br><br>
                    <a href="index.php"><<button>Voltar</button></a>
        </body>
</html>