(function () {

    const header = document.querySelectorAll('.header--nav')[0];
    const scrollTop = 50;
    const breakpoint = 800;

    window.onscroll = function () {

        let ww = window.innerWidth;
        ww >= breakpoint && window.scrollY >= scrollTop ? header.classList.add('is-scroll') : header.classList.remove('is-scroll')

    }
})();


$('.js-scrolltocontact').click(function () {
    $('html, body').animate({
        scrollTop: $('section.contactsection').offset().top
    }, 1700);
});