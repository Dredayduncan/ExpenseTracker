console.log("first line");
const form = document.getElementById('Sign-up-form'); // get the form

// Get all values from form input
const Fname= form.elements['fname'];
const Lname= form.elements['lname'];
const Username= form.elements['uname'];
const number = form.elements['number'];
const Email = form.elements["email"];
const Limit= form.elements['limit'];
const password = form.elements["pword"];
const password2 = form.elements["pword2"];

console.log("you variables ?");
// Get all error blocks
const error_fname= document.getElementById('error-block-fname');
const error_lname= document.getElementById('error-block-lname');
const error_uname= document.getElementById('error-block-uname');
const error_number= document.getElementById('error-block-number');
const error_email = document.getElementById('error-block-email');
const error_limit = document.getElementById('error-block-limit');
const error_password = document.getElementById('error-block-password');
const error_password_strength = document.getElementById('error-block-password');
const error_repass = document.getElementById('error-block-repassword');

console.log("you errors ?");

function onChange() {

    if (error_password_strength.hasChildNodes()) {
        error_password_strength.innerHTML = "";
    }

    // Regular expression for a strong password
    let strongPass = /(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.{8,})/;

    if(password.value.match(strongPass)){
        password.classList.add("success-border");        
    } else {

        password.classList.add("error-border");

        let error_text = document.createElement("P");
        error_text.innerText = "Password should contain at least one uppercase, one lowercase, one numeric character, and have at least 8 characters";
        error_password_strength.appendChild(error_text);
    }
}

password.addEventListener('keypress', onChange);



console.log("you submit ?");

function onSubmit(event){

   


    let hasError = false;

    // Clear any previous error setting
    Fname.classList.remove("error-border");
    Lname.classList.remove("error-border");
    Username.classList.remove("error-border");
    number.classList.remove("error-border");
    Email.classList.remove("error-border");
    Limit.classList.remove("error-border");
    password.classList.remove("error-border");
    password2.classList.remove("error-border");

    error_fname.innerHTML = "";
    error_lname.innerHTML = "";
    error_number.innerHTML = "";
    error_limit.innerHTML = "";
    error_uname.innerHTML = "";
    error_email.innerHTML = "";
    error_password.innerHTML = "";
    error_repass.innerHTML = "";


    // Check if they are all not empty
    if(Fname.value === ""){
        Fname.classList.add("error-border");

        let error_text = document.createElement("P");
        error_text.innerText = "Enter your First name";
        error_fname.appendChild(error_text);

        hasError = true;
    }
    else{
        Fname.classList.add("success-border");
    }

    if(Lname.value === ""){
        Lname.classList.add("error-border");

        let error_text = document.createElement("P");
        error_text.innerText = "Enter your Last name";
        error_lname.appendChild(error_text);

        hasError = true;
    }else{
        Lname.classList.add("success-border");
    }
    if(Username.value === ""){
        Username.classList.add("error-border");

        let error_text = document.createElement("P");
        error_text.innerText = "Enter your Username";
        error_uname.appendChild(error_text);

        hasError = true;
    }else{
        Username.classList.add("success-border");
    }

    if(number.value === ""){
        number.classList.add("error-border");

        let error_text = document.createElement("P");
        error_text.innerText = "Enter your Phone number";
        error_number.appendChild(error_text);

        hasError = true;
    }
    else{
        number.classList.add("success-border");
    }

    if(Email.value === ""){
        Email.classList.add("error-border");

        let error_text = document.createElement("P");
        error_text.innerText = "Enter your email";
        error_email.appendChild(error_text);

        hasError = true;
    }else{
        Email.classList.add("success-border");
    }
    if(Limit.value === ""){
        Limit.classList.add("error-border");

        let error_text = document.createElement("P");
        error_text.innerText = "Enter your Daily limit";
        error_limit.appendChild(error_text);

        hasError = true;
    }else{
        Limit.classList.add("success-border");
    }

    if(password.value === ""){
    password.classList.add("error-border");

        let error_text = document.createElement("P");
        error_text.innerText = "Enter your password";
        error_password.appendChild(error_text);

        hasError = true;
    }

    if(password2.value === ""){
        password2.classList.add("error-border");

        let error_text = document.createElement("P");
        error_text.innerText = "Re-enter password.";
        error_repass.appendChild(error_text);

        hasError = true;
    } else if (password2.value !== password.value ){
        password2.classList.add("error-border");

        let error_text = document.createElement("P");
        error_text.innerText = "Password does not match";
        error_repass.appendChild(error_text);

        hasError = true;
    }
    
    
    // Update error block
    if (hasError){
        event.preventDefault(); // Stop from submitting to PHP
    } else {
        windows.alert("submited");
    }
    
   
}

form.addEventListener('submit',onSubmit);
