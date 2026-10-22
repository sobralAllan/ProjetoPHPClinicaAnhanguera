<?php
    namespace ClinicaVeterinaria\projeto\DAO;
    use ClinicaVeterinaria\projeto\DAO\Conexao;

    class Inserir{
        public function cadastrarVeterinario(Conexao $conexao,
                                             string $nome,
                                             string $telefone,
                                             string $endereco,
                                             float $salario,
                                             string $especialidade)
        {
            try
            {
                $conn = $conexao->conectar();//Abre a conexão com o banco
                
                $sql  = "Insert into veterinario(codigo, nome, especialidade, 
                salario, endereco, telefone) values('','$nome','$especialidade',
                '$salario','$endereco','$telefone')";//Preparando o comando
                
                $result = mysqli_query($conn,$sql);//Executar o comando no bd
                //Verifico se executou ou não

                if($result){
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br>Não inserido!";

            }
            catch(Exception $erro)
            {
                return "<br><br>Impossível cadastrar cliente <br><br> $erro";
            }
        }//fim do método cadastrar
    }//fim da classe
?>