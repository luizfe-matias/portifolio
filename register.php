<?php

if (!empty($_POST["add_user"])) {

    require_once("config.php");

    $sql = "insert into users (nome, cidade, nascimento, genero, email, telefone, grau, profissao, idade, password) values(:nome, :cidade, :nascimento, :genero, :email, :telefone, :grau,
:profissao, :idade, :password)";

    $pdo_statment = $pdo->prepare($sql);
    $result = $pdo_statment->execute(array(
        ":nome" => $_POST["nome"],
        ":cidade" => $_POST["cidade"],
        ":nascimento" => $_POST["nascimento"],
        ":genero" => $_POST["genero"],
        ":email" => $_POST["email"],
        ":telefone" => $_POST["telefone"],
        ":grau" => $_POST["grau"],
        ":idade" => $_POST["idade"],
        ":password" => $_POST["password"],
        ":profissao" => $_POST["profissao"]
    ));

    $username = $password = $confirm_password = "";
    $username_err = $password_err = $confirm_password_err = "";

    if ($_SERVER["REQUEST_METHOD"] == 'POST') {

        if (empty(trim($_POST["username"]))) {
            $username_err = "Por favor coloque um nome de usuario";
        } elseif (!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST['username']))) {
            $username_err = "O nome de usuario pde conter apenas letras, numeros e sublinhados";
        } else {
            $sql = "select id_user from users where username = :username";
            if ($stmt = $pdo->prepare(($sql))) {
                $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);

                $param_username = trim($_POST["username"]);

                if ($stmt->execute()) {
                    if ($stmt->rowCount() == 1) {
                        $username_err = "Este nome de usuario já esta em uso";
                    } else {
                        $username = trim($_POST["username"]);
                    }
                } else {
                    echo "Ops! algo deu errado. Por favor tente novamente mais tarde.";
                }
                unset($stmt);
            }
        }


        if (empty(trim($_POST["password"]))) {
            $password_err = "Por favor insira uma senha.";
        } elseif (strlen($_POST["password"]) < 6) {
            $password_err = "A senha deve ter pelo menos 6 carateres.";
        } else {
            $password = trim($_POST["password"]);
        }

        if (empty(trim($_POST["confirm_password"]))) {
            $confirm_password_err = "Por favor, confirme a senha";
        } else {
            $confirm_password = trim($_POST["confirm_password"]);
            if (empty($password_err) && ($password != $confirm_password)) {
                $confirm_password_err = "As senhas estão difrentes.";
            }
        }
        if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {
            $sql = "insert into users (username, password) values (:username, :password)";

            if ($stmt = $pdo->prepare($sql)) {
                $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
                $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);

                $param_username = $username;
                $param_password = password_hash($password, PASSWORD_DEFAULT);

                if ($stmt->execute()) {
                    header("location:login.php");
                } else {
                    echo "Ops! Algo deu errado. Tente mais tarde";
                }
                unset($stmt);
            }
        }
        unset($pdo);
    }

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
                                    <input class="input--style-4" type="text" name="nome">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Cidade</label>
                                    <input class="input--style-4" type="text" name="cidade">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nascimento</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="nascimento">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Genero</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="genero">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Número de Telefone</label>
                                    <input class="input--style-4" type="text" name="telefone">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Grau</label>
                                    <input class="input--style-4" type="text" name="grau">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Profissão</label>
                                    <input class="input--style-4" type="text" name="profissao">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Idade</label>
                                    <input class="input--style-4" type="text" name="idade">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                        </div>
                        
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Senha</label>
                                    <input class="input--style-4" type="password" name="password">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Confirme sua Senha</label>
                                    <input class="input--style-4" type="password" name="confirm_password">
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
                    <input class="btn btn--radius-2 btn--blue butao" type="submit" name="add_user">
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