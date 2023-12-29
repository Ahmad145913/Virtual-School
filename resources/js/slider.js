let sliderDivs = document.querySelectorAll('.slide'),
    arrowLeft = document.querySelector('#arrow-left'),
    arrowRight = document.querySelector('#arrow-right'),
    current = 0;

function reset() {
    for (let i = 0; i < sliderDivs.length; i++) {
        sliderDivs[i].style.display = 'none';
    }
}

// init slider
function startSlide() {
    reset();
    sliderDivs[0].style.display = 'block';
}

//show prev
function slideLeft() {
    reset()
    sliderDivs[current - 1].style.display = 'block';
    current--;
}

// show next
function slideRight() {
    reset()
    sliderDivs[current + 1].style.display = 'block';
    current++;
}

// left arrow click
arrowLeft.addEventListener('click', function () {
    if (current == 0) {
        current = sliderDivs.length;
    }
    slideLeft();

});

// Right arrow click
arrowRight.addEventListener('click', function () {
    if (current == sliderDivs.length - 1) {
        current = -1;
    }
    slideRight();

})

startSlide();