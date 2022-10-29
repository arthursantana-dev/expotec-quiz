if (localStorage.getItem("current-id")){
	localStorage.setItem("current-id", parseInt(localStorage.getItem("current-id")) + 1)
} else {
	localStorage.setItem("current-id", 0)
}

document.querySelector('span.question-number').textContent = localStorage.getItem("current-id")