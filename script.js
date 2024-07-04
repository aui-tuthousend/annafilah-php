    const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry => {
        console.log(entry)
        if (entry.isIntersecting){
            entry.target.classList.add('show');
        } else {
            entry.target.classList.remove('show');
        }
    }));
});


    const hiddentxt = document.querySelectorAll('*');
    hiddentxt.forEach((el) => observer.observe(el));

    document.addEventListener('DOMContentLoaded', (event) => {
    const scrollContainer = document.querySelector('.c3-1');
    const leftBtn = document.querySelector('.left-btn');
    const rightBtn = document.querySelector('.right-btn');

    leftBtn.addEventListener('click', () => {
    scrollContainer.scrollLeft -= scrollContainer.clientWidth;
});

    rightBtn.addEventListener('click', () => {
    scrollContainer.scrollLeft += scrollContainer.clientWidth;
});
});
