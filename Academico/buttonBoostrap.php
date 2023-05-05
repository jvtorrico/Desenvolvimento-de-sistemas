<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Botões</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <style>
            .btn-danger{
                background-color: purple;
                border-color: black;
            }
            
            .btn-danger:hover{
                background-color: greenyellow;
                border-color: black;
            }
        </style>
    </head>
    <body>
        
        <form method="POST" action="buttonBoostrap.php">
        <input type="text" name="teste">
        <input class="btn btn-success" type="submit" value="Enviar">
        <a  class="btn btn-danger" href="#">Google</a>
        <input class="btn btn-link" type="submit" value="Enviar">
        
        
        <?php
        if($_POST){
            
            $texto = $_POST['teste'];
            if(!empty($texto)){
                header("Location: http://www.ufsm.br");
                
                
            }else {
                echo('<div class="alert alert-danger">
                    <strong>Atenção!</strong>O campo não pode vazio0.
                    </div');
            }
        }
        
        
            ?>
</form>
    </body>
</html>
