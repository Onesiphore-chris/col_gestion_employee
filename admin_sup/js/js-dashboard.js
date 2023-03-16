const sideMenu = document.querySelector("aside");
const MenuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const themeToggler = document.querySelector(".theme-toggler");

MenuBtn.addEventListener('click', () =>{
    sideMenu.style.display = 'block';
})

MenuBtn.addEventListener('click', () =>{
    closeBtn.style.display = 'none';
})

themeToggler.addEventListener('click', () =>{
    document.body.classList.toggle('dark-theme-variables');

    themeToggler.querySelector('i:nth-child(1)').classList.toggle('active')
    themeToggler.querySelector('i:nth-child(2)').classList.toggle('active')
})