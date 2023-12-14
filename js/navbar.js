const burgerbutton = document.querySelector('.burger');
const menu = document.querySelector('nav_link');

burgerbutton.addEventListener('click' , function (){
    menu.classList.toggle('active');
});