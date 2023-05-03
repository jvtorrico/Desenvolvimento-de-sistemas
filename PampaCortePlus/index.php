<!DOCTYPE html>

<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        
        
        
        <meta charset="UTF-8">
        <title>Pampa Corte Plus</title>
    </head>
    <body>
        
        
       
        <h2>Pampa Corte Plus</h2>

            
        <h4>Solicitar acesso ao sistema</h4>
        </td>
        <td>
        <div class="alert alert-warning"><strong>Atenção!</strong>A solicitação para utilizar o sistema Pampa Corte Plus depende da aprovação do Administrador do sistema. Para tal, preencha corretamente todos os campos solicitados. Em breve entraremos em contato.</div>
        
        <form method="GET" action="DTLS.php">
        <table>
            
            
            <tr>
                <td>Nome</td>
                <td>
                    <input type="text" name="nome" placeholder="Informe seu nome completo">
                </td>
                
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
                     <select name="estado">
                    <option value="">Selecione um estado</option> 
                    <option value="AC">Acre</option> 
                    <option value="RS">Rio Grande do Sul</option> 
                    <option value="RN">Rio Grande do Norte</option> 
                    
                </td>
            </tr>
            <tr> <td></td>
                <td>
            <select name="cidade"> 
                <option value="">Selecione uma cidade</option>
                <option value="SM">Santa Maria</option>
                <option value="RB">Rio Branco</option>
                <option value="NT">Natal</option>
                <option value="PA">Porto Alegre</option>
                </td>
            </tr>
                <td></td>
                <td>
                    </br>
                    <input type="submit" class="btn btn-success" value="Solicitar acesso">
                </td>

                

        </table>
        <?php
         
        ?>
            </form>

    </body>
</html>
