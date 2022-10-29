<?php

while($answer = $answers_response->fetch_assoc()){
	echo "<span class='quiz-answer'><input type='radio' name='i-answers' data-correct=".$answer["Correta"]." value='".$answer['Id']."'>".$answer['Descricao'].'</span>';
}

