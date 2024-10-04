function calculateTotal() {
	var member = document.querySelector('input[name="member"]:checked').value;
	var total = document.getElementById('total').value;

	var xhr = new XMLHttpRequest();
	xhr.open('POST', 'calculate.php', true);
	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

	xhr.onload = function() {
		if (xhr.status === 200) {
			window.location.href = 'result.php?total=' + xhr.responseText;
		}
	};

	xhr.send('member=' + member + '&total=' + total);
}