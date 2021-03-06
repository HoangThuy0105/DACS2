// addCart and Buy

const overlay1 = document.querySelector('.js-modal-action-overlay');
const modalActionForm = document.querySelector('.js-modal-action-form');
const addCart = document.querySelector('.js-product-detail-action__addCart-btn');
const addCartBtn= document.querySelector('.js-modal-action-form__action-addCart-btn');
const Buy = document.querySelector('.js-product-detail-action__Buy-btn');
const buyBtn = document.querySelector('.js-modal-action-form__action-Buy-btn')
const closeIcon = document.querySelector('.js-modal-action-form-container__close-icon');

function showAddCartForm(){
    modalActionForm.classList.add('modal-action-form-open')
    overlay1.classList.add('modal-action-overlay-open')
    addCartBtn.classList.add('openBtn');
}
function showBuyForm(){
    modalActionForm.classList.add('modal-action-form-open')
    overlay1.classList.add('modal-action-overlay-open')
    buyBtn.classList.add('openBtn');
}

function closeForm(){
    overlay1.classList.remove('modal-action-overlay-open')
    modalActionForm.classList.remove('modal-action-form-open');
    addCartBtn.classList.remove('openBtn');
    buyBtn.classList.remove('openBtn');
}

addCart.addEventListener('click', showAddCartForm);
Buy.addEventListener('click', showBuyForm);
closeIcon.addEventListener('click', closeForm);
overlay1.addEventListener('click', closeForm)
        