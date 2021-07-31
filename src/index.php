<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>

<form class="container" method="post" action="modulos/conexao.php">
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
    
</body>
</html>