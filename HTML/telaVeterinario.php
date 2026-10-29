<?php
    namespace ClinicaVeterinaria\projeto\html;
    require_once('../PHP/veterinario.php');
    require_once('../DAO/conexao.php');
    require_once('../DAO/inserir.php');
    use ClinicaVeterinaria\projeto\php\Veterinario;
    use ClinicaVeterinaria\projeto\DAO\Conexao;
    use ClinicaVeterinaria\projeto\DAO\Inserir;

    $conexao = new Conexao();
    $inserir = new Inserir();
    $mensagem = "";//Retornar o resultado do cadastro
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Veterinario</title>
</head>
<body>
    <?php include('../componentes/cabecalho.php');?>
    <form method="POST">
        <label>Nome: </label>
        <input type="text" id="nome" name="nome"/><br><br>

        <label>Especialidade: </label>
        <input type="text" id="especialidade" name="especialidade"/><br><br>

        <label>Salário: </label>
        <input type="text" id="salario" name="salario"/><br><br>

        <label>Telefone: </label>
        <input type="text" id="telefone" name="telefone"/><br><br>

        <label>Endereço: </label>
        <input type="text" id="endereço" name="endereco"/><br><br>

        <button type="submit">Cadastrar
        <?php
            if(isset($_POST['nome'])){
                $nome          = $_POST['nome'];
                $telefone      = $_POST['telefone'];
                $endereco      = $_POST['endereco'];
                $salario       = $_POST['salario'];
                $especialidade = $_POST['especialidade']; 
                
                $mensagem = $inserir->cadastrarVeterinario($conexao,
                                                           $nome,
                                                           $telefone,
                                                           $endereco,
                                                           $salario,
                                                           $especialidade);
            }
        ?>
        </button>
        <button><a href="../index.php">Voltar</a></button>
        <div>
        <?php
            if(isset($_POST['nome'])){
                echo $mensagem;
            }else{
                echo "Preencha os campos";
            }
        ?>
        </div>
    </form>
</body>
</html>