const label = document.querySelector('label');
const inputEle = Array.from(document.querySelectorAll('.input-form'));

function handleInput(event) {
    const element = event.target;
    if(element.value.trim() === '') {
        element.classList.remove('has-text');
    } else {
        element.classList.add('has-text');
    }
}

inputEle.forEach(element => {
    element.addEventListener('input', handleInput);
});



