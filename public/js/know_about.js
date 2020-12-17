var frequent_questions = document.getElementsByClassName('container-frequent-question');

var container_modal = document.getElementById('container-modal');

var close_modal = document.getElementById('close-modal');

var container_modal_content = document.getElementsByClassName('container-modal-content');
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
    });
}

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

