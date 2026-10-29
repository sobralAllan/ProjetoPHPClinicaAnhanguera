<?php
    namespace ClinicaVeterinaria\projeto\HTML;
    require_once('../DAO/Conexao.php');
    require_once('../DAO/Consultar.php');

    use ClinicaVeterinaria\projeto\DAO\Conexao;
    use ClinicaVeterinaria\projeto\DAO\Consultar;

    $conexao = new Conexao();
    $consultar = new Consultar();
    $resultado = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
    <title>Consultar Veterinario</title>
</head>
<body>
    <h1>Consultar Veterinário</h1>
        <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="telaVeterinario.php">Cadastrar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="consultarVeterinario.php">Consultar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="atualizarVeterinario.php">Atualizar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="excluirVeterinario.php">Excluir</a>
        </li>
    </ul>
    <form method="POST">
        <label>Código: </label>
        <input type="number" id="codigo" name="codigo"/><br><br>
        <button type="submit">Consultar
            <?php
                $resultado = $consultar->consultarVeterinario($conexao,
                                                              $_POST['codigo']);
            ?>
        </button>
    </form> 
    <?php  echo $resultado;?>
    <a href="../index.php"><button>Voltar</button></a>   
</body>
</html>