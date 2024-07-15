
const modal = document.querySelectorAll('.modal'),
      cardBtn = document.querySelectorAll('.card__product'),
      modalClose = document.querySelectorAll('.modal__close'),
      modalCard = document.querySelectorAll('.modal__card');

let activeModal = (modalClick) => {
    modal[modalClick].classList.add('active-modal');
}

cardBtn.forEach((cardBtn, i) => {
    cardBtn.addEventListener('click', () => {
        activeModal(i);
    });
});

modalClose.forEach((modalClose) => {
    modalClose.addEventListener('click', () => {
        modal.forEach((modalRemove) => {
            modalRemove.classList.remove('active-modal');
        });
    });
});

modal.forEach((modal) => {
    modal.addEventListener('click', () => {
        modal.classList.remove('active-modal');
    });
});

modalCard.forEach((modalCard) => {
    modalCard.addEventListener('click', (e) => {
        e.stopPropagation();
    });
});
