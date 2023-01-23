const deleteBtn = document.querySelector('.delete-button');
const deletePopup = document.querySelector('.delete-popup-backdrop');
const cancelBtn = document.querySelector('.cancel-button');
const createSucces = document.querySelector('.alert-succes');

deleteBtn.addEventListener('click', function() {
    deletePopup.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
});

cancelBtn.addEventListener('click', function() {
    deletePopup.classList.add('hidden');
    document.body.style.overflow = 'visible';
});

function hideSuccessMessage() {
    createSucces.classList.add('no-visible');
};

if(document.body.contains(createSucces)) {
    setTimeout(hideSuccessMessage, 10000);
};
