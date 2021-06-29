/*alert para ver si funciona */
// alert("QUE PEDO PERROS POR QUE NO SE VE ESTA MAMADA???");


document.getElementById("entrar").addEventListener("click",iniciarSesion)
document.getElementById("registro").addEventListener("click",registro)
window.addEventListener("resize",anchoPagina);

//necesitamos variables
var panel_login_register = document.querySelector(".panel_de_registro");
var formulario_login = document.querySelector(".form_login");
var formulario_register = document.querySelector(".form_registro");
var panel_trasero_login = document.querySelector(".panel_login");
var panel_trasero_register = document.querySelector(".panel_register");


function anchoPagina(){
    if(window.innerWidth > 850){
        panel_trasero_login.style.display="block";
        panel_trasero_register.style.display = "block";
    }else{
        panel_trasero_register.style.display = "block";
        panel_trasero_register.style.opacity = "1";
        panel_trasero_login.style.display = "none";
        formulario_login.style.display = "block";
        formulario_register.style.display ="none";
        panel_login_register.style.left = "0px";

    }
}

anchoPagina();

function iniciarSesion(){
    // el if es para la parte responsiva
    if (window.innerWidth > 850){
        formulario_register.style.display = "none";
        panel_login_register.style.left = "10px";

        formulario_login.style.display ="block";

        panel_trasero_register.style.opacity= "1";
        panel_trasero_login.style.opacity = "0";

    }else{
        formulario_register.style.display = "none";
        panel_login_register.style.left = "0px";
        formulario_login.style.display ="block";
        panel_trasero_register.style.display= "block";
        panel_trasero_login.style.display = "none";
    }


}


function registro(){

    if (window.innerWidth > 850){
        formulario_register.style.display = "block";
        panel_login_register.style.left = "420px";

        formulario_login.style.display ="none";

        panel_trasero_register.style.opacity= "0";
        panel_trasero_login.style.opacity = "1";
    }else{
        formulario_register.style.display = "block";
        panel_login_register.style.left = "0px";
        formulario_login.style.display ="none";
        panel_trasero_register.style.display= "none";
        panel_trasero_login.style.display = "block";
        panel_trasero_login.style.opacity = "1";
    }



}
