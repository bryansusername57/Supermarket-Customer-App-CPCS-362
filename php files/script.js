let searchFrom = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () => {
    searchFrom.classList.toggle('active')
    shoppingCart.classList.remove ('active')
    navbar.classList.remove('active')
}

document.querySelector('#login-btn').onclick = () => {
    window.location.replace('loginpage.php');
}
let shoppingCart = document.querySelector('.shopping-cart');

document.querySelector('#cart-btn').onclick = () => {
    shoppingCart.classList.toggle('active')
    searchFrom.classList.remove('active')
    navbar.classList.remove('active')
}

let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active')
    searchFrom.classList.remove('active')
    shoppingCart.classList.remove ('active')
}

window.onscroll = () => {
    searchFrom.classList.remove('active')
    shoppingCart.classList.remove ('active')
    navbar.classList.remove('active')
}