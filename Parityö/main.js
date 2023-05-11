const questionForm = document.querySelector('#questionForm');

questionForm.addEventListener('submit', (event) => {
	event.preventDefault();

	const formData = new FormData(questionForm);

	fetch('answers.php', {
		method: 'POST',
		body: formData
	})
	.then(response => response.text())
	.then(data => {
		document.write(data);
	})
	.catch(error => console.error(error));
});
