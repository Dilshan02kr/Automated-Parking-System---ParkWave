let navheader = document.querySelector('.navhead');
let navLogo = document.querySelector('#nav-logo-img');
let alink = document.querySelectorAll('.nav-links ul li a');

window.addEventListener('scroll', function(){
    if(this.window.scrollY > 100){
        navheader.style.backgroundColor = "#FAFAFA";
        navheader.style.boxShadow = "0 4px 8px rgba(0, 0, 0, 0.2)";
        navLogo.src = "./assets/navlogo.png";
        alink.forEach(link => link.style.color = "#27292a");
    }
    else if (this.window.scrollY < 100){
        navheader.style.backgroundColor = "rgba(39, 41, 42)";
        navheader.style.boxShadow = "none";
        navLogo.src = "./assets/Logo.png";
        alink.forEach(link => link.style.color = "#fff");
    }
})