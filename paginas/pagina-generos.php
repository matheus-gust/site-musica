<?php

$genero = $_GET['genero'];
$id = $_GET['id'];
$conn = new PDO("mysql:dbname=site-diomara;host=localhost;charset=UTF8", "root", "");
$stmt = $conn->prepare("SELECT * FROM historias");
$carc = $conn->prepare("SELECT * FROM caracteristicas");
$stmt->execute();
$carc->execute();
$registro = $stmt->fetchAll(PDO::FETCH_OBJ)[$id];
$caracteristicas = $carc->fetchAll(PDO::FETCH_OBJ)[$id];

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
    <title>
        <?php echo $genero ?>
    </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #403226;">
        <a class="navbar-brand" href="http://127.0.0.1">
            <img style="width: 17px;" src="../images/clave-de-sol.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div style="margin-left: 87%;" class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a style=" color: #FFFFFF;" class="nav-link" href="http://127.0.0.1/paginas/sugestoes.html">Enviar Sugestão</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 style="font-size: 48pt"><?php echo strtoupper($genero) ?> </h1>
            </div>
        </div>
        <div class="row mt-5">
            <h2>Sobre</h2>
        </div>
        <hr>
        <div class="row mt-4">
            <div class="col-12 col-md-6">
                <img style="width: 100%" src="<?php if (isset($registro)) echo $registro->imagem ?>">
            </div>
            <div class="col-12 col-md-6">
                <h4><?php if (isset($registro)) echo $registro->titulo ?></h4>
                <?php if (isset($registro)) echo $registro->historia ?>
            </div>
        </div>
        <hr>
    </div>

    <section class="anime">
        <div class="jumbotron jumbotron-fluid mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2><?php if (isset($caracteristicas)) echo $caracteristicas->titulo ?></h2>
                    </div>
                </div>
                <hr>
                <div class="row mt-4">
                    <div class="col-12 col-md-3">
                        <img style="width: 100%" src="<?php if (isset($caracteristicas)) echo $caracteristicas->imagem ?>">
                    </div>
                    <div class="col-12 col-md-9">
                        <?php if ($id == 4) echo "<iframe style=\"width:100%; height: 500px; border:none;\" src=\"erudito/musicos.html\"></iframe>" ?>
                        <?php if (isset($caracteristicas)) echo $caracteristicas->caracteristicas ?>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </section>

    <footer style="background-color: #403226;">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-md-4 text-center">
                    <img class="mt-3 mb-3" style="width: 25%;" src="../images/clave-de-do.png">
                </div>
                <div class="col-12 col-md-4 mt-5">
                    <img style="width: 100%;" src="../images/Fema_marca2.png">
                </div>
                <div style="color: #FFFFFF;" class="col-12 col-md-4 text-center mt-5">
                    <p><strong>Trabalho avaliativo 2° Semetestre</strong></p>
                    <p>Aluno: Matheus Gustavo Santos da Silva<br> Turma: 1° BCC 2019 | RM: 1911420371
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/app.js"></script>
</body>

</html>