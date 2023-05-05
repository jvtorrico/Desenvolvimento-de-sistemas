<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de ensino</title>
        <link href="css/default.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <h2>Sistema de ensino</h2>
        <form method="post" action="userDetails.php">
            <table>
                <tr>
                    <td>Matricula (número):</td>
                    <td>
                        <!-- int matricula = 1872150 -->
                        <input type="number" name="matricula"
                               placeholder="Matricula">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Nome:</td>
                    <td>
                        <input type="text" name="nome"
                               placeholder="Nome do aluno">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Turmas:</td>
                    <td>
                        <input type="radio" name="turma" value="411">411
                        <input type="radio" name="turma" value="423">423
                        <input type="radio" name="turma" value="413">413
                        <br>
                        <input type="radio" name="turma" value="421">421
                        <input type="radio" name="turma" value="422">422
                        <input type="radio" name="turma" value="433">433
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Telefone:</td>
                    <td>
                        <input type="text" name="telefone"
                               placeholder="Telefone de contato">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Endereço:</td>
                    <td>
                        <input type="text" name="endereco"
                               placeholder="Endereço">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Estado:</td>
                    <td>
                        <select name="estado">
                            <option value="">Selecione um estado</option>
                            <option value="RS">RS</option>
                            <option value="SC">SC</option>
                            <option value="SP">SP</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Enviar">
                        <input type="reset" value="Limpar campos">
                    </td>
                    <td></td>
                </tr>
            </table>
            <?php
            if ($_GET) {
                //Imprime tudo que estiver dentro do array.
                //print_r($_GET);
                @$matricula = $_GET['matricula'];
                @$nome = $_GET['nome'];
                @$turma = $_GET['turma'];
                @$telefone = $_GET['telefone'];
                @$endereco = $_GET['endereco'];
                @$estado = $_GET['estado'];
                
                //|| - ou 
                //&& - e
                if (empty($matricula)|| empty($nome)
                        || empty($turma) || empty($telefone) 
                        || empty($endereco) || empty($estado)) {
                    echo('<div class="alert"> Todos os campos são obrigatórios. </div>');
                }else{
                    //entra aqui se todos os campos obrigatórios forem preenchidos.
                    // nomeCompleto = nome + sobrenome; //concatenação de strings
                    $result = "Matricula: ".$matricula. "<br>Nome: ".$nome.
                            "<br>Turma: ".$turma. "<br>Telefone: ".$telefone.
                            "<br>Endereço: ".$endereco.
                            "<br>Estado: ".$estado;
                    echo($result);
                }
                
               
            }
            ?>
        </form>
    </body>
</html>
