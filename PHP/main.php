<?php
    namespace ClinicaVeterinaria\projeto\php;
    require_once('veterinario.php');
    use ClinicaVeterinaria\projeto\php\Veterinario;

    
    $allan = new Veterinario(1, "Allan", "Clinico Geral", 13000,"Rua Blá", "11956562323");
    $joao  = new Veterinario(2, "João", "Oftalmo", 20000, "Rua Geri", "11111111");

    echo $allan->imprimir();  
    echo $joao->imprimir(); 

   
?>