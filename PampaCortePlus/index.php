<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Pampa Corte Plus</title>


    </head>
    <body>
        <h2>Pampacorteplus</h2>
        <form method="post" action="index.php">
        <table >
            <tr>


                <td></td>
            </tr>
            <tr>
                <td>Nome</td>
                <td>
                    <input type="text" name="nome" placeholder="Informe seu nome completo">
                </td>
                <td></td>
            </tr>

            <tr>
                <td>E-mail</td>
                <td>
                    <input type="text" name="email" placeholder="Informe seu email.">
                </td>
                <td></td>
            </tr>
            <tr>

            <tr>
                <td>Telefone</td>
                <td>
                    <input type="text" name="telefone" placeholder="Informe seu telefone">
                </td>

            </tr>
            <td>Atuação</td>
            <td>
                <textarea name="area" placeholder="Informe sua área de atuação"></textarea>
            </td>

            <tr>
                <td>Selecione um tipo de acesso</td>
                <td>
                    <input type="radio" name="acesso" value="adm">Administrador
                    <br>
                    <input type="radio" name="acesso" value="estudante">Estudante
                    <br>
                    <input type="radio" name="acesso" value="produtor">Produtor
                    <br>
                    <input type="radio" name="acesso" value="professor">Professor 
                    <br>
                    <input type="radio" name="acesso" value="tecnico">Técnico
                    <br>
                    <input type="radio" name="acesso" value="visitante">Visitante                    
                </td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Solicitar acesso">
                </td>



        </table>
        <?php
        if ($_POST) {
            @$nome ['nome'];
            @$email = ['email'];
            @$telefone = ['telefone'];
            @$area = ['area'];
            @$acesso = ['acesso'];

            if (empty($nome) || empty($email) || empty($telefone) || empty($area) || empty($acesso)) {
                echo ('<div class="alert"> Todos os campos são obrigatórios</div>');
            } else {
                $result = "<br>nome: " . $nome . "<br>email: " . $email . "<br>telefone: " . $telfone . "<br>area: " . $area . "<br>acesso: " . $acesso;
                echo($result);
            }
        }
        ?>
            </form>

    </body>
</html>
