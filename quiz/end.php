<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">
	<title>Quiz</title>
</head>
<body>
	<main class="container">

		<section class="quiz-wrapper">
			<p id='end-message'>
				
			</p>
			<button class="btn" onclick='reloadQuiz()'>
				Refazer o quiz!
			</button>
		</section>

	</main>
	<script src="./js/quizEnd.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<?php 
		if (isset($_SESSION['question_ids'])) {
			foreach($_SESSION['question_ids'] as $n){
				$n = null;
			};
		}
		
	?>
	<!-- <script src="./db.js" type="module"></script> -->
	<!-- <script src="./login.js"></script> -->
</body>
</html>