let loginForm = document.querySelector('.header .login-form');

document.querySelector('#login-btn').onclick = () =>{
    loginForm.classList.toggle('active');
    navbar.classList.remove('active');
}

let navbar = document.querySelector('.header .input-group-register');

document.querySelector('#redg-btn').onclick = () =>{
    navbar.classList.toggle('active');    
    loginForm.classList.remove('active');
}
let signup = document.querySelector('.header .input-group-register');

document.querySelector('#redg').onclick = () =>{
    signup.classList.toggle('active');    
    loginForm.classList.remove('active');
}

let reg = document.querySelector('.header .input-group-register');

document.querySelector('#hreg').onclick = () =>{
    reg.classList.toggle('active');    
    loginForm.classList.remove('active');
}

window.onscroll = () =>{
    loginForm.classList.remove('active');
    navbar.classList.remove('active');

    if(window.scrollY > 0){
        document.querySelector('.header').classList.add('active');
    }else{
        document.querySelector('.header').classList.remove('active');
    }
}

window.onload = () =>{
    if(window.scrollY > 0){
        document.querySelector('.header').classList.add('active');
    }else{
        document.querySelector('.header').classList.remove('active');
    }
}
function valid(){
    swal("Good job!", "You clicked the button!", "success");
}


/*
const form = document.getElementById('register');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');
form.addEventListener('submit', e => {
 e.preventDefault();
 validateInputs();
});
const setError = (element, message) => {
 const inputControl = element.parentElement;
 const errorDisplay = inputControl.querySelector('.error');
 errorDisplay.innerText = message;
 inputControl.classList.add('error');
 inputControl.classList.remove('success')
45
}
const setSuccess = element => {
 const inputControl = element.parentElement;
 const errorDisplay = inputControl.querySelector('.error');
 errorDisplay.innerText = '';
 inputControl.classList.add('success');
 inputControl.classList.remove('error');
};
const isValidEmail = email => {
 const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-
9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
 return re.test(String(email).toLowerCase());
}
const validateInputs = () => {
 const usernameValue = username.value.trim();
 const emailValue = email.value.trim();
 const passwordValue = password.value.trim();
 const password2Value = password2.value.trim();
 if(usernameValue === '') {
 setError(username, 'Username is required');
 } else {
 setSuccess(username);
 }
 if(emailValue === '') {
 setError(email, 'Email is required');
46
 } else if (!isValidEmail(emailValue)) {
 setError(email, 'Provide a valid email address');
 } else {
 setSuccess(email);
 }
 if(passwordValue === '') {
 setError(password, 'Password is required');
 } else if (passwordValue.length < 8 ) {
 setError(password, 'Password must be at least 8 character.')
 } else {
 setSuccess(password);
 }
 if(password2Value === '') {
 setError(password2, 'Please confirm your password');
 } else if (password2Value !== passwordValue) {
 setError(password2, "Passwords doesn't match");
 } else {
 setSuccess(password2);
 }
}; */
//declearing html elements

const imgDiv = document.querySelector('.profile-pic-div');
const img = document.querySelector('#photo');
const file = document.querySelector('#file');
const uploadBtn = document.querySelector('#uploadBtn');

//if user hover on img div 

imgDiv.addEventListener('mouseenter', function(){
    uploadBtn.style.display = "block";
});

//if we hover out from img div

imgDiv.addEventListener('mouseleave', function(){
    uploadBtn.style.display = "none";
});

//lets work for image showing functionality when we choose an image to upload

//when we choose a foto to upload

file.addEventListener('change', function(){
    //this refers to file
    const choosedFile = this.files[0];

    if (choosedFile) {

        const reader = new FileReader(); //FileReader is a predefined function of JS

        reader.addEventListener('load', function(){
            img.setAttribute('src', reader.result);
        });

        reader.readAsDataURL(choosedFile);

        //Allright is done

        //please like the video
        //comment if have any issue related to vide & also rate my work in comment section

        //And aslo please subscribe for more tutorial like this

        //thanks for watching
    }
});