<?php 
include 'connection.php';
	
$question_id = rand(1, 81);

$sql_question = "select `pergunta`.`descricao` from pergunta where `pergunta`.`Id` = $question_id;";
$sql_answers = "select `alternativa`.`Descricao`, `alternativa`.`Correta`, `alternativa`.`Id` from pergunta inner join alternativa on pergunta.Id = alternativa.ID_pergunta where pergunta.Id = $question_id;";

$question_response = $connection->query($sql_question);
$answers_response = $connection->query($sql_answers);


$connection->close();

$GLOBALS['question_id'] = $question_id;


?>