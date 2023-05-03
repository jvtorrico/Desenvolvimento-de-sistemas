 <!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php
       if ($_GET) {
            
            @$nome = $_GET['nome'];
            @$email = $_GET['email'];
            @$telefone = $_GET['telefone'];
            @$area = $_GET['area'];
            @$acesso = $_GET['acesso'];
            @$estado = $_GET['estado'];
            @$cidade = $_GET['cidade'];
            if (empty($nome)||empty($email)||empty($telefone)||empty($area)|| empty($acesso)||empty($estado)||empty($cidade)) {
               
                echo('<div> Todos os campos são obrigatórios</div>');
            } else {
                $result = "<br>Nome: ".$nome."<br>Email: ".$email."<br>Telefone: ".$telefone."<br>Área: " . $area . "<br>Acesso: " . $acesso."<br>Estado: ".$estado."<br>Cidade: ".$cidade;
                echo($result);
            }
        }
       
        ?>
</body>
</html>