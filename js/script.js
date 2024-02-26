document.getElementById("btn-Registrate").addEventListener("click", register);
document.getElementById("btn-iniciarSesion").addEventListener("click", Login);
//Declaración de variables
var contenedor_formulario = document.querySelector(".contenedor-Formulario")
var formulario_login = document.querySelector(".formulario-Login")
var formulario_register = document.querySelector(".formulario-Register")
var caja_trasera_login = document.querySelector(".caja-TraseraLogin")
var caja_trasera_register = document.querySelector(".caja-TraseraRegister")
function Login(){
    formulario_register.style.display = "none";
    contenedor_formulario.style.left = "10px";
    formulario_login.style.display = "block";
    caja_trasera_register.style.opacity = "1";
    caja_trasera_login.style.opacity = "0";
}
function register(){
    formulario_register.style.display = "block";
    contenedor_formulario.style.left = "410px";
    formulario_login.style.display = "none";
    caja_trasera_register.style.opacity = "0";
    caja_trasera_login.style.opacity = "1";
}