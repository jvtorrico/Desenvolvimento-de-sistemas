<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if($_POST){
              
                //print_r($_GET); //printa tudo do array
                @$matricula /*nome da variáve*/= $_POST['matricula'/*índice da variável*/];
                @$nome = $_POST['nome'];
                @$turma = $_POST['turma'];
                @$telefone = $_POST['telefone'];
                @$endereco = $_POST['endereco'];
                @$estado= $_POST['estado'];
                
                
                
                
                if(empty($matricula)||empty($nome)||empty($turma)||empty($telefone)||empty($endereco)||empty($estado)){
                    echo ('<div class="alert"> Todos os campos são obrigatórios</div>');
                } else {
                    $result = "<br>Matrícula: ".$matricula. "<br>Nome: ".$nome. "<br>Turma".$turma. "<br>Número de telefone: ".$telefone. "<br>Endereço: ".$endereco. "<br>Estado: ".$estado;
                echo($result);    
                }
                /*$nome = $_GET['nome'];
                echo("Seu nome é: ". $nome);*/
        }
        ?>
    </body>
</html>
