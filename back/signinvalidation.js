const form = document.getElementById('form')
const username = document.getElementById('name')
const email = document.getElementById('password')

form.addEventListener('submit', (e)=> {
    
    if(checkInputs()){
  let form = e.target

form.submit()
}
    })

    function checkInputs(){


            const usernameValue  = username.value.trim()
            const passwordValue =  password.value.trim()


            if(usernameValue === ''){
              // e.preventDefault()
  setErrorFor(username, 'Username cannot be blank')

  return false

 }else{
  setSuccessFor(username)
 }


 if(passwordValue === '') {
   setErrorFor(password, 'Password cannot be blank');
   return false
 } else {
   setSuccessFor(password);
}

if(usernameValue !== '' || passwordValue !== '' ){
  return true
}else{return false}


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