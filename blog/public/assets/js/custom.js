"use strict";


let hamburger = document.querySelector('.hamburger');
let brand = document.querySelector('.brand');
let sidebar = document.getElementById('sidebar');
let main_content = document.getElementById('main_content');

hamburger.addEventListener('click', ()=> {
    hamburgerFunc();
    logoHide();
    hideSidebar();
    marginLeft();
})


function hamburgerFunc(){
    if(hamburger.classList.contains('hamburger-opened')){
        hamburger.classList.remove('hamburger-opened');
    }else{
        hamburger.classList.add('hamburger-opened');
    }
}

function logoHide(){
    if(brand.classList.contains('hide-logo')){
        brand.classList.remove('hide-logo');
    }else{
        brand.classList.add('hide-logo');
    }
}

function hideSidebar(){
    if(sidebar.classList.contains('hide-left-bar')){
        sidebar.classList.remove('hide-left-bar');
    }else{
        sidebar.classList.add('hide-left-bar');
    }
}

function marginLeft(){    
    if(main_content.classList.contains('merge-left')){
        main_content.classList.remove('merge-left');
    }else{
        main_content.classList.add('merge-left');
    }
}



