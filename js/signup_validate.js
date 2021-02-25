const form = document.getElementById('Sign-up-form'); // get the form

// Get all values from form input
const Username= form.elements['uname'];
const Email = form.elements["email"];
const password = form.elements["pword"];
const password2 = form.elements["pword2"];

// Get all error blocks
const error_uname= document.getElementById('error-block-uname');
const error_email = document.getElementById('error-block-email');
const error_password = document.getElementById('error-block-password');
const error_password_strength = document.getElementById('error-block-password-strength');
const error_repass = document.getElementById('error-block-repassword');

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





function onSubmit(event){

    // Regular expression for a valid Ashesi University student email address. 
    // let ashesiEmail = /.+\..+@ashesi.edu.gh$/;


    let hasError = false;

    // Clear any previous error setting
    Username.classList.remove("error-border");
    Email.classList.remove("error-border");
    password.classList.remove("error-border");
    password2.classList.remove("error-border");

    error_uname.innerHTML = "";
    error_email.innerHTML = "";
    error_password.innerHTML = "";
    error_repass.innerHTML = "";


    // Check if they are all not empty
    if(Username.value === ""){
        Username.classList.add("error-border");

        let error_text = document.createElement("P");
        error_text.innerText = "Enter your Username";
        error_uname.appendChild(error_text);

        hasError = true;
    }

    if(Email.value === ""){
        Email.classList.add("error-border");

        let error_text = document.createElement("P");
        error_text.innerText = "Enter your email";
        error_email.appendChild(error_text);

        hasError = true;
    // }else if(!(Email.value.match(ashesiEmail))){
    //     Email.classList.add("error-border");

    //     let error_text = document.createElement("P");
    //     error_text.innerText = "Enter an @ashesi.edu.gh email";
    //     error_email.appendChild(error_text);

    //     hasError = true;
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
