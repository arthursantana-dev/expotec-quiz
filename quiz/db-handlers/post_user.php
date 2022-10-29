<?php

include('connection.php');

$nome = mysqli_real_escape_string($connection, $_POST['i-nome']);
$escola = mysqli_real_escape_string($connection, $_POST['i-escola']);
$serie = mysqli_real_escape_string($connection, $_POST['i-serie']);

$sql = "insert into usuario (nome, escola, serie) values ('$nome', '$escola', '$serie')";

$connection->query($sql);

$connection->close();

header('location: ../quiz.php');