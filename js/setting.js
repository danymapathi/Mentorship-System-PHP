'use strict'
window.onload = () => {
    let settingBtn = document.getElementById('settingBtn');
    let closeSlideMenu = document.getElementById('closeSlideMenu');
    let myNavBar = document.getElementById('myNavBar');
    let menu = document.getElementById('menu');
    settingBtn.addEventListener('click', ()=>{
        myNavBar.style.marginLeft = "0px";
        // myNavBar.style.display = "block";
        menu.style.marginLeft = "0px";
        // menu.style.transition = "0.5s";
    });
    closeSlideMenu.addEventListener('click', ()=>{
        myNavBar.style.marginLeft = "-100%";
        // myNavBar.style.display = "none";
        menu.style.marginLeft = "-350px";
        // menu.style.transition = "0.5s";
    });
}