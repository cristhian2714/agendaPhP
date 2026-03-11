<?php 
    namespace Projeto\view;
    require_once("../model/Pessoa.php");//Chamando o arquivo
    use Projeto\model\Pessoa;//Chamando a classe que está no arquivo pessoa.php
    //Instanciar uma variável da classe pessoa
    $pessoa = new Pessoa();//Conexão direta com uma objeto vazio 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Pessoa</title>
</head>
<body>
    <h1>Cadastrar Cliente</h1>
    <br><br>
    <form method="POST">
        <label>Código: </label>
        <input type="number" name="codigo" id="codigo"/>
        <br><br>
        <label>Nome: </label>
        <input type="text" name="nome" id="nome"/>
        <br><br>
        <label>CPF: </label>
        <input type="number" name="cpf" id="cpf"/>
        <br><br>
        <label>Telefone: </label>
        <input type="text" name="telefone" id="telefone"/>
        <br><br>
        <label>Endereço: </label>
        <input type="number" name="endereco" id="endereco"/>
        <br><br>
        <label>Status: </label>
        <input type="text" name="status" id="status"/>
        <br><br>

        <button type="submit">Cadastrar
            <?php
                try{
                    $codigo   = $_POST['codigo'];
                    $nome     = $_POST['nome'];
                    $cpf      = $_POST['cpf'];
                    $telefone = $_POST['telefone'];
                    $endereco = $_POST['endereco'];
                    $status   = $_POST['status'];
                    //Instanciar a variável pessoa com dados
                    $pessoa = new Pessoa($codigo,$nome,$cpf,$telefone,$endereco,$status);
                }catch(Except $erro){
                    echo "Algo deu errado!!! <br><br> $erro";
                }

            ?>
        </button><br>
        <?php 
             echo $pessoa->imprimir();
        ?>

    </form>
    <button><a href="index.php">Voltar</a></button>
        
    
</body>
</html>