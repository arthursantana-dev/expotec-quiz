document.querySelector('p').innerHTML = `Fim! você acertou <mark>${localStorage.getItem("correct-answers")} de 10 questões</mark>! Parabéns!`

function reloadQuiz() {
	localStorage.setItem("current-id", 0)
	localStorage.setItem("correct-answers", 0)

	window.location.href = './index.php'
}