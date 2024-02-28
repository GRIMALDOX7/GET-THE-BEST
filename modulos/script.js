document.getElementById("btn-Registrate").addEventListener("click", register);
document.getElementById("btn-iniciarSesion").addEventListener("click", Login);
window.addEventListener("resize", anchoPagina);
//Declaración de variables
var contenedor_formulario = document.querySelector(".contenedor-Formulario");
var formulario_login = document.querySelector(".formulario-Login");
var formulario_register = document.querySelector(".formulario-Register");
var caja_trasera_login = document.querySelector(".caja-TraseraLogin");
var caja_trasera_register = document.querySelector(".caja-TraseraRegister");
function anchoPagina(){
    if (window.innerWidth > 750){
        caja_trasera_login.style.display = "block";
        caja_trasera_register.style.display = "block";
    }else{
        caja_trasera_register.style.display = "block";
        caja.caja_trasera_register.style.opacity = 1;
        caja_trasera_login.style.display = "none";
        formulario_login.style.display = "block";
        formulario_register.style.display = "none";
        contenedor_formulario.style.left = "0";
    }
}
anchoPagina();
function Login(){
    if(window.innerWidth > 750){
        formulario_register.style.display = "none";
        contenedor_formulario.style.left = "10px";
        formulario_login.style.display = "block";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.opacity = "0";
    }else{
        formulario_register.style.display = "none";
        contenedor_formulario.style.left = "0px";
        formulario_login.style.display = "block";
        caja_trasera_register.style.display = "block";
        caja_trasera_login.style.display = "none";
    }
}
function register(){
    if(window.innerWidth > 750){
        formulario_register.style.display = "block";
        contenedor_formulario.style.left = "410px";
        formulario_login.style.display = "none";
        caja_trasera_register.style.opacity = "0";
        caja_trasera_login.style.opacity = "1";
    }else{
        formulario_register.style.display = "block";
        contenedor_formulario.style.left = "0px";
        formulario_login.style.display = "none";
        caja_trasera_register.style.display = "none";
        caja_trasera_login.style.display = "block";
        caja_trasera_login.style.opacity = "1"; 
    }
}