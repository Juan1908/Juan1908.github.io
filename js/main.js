/*addEventListener('DOMContentLoaded', () => {
    const btn_menu = document.querySelector('.btn_menu')
    if(btn_menu){
        btn_menu.addEventListener('click', () => {
            const menu_principal= document.querySelector('.menu-principal')
            menu_principal.classList.toggle('show')

            const menu_lista = document.querySelector('menu-principal ul li')
            menu_lista.className.toggle('close')
        })
    }
})*/

function showMenu() {
    document.getElementById("mostrar").classList.toggle("show");
}

function secUno() {
    document.getElementById("mostrar").classList.toggle("show");
}


function datosFormulario() {
    var nombre = document.getElementById('nombre-usuario').value;
    var telefono = document.getElementById('tel-usuario').value;
    var correo = document.getElementById('email-usuario').value;
    var mensaje = document.getElementById('mensaje-usuario').value;
}

$().ready(function(){
    $('.fancybox').fancybox({keyboard:true});
});
    