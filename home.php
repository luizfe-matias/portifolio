<?php

session_start();

require_once('config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/pesquisa-de-personalidade.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <?php
    $pdo_statement = $pdo->prepare("select * from users where id_user = ?");
    $result = $pdo_statement->execute([$_SESSION["nome"]]);
    $result = $pdo_statement->fetchAll();
    ?>
    
    <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex flex-column justify-content-center">

        <nav id="navbar" class="navbar nav-menu">
            <ul>
                <li><a href="register.php" class="nav-link scrollto active"><i class="bx bx-envelope"></i><span>Registrar Portifólio Profissional</span></a></li>
                <li><a href="register-fatos.php" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Registrar Fatos Profissionais</span></a></li>
                <li><a href="register-habilidades.php" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Registrar Habilidades Profissionais</span></a></li>
                <li><a href="register-resumo.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Registrar Resumo Profissional</span></a></li>
                <li><a href="index.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Portifólio</span></a></li>

            </ul>
        </nav>
        <!-- <h2><?php echo $result['nome'] ?></h2> -->
    </header>
    <!-- End Header -->

</body>

</html>