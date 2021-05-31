const nombreClinica = Cadena => {
    let arrayCadena = Cadena.split('');
    let i = 0;
    let imprimirCadena = setInterval(function() {
        document.querySelector('#mensaje').innerHTML += arrayCadena[i];
         // inyectar el html
        //  document.querySelector('#listado').innerHTML = html;
        i++;

        if (i === arrayCadena.length) {
            // document.mensaje.style.fontsize = "2rem";
            clearInterval(imprimirCadena);
        }
    }, 100);
    
};

nombreClinica('Clínica de Atencion Integral a la Mujer');