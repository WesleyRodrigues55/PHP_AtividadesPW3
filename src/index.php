<?php
    // inclui banco e funcoes
    include("connections/conexao.php");
    include("connections/functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórmula de Bhaskara</title>
    <!-- css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body class="bg-light">
    
<div class="container">
    <h1 class="mt-5 text-center">BORA CALCULAR ESSE BHASKARA AI MEU CAMARADA?</h1>
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-12 card card-body mt-2">
                    <form class="form-group" method="post">
                        <h1>Calcule o Delta.</h1>
                        <b>* Δ = b2 – 4ac</b>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="a">Valor de A</label>
                                <input class="form-control" name="a" id="a">
                            </div>
                            <div class="col-md-12">
                                <label for="b">Valor de B</label>
                                <input class="form-control" name="b" id="b">
                            </div>
                            <div class="col-md-12">
                                <label for="c">Valor de C</label>
                                <input class="form-control" name="c" id="c">
                            </div>
                            <div class="col-md-12">
                                <br>
                                <input type="submit" class="btn btn-dark btn-block p-3" value="calcular">
                            </div>
                        </div>
                    </form>
                </div>
                <!-- raíz da equação (mais)-->
                <div class="col-md-6 card card-body mt-2">
                    <form class="form-group" action="" method="post">
                        <h1>raíz da equação (mais)</h1>
                        <b>* x = – b + √Δ / 2·a</b>
                        <div class="row box-x">
                            <div class="col-md-12">
                                <input class="form-control form-x" readonly value='<?php if ($_POST) {a();} ?>'>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control form-x" readonly value='<?php if ($_POST) {b();} ?>'>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- raíz da equação (menos) -->
                <div class="col-md-6 card card-body mt-2">
                    <form class="form-group">
                        <h1>raíz da equação (menos)</h1>
                        <b>* x = – b - √Δ / 2·a</b>
                        <div class="row box-x">
                            <div class="col-md-12">
                                <input class="form-control form-x" readonly value='<?php if ($_POST) {a();} ?>'>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control form-x" readonly value='<?php if ($_POST) {b();} ?>'>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- fim row -->
        </div>
        <div class="col-md-3 card card-body mt-2">
            <h2>Resultados:</h2>
            <?php 
                if ($_POST) {calcDelta($conexao);}
                if ($_POST) {calcX1($conexao);}
                if ($_POST) {calcX2($conexao);}
            ?>
            <!-- <p>Portanto, as raízes da equação são:</p><b><//?php echo "x1= " .$mais. "<br>" . "x2= " .$menos. "" ?></b> -->
            
        </div>
    </div><!-- fim row -->
</div>




    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>