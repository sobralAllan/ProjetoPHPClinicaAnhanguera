<?php
    namespace ClinicaVeterinaria\projeto\html;
    require_once('../PHP/veterinario.php');
    use ClinicaVeterinaria\projeto\php\Veterinario;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Veterinario</title>
</head>
<body>
    <form method="POST">
        <label>Código: </label>
        <input type="number" id="codigo" name="codigo"/><br><br>

        <label>Nome: </label>
        <input type="text" id="nome" name="nome"/><br><br>

        <label>Especialidade: </label>
        <input type="text" id="especialidade" name="especialidade"/><br><br>

        <label>Salário: </label>
        <input type="text" id="salario" name="salario"/><br><br>

        <label>Telefone: </label>
        <input type="text" id="telefone" name="telefone"/><br><br>

        <label>Endereço: </label>
        <input type="text" id="endereço" name="endereço"/><br><br>
    </form>
</body>
</html>