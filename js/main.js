let banner__scheduleLine = document.querySelector('.banner__schedule-line'),
    banner__button = document.querySelectorAll('.banner__button'),
    banner__search = document.querySelector('.banner__search'),
    banner__searchInput = document.querySelector('.banner__search-input'),
    banner__buttonsWidth = banner__button[0].offsetWidth,
    banner__buttonsLeft = banner__button[0].getBoundingClientRect().left-56;

banner__scheduleLine.style.width = `${banner__buttonsWidth}px`;
banner__scheduleLine.style.left = `${banner__buttonsLeft}px`;
banner__button.forEach(item => {
    item.addEventListener('mouseover', () => {
        banner__scheduleLine.style.width = `${item.offsetWidth}px`;
        banner__scheduleLine.style.left = `${item.getBoundingClientRect().left-56}px`;
    })
    item.addEventListener('mouseout', () => {
        banner__scheduleLine.style.width = `${banner__buttonsWidth}px`;
        banner__scheduleLine.style.left = `${banner__buttonsLeft}px`;
    })
    item.addEventListener('click', () => {
        banner__buttonsWidth = item.offsetWidth;
        banner__buttonsLeft = item.getBoundingClientRect().left-56;
        banner__button.forEach(block => {
            block.classList.toggle('banner__button-active');
        })
    })
})
banner__searchInput.addEventListener('focus', () => {
    banner__scheduleLine.style.width = `${banner__search.offsetWidth}px`;
    banner__scheduleLine.style.left = `${banner__search.getBoundingClientRect().left-56}px`;
    banner__search.style.opacity = '1';
})
banner__searchInput.addEventListener('focusout', () => {
    banner__scheduleLine.style.width = `${banner__buttonsWidth}px`;
banner__scheduleLine.style.left = `${banner__buttonsLeft}px`;
    banner__search.style.opacity = '0.5';
})
