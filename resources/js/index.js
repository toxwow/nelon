let menuButton = document.getElementById('menuButton');
let body = $('body');
let itemMenu = $('.menu-item');
menuButton.addEventListener('click', function (e) {
    menuButton.classList.toggle('is-active');
    $(".menu-wrapper").slideToggle( "slow" );
    body.toggleClass('overflow-hidden');
    e.preventDefault();
});