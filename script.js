const getInput = () => {

	var fn, ln, ph;
	fn = document.getElementById('fname').value;
	ln = document.getElementById('lname').value;
	ph = document.getElementById('phone').value;

	if (isNaN(ph)) {
		alert('phone must be a number');
		return;
	}

	if (fn === '' || ln === '') {
		alert('please fill out all fields');
		return;
	}

	/*set POST variables*/
	let data = new URLSearchParams();
	data.set('firstName', fn);
	data.set('lastName', ln);
	data.set('phone', ph);

	/* using fetch	
	const options = {
		method: 'POST',
		body: data
	}

	fetch('./serve.php', options)
		.then((response) =>{
			if (!response.ok){
				throw Error(response.statusText);
			}
			
			return response.json()
		} )
		.then((res) => {

			if (res.error) {
				console.error('Error:', res);
			} else {
				console.log('success:', res);

				if (!isNaN(res.phone)) {
					document.getElementById('phone').value = res.phone;
				}
			}

		})

		.catch((error) => {
			console.error('Error:', error);
		})
		*/



	/*using XHR	
	let xhr = new XMLHttpRequest();

	xhr.onreadystatechange = function () {
		if (this.readyState == 4 && this.status == 200) {
			try {
				let res = JSON.parse(this.responseText);

				if (res.error) {
					console.error('Error:', res);
				} else {
					console.log('success:', res);
					if (!isNaN(res.phone)) {
						document.getElementById('phone').value = res.phone;
					}
				}

			} catch (e) {
				console.error('Error:', e);
			}
		} else if (this.readyState == 4 && this.status == 500) {
			try {
				let res = JSON.parse(this.responseText);

				if (res.error) {
					console.error('Error:', res);
				}
			} catch (e) {
				console.error('Error:', e);
			}
			alert('server error');
		}
	};
	xhr.open('POST', './serve.php', true);
	xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhr.send(data);
	*/

};
