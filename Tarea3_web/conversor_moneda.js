/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */
    // Función para convertir pesos mexicanos a euros
    function pesosAMoneda(pesos, tasaCambioEuro) {
        return pesos / tasaCambioEuro;
    }

    // Función para convertir pesos mexicanos a dólares
    function pesosADolares(pesos, tasaCambioDolar) {
        return pesos / tasaCambioDolar;
    }

    // Función para realizar la conversión cuando se hace clic en un botón
    function convertirMoneda() {
        const cantidadPesos = parseFloat(document.getElementById('cantidadPesos').value);
        const tasaCambioEuro = 18.20; // Tasa de cambio de pesos mexicanos a euros
        const tasaCambioDolar = 16.94; // Tasa de cambio de pesos mexicanos a dólares

        const euros = pesosAMoneda(cantidadPesos, tasaCambioEuro);
        const dolares = pesosADolares(cantidadPesos, tasaCambioDolar);

        alert(`${cantidadPesos} pesos mexicanos son aproximadamente ${euros.toFixed(2)} euros y ${dolares.toFixed(2)} dólares.`);
    }
