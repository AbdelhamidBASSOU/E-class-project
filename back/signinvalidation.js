const form = document.getElementById("form");
const username = document.getElementById("name");
const password = document.getElementById("password");

form.addEventListener("submit", (e) => {
 
  if (checkInputs(e)) {
    let form = e.target;

    form.submit();
  }
});

function checkInputs(e) {
  const usernameValue = username.value.trim();
  const passwordValue = password.value.trim();

  if(usernameValue === ''){
    setErrorFor(username, 'Username cannot be blank')
    e.preventDefault();
   }else{
    setSuccessFor(username)
   }
   if(passwordValue === ''){
    setErrorFor(password, 'Username cannot be blank')
    e.preventDefault();
   }else{
    setSuccessFor(password)
   }

}

function setErrorFor(input, message) {
  const formControl = input.parentElement;
  const small = formControl.querySelector("small");

  formControl.className = "form-controll error";
  small.innerText = message;
}

function setSuccessFor(input) {
  const formControl = input.parentElement;
  formControl.className = "form-controll success";
}
