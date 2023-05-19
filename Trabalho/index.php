<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Bicho Chique Petshop</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../Buttons/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../Buttons/js/jquery.min.js" type="text/javascript"></script>
    </head>

    <body class="container">
        <form method="POST" action="index.php">
            <div class="row page-header" >
                <div class="col-sm-12">
                    <h1>Formulário de Ordem de Serviço - Bicho Chique Petshop</h1>
                </div>                
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <img src="img/Cachorro.PNG" alt="cachorro"/>
                    </div>
                </div>    
                <div class="col-sm-8">
                    <div class="form-group">
                        <label for="nome">Nome do cliente: </label>
                        <input type="text" class="form-control" id="nome" placeholder="Digite o nome do cliente" name="nome">
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone: </label>
                        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o número do cliente"> 
                    </div>

                    <div class="form-group">
                        <label for="animal">Nome do animal: </label>
                        <input type="text" class="form-control" id="animal" name="animal" placeholder="Digite o nome do animal"> 
                    </div>
                    <div class="form-group">
                        <label>Serviços: </label>
                        <div class="checkbox">
                            <label><input type="checkbox" name="servico[]" value="Banho e tosa"><b>Banho e tosa</b></label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="servico[]" value="Corte de unhas"><b>Corte de unhas</b></label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="servico[]" value="Limpeza de ouvidos"><b>Limpeza de ouvidos</b></label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="servico[]" value="Vacinação"><b>Vacinação</b></label>
                        </div>
                        <div class="form-group">
                            <label for="data">Data: </label>
                            <input type="date" class="form-control" name="data">
                        </div>
                        <div class="form-group">
                            <label for="observacoes">Observações: </label>
                            <textarea class="form-control" name="observacoes" placeholder="Digite quaisquer observações"></textarea>
                        </div>
                        <input value="Enviar ordem de serviço"  class="btn btn-primary" type="submit">
                    </div>

                </div>
            </div>



   



    </form>



    <?php
    // put your code here
    if($_POST){
         @$nomecliente = $_POST['nome'];
         @$telefone = $_POST['telefone'];
         @$nomeanimal = $_POST['animal'];
         @$servico = $_POST['servico'];
         @$data = $_POST['data'];
         @$observacoes = $_POST['observacoes'];
         if(empty($nomecliente) || empty($telefone ) || empty($nomeanimal) || empty($servico)|| empty($data)){
             echo('<div class="alert-danger">Preencher os campos obrigatórios. </div>');
         }else {
             echo("<fieldset> <legend class='alert-success'>Informações:</legend> "
                     . "Nome do Cliente: ".$nomecliente. "<br>Telefone: ".$telefone.
                            "<br>Nome do animal: ".$nomeanimal. "<br>Serviços escolhidos: ".implode(" + ", $servico).
                            "<br>Data: ".$data.
                            "<br>Observacoes: ".$observacoes."</fieldset>");
         }
         
    }
    
    ?>
</body>
</html>
