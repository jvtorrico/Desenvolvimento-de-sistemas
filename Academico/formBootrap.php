<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <title>Formulários</title>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
    </head>
    <style>
            .col-sm-12{
                border: 1px solid red;
            }
    </style>
    
    <body>
        <div class="container">
            <form method="POST" action="formBootrap.php"> 
                <div class="row page-header">
                    <div class="col-sm-12">
                        <h1>Menu: </h1>
                    </div>
                        
                    
                </div>
                <div class="row">
                    <div class="col-sm-8">

                        <div class="form-group">
                            <label for="matricula">Matrícula:</label>
                             <input type="number" class="form-control" id="matricula" placeholder="Insira o número de matrícula">
                        </div>
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                             <input type="text" class="form-control" id="nome" placeholder="Insira seu nome">
                        </div>
                        <div class="form-group">
                            <label>Turmas:</label>
                            <div class="radio">
                                <label><input type="radio" name="turma" value="411">411</label> 
                                <label><input type="radio" name="turma" value="412">412</label>
                                <label><input type="radio" name="turma" value="413">413</label>
                                <div class="radio">
                                <label><input type="radio" name="turma" value="421">421</label>
                                <label><input type="radio" name="turma" value="422">422</label>
                                <label><input type="radio" name="turma" value="423">423</label>
                                </div>
                                <div class="radio">
                                <label><input type="radio" name="turma" value="431">431</label>
                                <label><input type="radio" name="turma" value="432">432</label>
                                <label><input type="radio" name="turma" value="433">433</label>
                                </div>
                                
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="estado">Selecione um estado:</label>
                            <select class="form-control" id="estado" name="estado">
                                <option value="" >Selecione um estado</option>
                                <option value="RS" >RS</option>
                                <option value="SC" >SC</option>
                                <option value="SP" >SP</option>
                            </select>
                            <div class="form-group">
                                <label>Selecione uma disciplina:</label>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="disciplina[]" value="PDI">PDI</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="disciplina[]" value="DSII">DSI 1</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="disciplina[]" value="DSIII">DSI 2</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="enviar" class="btn btn-primary">
                            <input type="reset" value="Limpar campos" class="btn btn-danger">                            
                        </div>                    
                </div>             
                
                <div class="row">
                    <div class="col-sm-4">
                        
                             <img src="img/campus-ufsm-gilciano-sala-2-.jpg" alt=""/>
                    </div>
                    
                    
                </div>
    <?php
    if($_POST){
        print_r($_POST);
        @$matricula = $_POST['matricula'];
        @$nome = $_POST['nome'];
        @$turma = $_POST['turma'];
        @$estado = $_POST['estado'];
        @$disciplinaList = $_POST['discplina'];
        
        
        echo('<div class="panel panel-success"></div>
                <div class="panel-heading">Dados informados: </div>
                <div class="panel-body">
                <p>'.$matrícula'</p><p>'
                .$nome.'</p><p>'
                .$turma.'</p><p>'
                .$estado.'</p><p>'
                .$disciplina.'</p><p>'
               
                '</div></div>');
    }
            
            
    ?>
            </form>
            
        </div>
    </body>
</html>
