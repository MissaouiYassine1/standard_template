document.getElementById('burger').addEventListener('click', function() {
    const nav = document.querySelector('nav ul');
    nav.style.display = (nav.style.display === 'block') ? 'none' : 'block';
});