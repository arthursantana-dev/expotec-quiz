<?php 
include 'connection.php';
session_start();
	
$question_id = rand(1, 80);

if (isset($_SESSION['question_ids'])){

} else {
	$_SESSION['question_ids'] = [];
}

while (in_array($question_id, $_SESSION['question_ids'])) {
	$question_id = rand(1, 80);
}

array_push($_SESSION['question_ids'], $question_id);

$sql_question = "select `pergunta`.`descricao` from pergunta where `pergunta`.`Id` = $question_id;";
$sql_answers = "select `alternativa`.`Descricao`, `alternativa`.`Correta`, `alternativa`.`Id` from pergunta inner join alternativa on pergunta.Id = alternativa.ID_pergunta where pergunta.Id = $question_id;";

$question_response = $connection->query($sql_question);
$answers_response = $connection->query($sql_answers);


$connection->close();



?>