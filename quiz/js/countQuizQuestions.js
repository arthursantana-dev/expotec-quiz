if (parseInt(localStorage.getItem("correct-answers")) >= 10 || parseInt(localStorage.getItem("current-id")) >= 10) {
	window.location.href = '../end.php'
}