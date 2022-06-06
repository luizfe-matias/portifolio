<?php

    require_once("config.php");
    $pdo_statement = $pdo->prepare(("delete from fatos where id_fato =". $_GET['id']));
    $pdo_statement->execute();
    header('location:index.php');
?>