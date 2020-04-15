function validateInput(){
	
	let emailField = document.getElementById('email');
	let passwordField = document.getElementById('pwd');
	let errorField = document.getElementById('error');
	
	let email = emailField.value;
	let password = passwordField.value;
	
	if(email === ""){
		errorField.innerHTML = 'Please enter your email';
		emailField.focus();
		return false;
	}
	else if(!email.includes("@")){
		errorField.innerHTML = 'Your email is not valid';
		emailField.focus();
		return false;
	}
	else if(password === ""){
		errorField.innerHTML = 'Please enter your password';
		passwordField.focus();
		return false;
	}
	else if(password.length < 6){
		errorField.innerHTML = 'Your password must contain at least 6 characters';
		passwordField.focus();
		return false;
	}
	errorField.innerHTML = "";
	return true;
}

function clearError(){
	let errorField = document.getElementById('error').innerHTML = "";
}

function displayMessage(){
	let value = document.getElementById('message').value;
	document.getElementById('display-message').innerHTML = value;
}

//---exercise 2

function addRow(){
	let fn = document.getElementById('firstname').value;	
	let ln = document.getElementById('lastname').value;
	let email = document.getElementById('email').value;	
	
	document.getElementById('firstname').value = '';	
	document.getElementById('lastname').value = '';
	document.getElementById('email').value = '';
	
	let tr = document.createElement('tr');
	let td1 = document.createElement('td');
	let td2 = document.createElement('td');
	let td3 = document.createElement('td');
	let td4 = document.createElement('td');
	
	td1.innerHTML = fn;
	td2.innerHTML = ln;
	td3.innerHTML = email;
	td4.innerHTML = "<button onclick=\"deleteRow(this)\">Delete</button>"
	
	tr.appendChild(td1);
	tr.appendChild(td2);
	tr.appendChild(td3);
	tr.appendChild(td4);
	
	document.getElementById('myTable').appendChild(tr);
}

function deleteRow(obj){
	let tr = obj.parentNode.parentNode;
	tr.remove();
}
//---exercise 3
function changeMessageColor(){
	let color = document.getElementById('color').value;
	let message = document.getElementById('display-message');
	
	message.style.color = color;
}

function onWeightChange(){
	let message = document.getElementById('display-message');
	let option = document.getElementById('bold');
	if(option.checked){
		message.style.fontWeight = 'bold';	
	}
	else{
		message.style.fontWeight = 'normal';	
	}	
}

function onItalicChange(){
	let message = document.getElementById('display-message');
	let option = document.getElementById('italic');
	if(option.checked){
		message.style.fontStyle = 'italic';	
	}
	else{
		message.style.fontStyle = 'normal';	
	}	
}

function onDecorationChange(){
	let message = document.getElementById('display-message');
	let option = document.getElementById('underline');
	if(option.checked){
		message.style.textDecoration = 'underline';	
	}
	else{
		message.style.textDecoration = 'none';	
	}	
}

