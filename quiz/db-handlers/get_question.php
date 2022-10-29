<?php

include_once 'select_random_question.php';

while($question = $question_response->fetch_assoc()){
	echo "<h1 class='quiz-question'>".$question["descricao"]."</h1>";
}
