function checkQuizAnswer() {
	const quizAnswers = document.querySelectorAll('input[name="i-answers"]')

	var isSelectedAnswerCorrect = ''
	var checkMessageHTML = ''

	quizAnswers.forEach(answer => {
		if (answer.checked){
			isSelectedAnswerCorrect = answer.dataset.correct;
		}
	});

	isSelectedAnswerCorrect? '' : isSelectedAnswerCorrect = 'F'

	if (isSelectedAnswerCorrect == 'V') {
		checkMessageHTML = `
		<div class="alert alert-success" role="alert">
			Parabéns! Você acertou!
		  </div>`

		if (localStorage.getItem("correct-answers")){
			localStorage.setItem("correct-answers", parseInt(localStorage.getItem("correct-answers")) + 1)
		} else {
			localStorage.setItem("correct-answers", 1)
		}

		console.log(localStorage.getItem("correct-answers"));
	} else {
		checkMessageHTML = `
		<div class="alert alert-danger" role="alert">
  			Que pena! Você errou!
		</div>`
	}

	document.querySelector('div#check-message-wrapper').innerHTML = checkMessageHTML

	document.querySelector('section.quiz-wrapper').classList.add('static')
	setTimeout(() => {
		window.location.reload()
	}, 2000);
	
}