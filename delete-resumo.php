<?php

    require_once("config.php");
    $pdo_statement = $pdo->prepare(("delete from resumo where id_resumo =". $_GET['id']));
    $pdo_statement->execute();
    header('location:index.php');
?>