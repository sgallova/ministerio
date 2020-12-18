var a = document.querySelectorAll('.bar-range li a');

/**
 * Acción de selección opción
 */
for(let i =0; i < a.length; i++) {
    a[i].addEventListener('click', function (event) {
        event.preventDefault();
        clear_active(this);
        this.classList.add('active');
    })
}

/**
 * Limpia la opción anterior
 */
function clear_active(item)
{
    let children = item.parentElement.parentElement.querySelectorAll('li a');
    for(let i = 0; i < children.length; i++) {
        children[i].classList.remove('active');
    }
}
