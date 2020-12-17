var frequent_questions = document.getElementsByClassName('container-frequent-question');

var container_modal = document.getElementById('container-modal');

var close_modal = document.getElementById('close-modal');

var container_modal_content = document.getElementsByClassName('container-modal-content');

var nav = document.getElementsByClassName('nav');

/**
 * Activa la modal desde los botones de preguntas frecuentes
 */
for(let i = 0; i < frequent_questions.length; i++) {
    frequent_questions[i].addEventListener('click', function (event) {
        for (let ii =0; ii < container_modal_content.length; ii ++) {
            container_modal_content[ii].classList.add('none');
        }
        document.getElementById(this.getAttribute('data-modal')).classList.remove('none');
        event.preventDefault();
        if (container_modal.classList.contains('close-r')) {
            container_modal.classList.remove('close-r')
            container_modal.classList.add('open-l')
        } else {
           container_modal.classList.remove('close-l')
           container_modal.classList.add('open-r')
        }
        document.querySelector('.nav.prev').setAttribute('data-modal', this.getAttribute('data-modal'));
        document.querySelector('.nav.next').setAttribute('data-modal', this.getAttribute('data-modal'));
    });
}

/*+
 Abre la modal teniendo en cuenta la salida y la cerrada
 */
close_modal.addEventListener('click', function (event) {
    event.preventDefault();
    if (container_modal.classList.contains('open-l')) {
        container_modal.classList.add('close-l')
        container_modal.classList.remove('open-l')
    } else {
        container_modal.classList.add('close-r')
        container_modal.classList.remove('open-r')
    }
})

/**
 * Agrega el evento de click a la navegacion de las modales
 */
for (let i = 0; i < nav.length; i++) {
    nav[i].addEventListener('click', function (event){
        event.preventDefault();
        switch (this.getAttribute('data-direction')) {
            case 'next' :
                    navigation(true, this.getAttribute('data-modal'));
                break;
            case 'prev' :
                    navigation(false, this.getAttribute('data-modal'));
                break;
            default : break;
        }
    })
}

/**
 * Realiza la navegacion entre los elementos
 * @param direction
 * @param id
 */
function navigation(direction, id)
{
    let open = document.getElementById(id);
    let next = document.getElementById(id).nextElementSibling;
    let prev = document.getElementById(id).previousElementSibling;

    if (direction)
    {
        if (! next.classList.contains('nav')) {
            open.classList.add('none')
            next.classList.remove('none');
        }
    } else {
        if (! prev.classList.contains('nav')) {
            open.classList.add('none')
            prev.classList.remove('none')
        }
    }
    refresh_navigation(direction, open)
}

/**
 * Refresca el elemento siguiente y anterior
 * @param direction
 * @param element
 */
function refresh_navigation(direction, element)
{
    let next = element.nextElementSibling;
    let prev = element.previousElementSibling;
    console.log(element)
    if (direction) {
        if (next.classList.contains('nav')) {
            document.querySelector('.nav.prev').setAttribute('data-modal', frequent_questions[frequent_questions.length - 1].getAttribute('data-modal'));
            document.querySelector('.nav.next').setAttribute('data-modal', frequent_questions[frequent_questions.length - 1].getAttribute('data-modal'));
        } else {
            document.querySelector('.nav.prev').setAttribute('data-modal', next.getAttribute('id'));
            document.querySelector('.nav.next').setAttribute('data-modal', next.getAttribute('id'));
        }
    } else {
        if (prev.classList.contains('nav')) {
            document.querySelector('.nav.prev').setAttribute('data-modal', frequent_questions[0].getAttribute('data-modal'));
            document.querySelector('.nav.next').setAttribute('data-modal', frequent_questions[0].getAttribute('data-modal'));
        } else {
            document.querySelector('.nav.prev').setAttribute('data-modal', prev.getAttribute('id'));
            document.querySelector('.nav.next').setAttribute('data-modal', prev.getAttribute('id'));
        }
    }
}
