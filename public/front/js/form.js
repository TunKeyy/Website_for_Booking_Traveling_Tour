


const btnCloseReg = document.querySelector('.btn-close-form');

const btnReg = document.querySelector('.nav-bar-right .register');


const modalSignUp = document.querySelector('.modal-sign_up');
//Register
btnReg.onclick= function(e){
    e.preventDefault();
    modalSignUp.classList.add('open');
}

btnCloseReg.onclick = function(){
    modalSignUp.classList.remove('open');
}

const formSignUpContainer = document.querySelector('.sign_up-container');

document.querySelector('.modal-sign_up').onclick = function(){
    modalSignUp.classList.remove('open');
}


formSignUpContainer.onclick = function(e){
    e.stopPropagation();
}

// Login
const btnCloseLog = document.querySelector('.login .btn-close-form');

const btnLogin = document.querySelector('.nav-bar-right .login');


const modalLogIn = document.querySelector('.modal-login');

btnLogin.onclick= function(e){
    e.preventDefault();
    modalLogIn.classList.add('open');
}

btnCloseLog.onclick = function(){
    modalLogIn.classList.remove('open');
}

const formLogInContainer = document.querySelector('.sign_up-container.login');

document.querySelector('.modal-login').onclick = function(){
    modalLogIn.classList.remove('open');
}

formLogInContainer.onclick = function(e){
    e.stopPropagation();
}

