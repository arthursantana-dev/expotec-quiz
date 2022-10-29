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

	var audio = ''

	if (isSelectedAnswerCorrect == 'V') {
		checkMessageHTML = `
		<div class="alert alert-success" role="alert">
			Parabéns! Você acertou!
		  </div>`

		audio = new Audio('js/audio/success.mp3')
		audio.play()

		if (localStorage.getItem("correct-answers")){
			localStorage.setItem("correct-answers", parseInt(localStorage.getItem("correct-answers")) + 1)
		} else {
			localStorage.setItem("correct-answers", 1)
		}

	} else {
		checkMessageHTML = `
		<div class="alert alert-danger" role="alert">
  			Que pena! Você errou!
		</div>`

		audio = new Audio('js/audio/error.mp3')
		audio.play()
	}

	

	document.querySelector('div#check-message-wrapper').innerHTML = checkMessageHTML

	document.querySelector('section.quiz-wrapper').classList.add('static')
	setTimeout(() => {
		window.location.reload()
	}, 2000);
	
}