<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dados do estudante</title>
    </head>
    <body>
        <?php
        //print_r($_POST);
        echo ('<br>');
        if ($_POST) {

            @$matricula = $_POST['matricula'];
            @$nome = $_POST['nome'];
            @$turma = $_POST['turma'];
            @$telefone = $_POST['telefone'];
            @$endereco = $_POST['endereco'];
            @$estado = $_POST['estado'];

            //|| - ou 
            //&& - e
            if (empty($matricula) || empty($nome) || empty($turma) || empty($telefone) || empty($endereco) || empty($estado)) {
                echo('<div class="alert"> Todos os campos são obrigatórios. </div>');
            } else {
                //entra aqui se todos os campos obrigatórios forem preenchidos.
                // nomeCompleto = nome + sobrenome; //concatenação de strings
                $result = "Matricula: " . $matricula . "<br>Nome: " . $nome .
                        "<br>Turma: " . $turma . "<br>Telefone: " . $telefone .
                        "<br>Endereço: " . $endereco .
                        "<br>Estado: " . $estado;
                echo($result);
            }
        }
        ?>
    </body>
</html>
