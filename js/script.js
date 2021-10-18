const btnMobile = document.getElementById('btn-menu');

function teste(){
    if(event.type === 'touchstart') event.preventDefault();
    const nav = document.getElementById("nav-menu");
    nav.classList.toggle("active");
}
btnMobile.addEventListener('click', teste);
btnMobile.addEventListener('touchstart', teste);
