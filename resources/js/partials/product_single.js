const deleteBtn = document.querySelector('.delete-button');
const deletePopup = document.querySelector('.delete-popup-backdrop');
const cancelBtn = document.querySelector('.cancel-button');

deleteBtn.addEventListener('click', function() {
    deletePopup.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
});

cancelBtn.addEventListener('click', function() {
    deletePopup.classList.add('hidden');
    document.body.style.overflow = 'visible';
})
