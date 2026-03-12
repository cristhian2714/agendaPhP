<?php
    namespace Projeto\view;
    require_once("../model/Pessoa.php");
    require_once("../model/Endereco.php");
    use Projeto\model\Pessoa;
    use Projeto\model\Endereco;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Endereço</title>
</head>
<body>
    <h1>Cadastrar Endereço</h1>
    <br><br>
    <form method="POST">
    <form method="POST">
        <label>Código: </label>
        <input type="number" name="codigo" id="codigo"/>
        <br><br>
        <label>Logradouro: </label>
        <input type="text" name="logradouro" id="logradouro"/>
        <br><br>
        <label>Número: </label>
        <input type="number" name="numero" id="numero"/>
        <br><br>
        <label>Bairro: </label>
        <input type="text" name="bairro" id="bairro"/>
        <br><br>
        <label>CEP: </label>
        <input type="number" name="cep" id="cep"/>
        <br><br>
        <label>Complemeento: </label>
        <input type="text" name="complemento" id="complemento"/>
        <br><br>
        <label>Cidade: </label>
        <input type="text" name="cidade" id="cidade"/>
        <br><br>
        <label>Estado: </label>
        <input type="text" name="estado" id="estado"/>
        <br><br>
        <label>Pais: </label>
        <input type="text" name="pais" id="pais"/>
        <br><br>

        <button type="submit">Achar
            <?php
                
                    $codigo   = $_POST['codigo'];
                    $logradouro    = $_POST['logradouro'];
                    $numero      = $_POST['numero'];
                    $bairro = $_POST['bairro'];
                    $cep = $_POST['cep'];
                    $complemento   = $_POST['complemento'];
                    $cidade = $_POST['cidade'];
                    $estado = $_POST['estado'];
                    $pais = $_POST['pais'];

                    //Instanciar a variável pessoa com dados
                    $endereco = new Endereco($codigo,$logradouro,$numero,$bairro,$cep,$complemento, $cidade, $estado, $pais);
                
                
                   
               

            ?>
        </button><br>
        <?php 
             echo $endereco->imprimir();
        ?>

    </form>
    <button><a href="index.php">Voltar</a></button>
    
        
    
</body>
</html>