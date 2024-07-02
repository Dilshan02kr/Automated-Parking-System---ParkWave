let stab1 = document.querySelector('.sec-tab1');
let stab2 = document.querySelector('.sec-tab2');
let stab3 = document.querySelector('.sec-tab3');

let sdet1 = document.querySelector('.sec-det-1');
let sdet2 = document.querySelector('.sec-det-2');
let sdet3 = document.querySelector('.sec-det-3');

stab1.addEventListener('click', function(){
    stab1.classList.add('active');
    stab2.classList.remove('active');
    stab3.classList.remove('active');

    sdet1.classList.add('active');
    sdet2.classList.remove('active');
    sdet3.classList.remove('active');
})

stab2.addEventListener('click', function(){
    stab2.classList.add('active');
    stab1.classList.remove('active');
    stab3.classList.remove('active');

    sdet2.classList.add('active');
    sdet1.classList.remove('active');
    sdet3.classList.remove('active');
})

stab3.addEventListener('click', function(){
    stab3.classList.add('active');
    stab2.classList.remove('active');
    stab1.classList.remove('active');

    sdet3.classList.add('active');
    sdet2.classList.remove('active');
    sdet1.classList.remove('active');
})


let tab1 = document.querySelector('.tab-1');
let tab2 = document.querySelector('.tab-2');
let tab3 = document.querySelector('.tab-3');
let tab4 = document.querySelector('.tab-4');

let sec1 = document.querySelector('.sec1');
let sec2 = document.querySelector('.sec2');
let sec3 = document.querySelector('.sec3');
let sec4 = document.querySelector('.sec4');

tab1.addEventListener('click', function(){
    tab1.classList.add('active');
    tab2.classList.remove('active');
    tab3.classList.remove('active');
    tab4.classList.remove('active');

    sec1.classList.add('active');
    sec2.classList.remove('active');
    sec3.classList.remove('active');
    sec4.classList.remove('active');
})

tab2.addEventListener('click', function(){
    tab2.classList.add('active');
    tab1.classList.remove('active');
    tab3.classList.remove('active');
    tab4.classList.remove('active');

    sec2.classList.add('active');
    sec1.classList.remove('active');
    sec3.classList.remove('active');
    sec4.classList.remove('active');
})

tab3.addEventListener('click', function(){
    tab3.classList.add('active');
    tab1.classList.remove('active');
    tab2.classList.remove('active');
    tab4.classList.remove('active');

    sec3.classList.add('active');
    sec1.classList.remove('active');
    sec2.classList.remove('active');
    sec4.classList.remove('active');
})

tab4.addEventListener('click', function(){
    tab4.classList.add('active');
    tab1.classList.remove('active');
    tab3.classList.remove('active');
    tab2.classList.remove('active');

    sec4.classList.add('active');
    sec1.classList.remove('active');
    sec3.classList.remove('active');
    sec2.classList.remove('active');
})
