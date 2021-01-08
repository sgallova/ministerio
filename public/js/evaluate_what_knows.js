var options = document.querySelectorAll("input[type='radio']");

/**
 * Agrega el evento que dispara cuando se selecciona una opcíón
 */
for (let i =0; i < options.length; i++) {
    options[i].addEventListener('change', function (event){
        event.preventDefault();
        //Oculto todos los elementos
        clear(document.querySelectorAll("#"+this.getAttribute('data-content')+" > div"));
        document.getElementById(this.getAttribute('data-content-display')).classList.remove('none')
        document.getElementById(this.getAttribute('data-content')).classList.remove('none')
    })
}

/**
 * Oculta los elementos
 * @param element
 */

function clear(element)
 {
     for(let i = 0; i < element.length; i++) {
         element[i].classList.add('none');
     }
 }
