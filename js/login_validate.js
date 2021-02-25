const form = document.getElementById('Sign-in-form'); // get the form

// Get all values from form input
const Username= form.elements['uname'];
const password = form.elements["pword"];

// Get all error blocks

const error_uname= document.getElementById('error-block-uname');
const error_password = document.getElementById('error-block-password');

// Display message if login fails
// if (Email.dataset.success == 0) {

//     Username.classList.add('error-border');
//     password.classList.add('error-border');
    

//     let error_text = document.createElement('P');
//     error_text.innerText = 'Incorrect email, password or username';
//     error_email.appendChild(error_text);
// }

function onSubmit(event){

    let hasError = false;

    // Clear any previous error setting
    Username.classList.remove("error-border");
    password.classList.remove("error-border");

    error_uname.innerHTML = "";
    error_password.innerHTML = "";


    // Check if they are all not empty
    if(Username.value === ""){
        Username.classList.add("error-border");

        let error_text = document.createElement("P");
        error_text.innerText = "Enter your Username";
        error_uname.appendChild(error_text);

        hasError = true;
    }

    if(password.value === ""){
    password.classList.add("error-border");

        let error_text = document.createElement("P");
        error_text.innerText = "Enter your password";
        error_password.appendChild(error_text);

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
