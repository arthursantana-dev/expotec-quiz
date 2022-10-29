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
		<h1 class="main-h1">
			Quiz Ciências da Natureza: <br> 1º Des. Sist.
		</h1>
		<section class="quiz-wrapper login-form shadow">
			<form action="./db-handlers/post_user.php" method="POST">
				<div class="form-row">
					<div class="form-row__item">
						<label for="i-nome" class="form-label">
							Nome
						</label>
					</div>
					<div class="form-row__item">
						<input type="text" name="i-nome" id="i-nome" class="form-input">
					</div>
				</div>
				<div class="form-row">
					<div class="form-row__item">
						<label for="i-escola" class="form-label">
							Escola
						</label>
					</div>
					<div class="form-row__item">
						<input type="text" name="i-escola" id="i-escola" class="form-input">
					</div>
				</div>
				<div class="form-row">
					<div class="form-row__item">
						<label for="i-serie" class="form-label">
							Série
						</label>
					</div>
					<div class="form-row__item"><input type="text" name="i-serie" id="i-serie" class="form-input"></div>
				</div>

				<div class="form-row">
					<button type="submit" class="btn btn-start-quiz shadow">
						Iniciar o Quiz!
					</button>
				</div>
			</form>
		</section>
		
	</main>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<!-- <script src="./db.js" type="module"></script> -->
	<!-- <script src="./login.js"></script> -->
</body>
</html>