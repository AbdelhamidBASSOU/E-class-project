const form = document.getElementById('form')
const username = document.getElementById('name')
const email = document.getElementById('email')
const password = document.getElementById('password')
const rpassword = document.getElementById('rpassword')

form.addEventListener('submit', (e)=> {

if (checkInputs(e)) {
    let form = e.target;

    form.submit();
  }
})

function checkInputs(){
 const usernameValue  = username.value.trim()
  const emailValue = email.value.trim()
   const passwordValue =  password.value.trim()
   const rpasswordValue = rpassword.value.trim()


   if(usernameValue === ''){
    setErrorFor(username, 'Username cannot be blank')
	e.preventDefault()
   }else{
    setSuccessFor(username)
   }

   if(emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
		e.preventDefault()
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
		e.preventDefault()
	} else {
		setSuccessFor(email);
	}
	
	if(passwordValue === '') {
		setErrorFor(password, 'Password cannot be blank');
		e.preventDefault()
	} else {
		setSuccessFor(password);
	}
	
	if(rpasswordValue === '') {
		setErrorFor(rpassword, 'rpassword cannot be blank');
		e.preventDefault()
	} else if(passwordValue !== rpasswordValue) {
		setErrorFor(rpassword, 'Passwords does not match');
		e.preventDefault()
	} else{
		setSuccessFor(rpassword);
	}
}




function setErrorFor(input, message) {
    const formControl = input.parentElement;
	const small = formControl.querySelector('small');
    formControl.className = 'form-controll error';
	small.innerText = message;
}




function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-controll success';
}




function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}