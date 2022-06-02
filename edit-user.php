<?php

require_once("config.php");

if (!empty($_POST["edit_user"])) {
    $pdo_statement = $pdo->prepare("update users set nome = " . $_POST['nome']
        . ", cidade = " . $_POST['cidade'] .
        ", nascimento = " . $_POST['nascimento'] . 
        ", genero = " . $_POST['genero'] .
        ", email = " . $_POST['email'] . 
        ", telefone = " . $_POST['telefone'] . 
        ", grau = " . $_POST['grau'] .
        ", profissao =" . $_POST['profissao'] .
        ", password = " . $_POST['password'] .
        "where id_user = " . $_GET['id']);

    $result = $pdo_statement->execute();
    if ($result) {
        header('location:index.php');
    }
}

$pdo_statement = $pdo->prepare(("select * from users where id_user =" . $_GET['id']));
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
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
    <title>Au Register Forms by Colorlib</title>

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
                    <h2 class="title">Registro</h2>
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nome</label>
                                    <input class="input--style-4" value="<?php echo $result[0]['nome'] ?>" type="text" name="nome">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Cidade</label>
                                    <input class="input--style-4" type="text" value="<?php echo $result[0]['cidade'] ?>" name="cidade">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nascimento</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" value="<?php echo $result[0]['nascimento'] ?>" type="text" name="nascimento">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Genero</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" value="<?php echo $result[0]['genero'] ?>" type="text" name="genero">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" value="<?php echo $result[0]['email'] ?>" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Número de Telefone</label>
                                    <input class="input--style-4" type="text" value="<?php echo $result[0]['telefone'] ?>" name="telefone">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Grau</label>
                                    <input class="input--style-4" type="text" value="<?php echo $result[0]['grau'] ?>" name="grau">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Profissão</label>
                                    <input class="input--style-4" type="text" value="<?php echo $result[0]['profissao'] ?>" name="profissao">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Idade</label>
                                    <input class="input--style-4" type="text" value="<?php echo $result[0]['idade'] ?>" name="idade">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Senha</label>
                                    <input class="input--style-4" type="password" value="<?php echo $result[0]['password'] ?>" name="password">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Confirme sua Senha</label>
                                    <input class="input--style-4" type="password" value="<?php echo $result[0]['password'] ?>" name="confirm_password">
                                </div>
                            </div>
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
                    <input class="btn btn--radius-2 btn--blue butao" value="Atualizar" type="submit" name="edit_user">
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