<?php

if (!empty($_POST["add_resumo"])) {

    require_once("config.php");

    $sql = "insert into resumo (sumario, graduacao1, ano1, nome_graduacao1, cidade_graduacao1, resumo1, graduacao2, ano2, nome_graduacao2, cidade_graduacao2, resumo2)
     values(:sumario, :graduacao1, :ano1, :nome_graduacao1, :cidade_graduacao1, :resumo1, :graduacao2, :ano2, :nome_graduacao2, :cidade_graduacao2, :resumo2)";

    $pdo_statment = $pdo->prepare($sql);
    $result = $pdo_statment->execute(array(
        ":sumario" => $_POST["sumario"],
        ":graduacao1" => $_POST["graduacao1"],
        ":ano1" => $_POST["ano1"],
        ":nome_graduacao1" => $_POST["nome_graduacao1"],
        ":cidade_graduacao1" => $_POST["cidade_graduacao1"],
        ":resumo1" => $_POST["resumo1"],
        ":graduacao2" => $_POST["graduacao2"],
        ":ano2" => $_POST["ano2"],
        ":nome_graduacao2" => $_POST["nome_graduacao2"],
        ":cidade_graduacao2" => $_POST["cidade_graduacao2"],
        ":resumo2" => $_POST["resumo2"]
    ));

    echo $result;
    if (!empty($result)) {
        header("location:home.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Registro das Habilidades</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="assets/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registro do Resumo pessoal e profissional</h2>
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Resumo Pessoal</label>
                                    <input class="input--style-4" type="text" name="sumario">
                                </div>
                            </div>

                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Primeira Gradua????o </label>
                                    <input class="input--style-4" type="text" name="graduacao1">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Ano de conclu????o</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="ano1">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nome da Gradua????o</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="nome_graduacao1">
                                        <!-- <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Cidade</label>
                                    <input class="input--style-4" type="text" name="cidade_graduacao1">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label">Resumo da Gradua????o</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="resumo1">
                                        <!-- <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Segunda Gradua????o</label>
                                    <input class="input--style-4" type="text" name="graduacao2">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Ano de conclus??o</label>
                                    <input class="input--style-4" type="text" name="ano2">
                                </div>
                            </div>  
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nome da Gradua????o</label>
                                    <input class="input--style-4" type="text" name="nome_graduacao2">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Cidade da Gradua????o</label>
                                    <input class="input--style-4" type="text" name="cidade_graduacao2">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">Resumo da Segunda Gradua????o</label>
                                    <input class="input--style-4" type="text" name="resumo2">
                                </div>
                            </div>
                            
                        </div>
                        <div class="row row-space">
                        </div>


                </div>


                <!-- <div class="input-group">
                            <label class="label">Subject</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="subject">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>Subject 1</option>
                                    <option>Subject 2</option>
                                    <option>Subject 3</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div> -->
                <div class="p-t-15">
                    <input class="btn btn--radius-2 btn--blue butao" type="submit" name="add_resumo">
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->