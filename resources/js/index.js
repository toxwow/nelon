let menuButton = document.getElementById('menuButton');
let itemMenu = $('.menu-item');
console.log(itemMenu);
console.log(menuButton);
menuButton.addEventListener('click', function (e) {
    menuButton.classList.toggle('is-active');
    $(".menu-wrapper").slideToggle( "slow" );
    e.preventDefault();
});