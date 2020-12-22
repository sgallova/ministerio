var options = document.querySelectorAll("input[type='radio']");
for (let i =0; i < options.length; i++) {
    options[i].addEventListener('change', function (event){
        event.preventDefault();
        clear(document.querySelectorAll("#"+this.getAttribute('data-content')+" > div"));
        document.getElementById(this.getAttribute('data-content-display')).classList.remove('none')
        document.getElementById(this.getAttribute('data-content')).classList.remove('none')
    })
}
 function clear(element)
 {
     for(let i = 0; i < element.length; i++) {
         element[i].classList.add('none');
     }
 }
