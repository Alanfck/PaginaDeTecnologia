/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */

// agarramos todos los elementos HTML que tienen la clase "btn-success" y almacenarlos en la variable botonesComprar
const botonesComprar = document.querySelectorAll('.btn-success');
botonesComprar.forEach(boton => {
    //cuando se agra clic en cada boton de comprar manda la alerta
    boton.addEventListener('click', () => {
        alert('¡Compra exitosa!');
    });
});

