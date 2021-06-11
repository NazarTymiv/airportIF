let plane = document.querySelector('.aboutus__plane'),
    aboutus__blocks = document.querySelectorAll('.aboutus__block');

window.addEventListener('scroll', () => {
    if(window.scrollY <= 3000){
        plane.style.marginTop = `${window.scrollY}px`;
    }

    aboutus__blocks.forEach(block => {
        if(window.scrollY >= block.getAttribute('top')) {
            block.style.opacity = '1';
        } else {
            block.style.opacity = '0.3';
        }
    })
})