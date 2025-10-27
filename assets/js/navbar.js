document.getElementById('burger').addEventListener('click', function() {
    const nav = document.querySelector('nav ul');
    nav.style.display = (nav.style.display === 'block') ? 'none' : 'block';
});
const burger = document.getElementById('burger');
const navMenu = document.querySelector('nav ul');

burger.addEventListener('click', () => {
    navMenu.classList.toggle('show');
});
const navLinks = document.querySelectorAll('nav ul li a');

navLinks.forEach(link => {
    link.addEventListener('click', () => {
        navMenu.classList.remove('show');
    });
});
