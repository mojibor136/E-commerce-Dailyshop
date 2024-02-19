
let slides = document.querySelectorAll('.slides-img');
let next = document.querySelector('.next');
let prev = document.querySelector('.prev');
let count = 0;
let intervalId


prev.addEventListener('click', () => {
    changeSlide(count + 1);
});

next.addEventListener('click', () => {
    changeSlide(count - 1);
});


function changeSlide(moveTo) {
    clearInterval(intervalId);
    count = moveTo;

    if (count >= slides.length) {
        count = 0;
    }

    if (count < 0) {
        count = slides.length - 1;
    }

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
    }
    slides[count].style.display = 'block';

    intervalId = setInterval(() => {
        changeSlide(count + 1);
    }, 3000);
}
changeSlide(count);
