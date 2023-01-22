const searchEle = document.querySelector('.header-search');
const searchBtn = document.querySelector('#header-search');
const inputEle = document.querySelector('#header-search-input');
const loginEle = document.querySelector('.header-login');

searchBtn.addEventListener('click', function() {
    searchEle.classList.toggle('show');
    inputEle.classList.toggle('hidden');
    loginEle.classList.toggle('hidden');
})
