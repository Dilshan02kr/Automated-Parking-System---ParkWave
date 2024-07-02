let scrollContainer = document.querySelector(".gallery");
let backbtn = document.getElementById("backbtn");
let nextbtn = document.getElementById("nextbtn");

backbtn.addEventListener("click", ()=>{
    scrollContainer.style.scrollBehavior = "smooth";
    scrollContainer.scrollLeft -= 600;
});
nextbtn.addEventListener("click", ()=>{
    scrollContainer.style.scrollBehavior = "smooth";
    scrollContainer.scrollLeft += 600;
});


const bgImg = document.getElementById("bg-img");
const imgs = ["./assets/backgroundmain.jpg", "./assets/back2.jpg", "./assets/back3.jpg", "./assets/back4.jpg", "./assets/back5.jpg", "./assets/back6.jpg", "./assets/back7.jpg"];
let i = 0;

function imgSlider() {
    bgImg.style.backgroundImage = `url(${imgs[i]})`;
    if (i < imgs.length - 1){
        i++;
    }
    else{
        i = 0;
    }
    setTimeout(imgSlider, 3000);
}
window.onload = imgSlider();


let header = document.querySelector('.nav_header-menu');
let nLink = document.querySelectorAll('.nLink');

window.addEventListener('scroll', function(){
    if(this.window.scrollY > 100){
        header.style.backgroundColor = "rgba(39, 41, 42, 1)";
        header.style.boxShadow = "1px 7px 13px 0px rgba(0,0,0,0.75)";
    }
    else if (this.window.scrollY < 100){
        header.style.backgroundColor = "rgba(39, 41, 42, 0.5)";
        header.style.boxShadow = "none";
    }
})

let typescroll = document.querySelector(".parking-images");
let typebackbtn = document.querySelector("#typebackbtn");
let typenextbtn = document.querySelector("#typenextbtn");

typebackbtn.addEventListener("click", ()=>{
    typescroll.style.scrollBehavior = "smooth";
    typescroll.scrollLeft -= 262;
} );
typenextbtn.addEventListener("click", ()=>{
    typescroll.style.scrollBehavior = "smooth";
    typescroll.scrollLeft += 262;
});


let expscroll = document.querySelector(".exp-images");
let expbackbtn = document.querySelector("#expbackbtn");
let expnextbtn = document.querySelector("#expnextbtn");

expbackbtn.addEventListener("click", ()=>{
    expscroll.style.scrollBehavior = "smooth";
    expscroll.scrollLeft -= 173;
} );
expnextbtn.addEventListener("click", ()=>{
    expscroll.style.scrollBehavior = "smooth";
    expscroll.scrollLeft += 173;
});

let fbItem = document.getElementById("fbItem");

const fbItemList = ['"I love how Park Wave allows me to book a spot in advance. It is made my daily commute in Sri Lanka much less stressful. Great job!"', '"The interface is intuitive, and the availability of spots is updated in real-time. It is a lifesaver in busy Sri Lankan cities!', '"Customer service at Park Wave is top-notch. I had an issue with my reservation, and it was resolved quickly. Very impressed!"', '"Park Wave is reliable and efficient. It is become an essential part of my routine in Sri Lanka. Kudos to the developers!"', '"Park Wave is incredibly convenient. It is user-friendly and saves me a lot of time finding a parking spot in Sri Lanka. Highly recommend it!"'];

let j = 0;

function feedbackSlider(){
    fbItem.textContent = fbItemList[j];

    if (j < fbItemList.length - 1){
        j++;
    }
    else{
        j = 0;
    }
    setTimeout(feedbackSlider, 5000);
}
window.onload = feedbackSlider;
