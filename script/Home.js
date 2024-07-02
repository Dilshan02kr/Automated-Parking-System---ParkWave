let tab1 = document.querySelector('.tab-1');
let tab2 = document.querySelector('.tab-2');
let tab3 = document.querySelector('.tab-3');

let sec1 = document.querySelector('.sec-1');
let sec2 = document.querySelector('.sec-2');
let sec3 = document.querySelector('.sec-3');

tab1.addEventListener('click', function(){
    sec1.classList.add('active');
    sec2.classList.remove('active');
    sec3.classList.remove('active');

    tab1.classList.add('active');
    tab2.classList.remove('active');
    tab3.classList.remove('active');
   
})
tab2.addEventListener('click', function(){
    sec2.classList.add('active');
    sec1.classList.remove('active');
    sec3.classList.remove('active');

    tab2.classList.add('active');
    tab1.classList.remove('active');
    tab3.classList.remove('active');
})
tab3.addEventListener('click', function(){
    sec3.classList.add('active');
    sec2.classList.remove('active');
    sec1.classList.remove('active');

    tab3.classList.add('active');
    tab2.classList.remove('active');
    tab1.classList.remove('active');
})

let comimg = document.querySelector('.colombo');
let kanimg = document.querySelector('.kandy');
let galimg = document.querySelector('.galle');
let negimg = document.querySelector('.negambo');
let purimg = document.querySelector('.anuradapura');
let gamimg = document.querySelector('.gampaha');

let coltab = document.querySelector('.coltab');
let kandtab = document.querySelector('.kandtab');
let negtab = document.querySelector('.negtab');
let galletab = document.querySelector('.galletab');
let puretab = document.querySelector('.puretab');
let gamtab = document.querySelector('.gamtab');

let seccol = document.querySelector('.sec-col');
let seckand = document.querySelector('.sec-kand');
let secgalle = document.querySelector('.sec-galle');
let secneg = document.querySelector('.sec-neg');
let secpure = document.querySelector('.sec-pure');
let secgam = document.querySelector('.sec-gam');

coltab.addEventListener('click', function(){

    coltab.classList.add('now');
    kandtab.classList.remove('now');
    galletab.classList.remove('now');
    negtab.classList.remove('now');
    puretab.classList.remove('now');
    gamtab.classList.remove('now');

    comimg.classList.add('now');
    kanimg.classList.remove('now');
    galimg.classList.remove('now');
    negimg.classList.remove('now');
    purimg.classList.remove('now');
    gamimg.classList.remove('now');

    seccol.classList.add('now');
    seckand.classList.remove('now');
    secgalle.classList.remove('now');
    secneg.classList.remove('now');
    secpure.classList.remove('now');
    secgam.classList.remove('now');
})
kandtab.addEventListener('click', function(){
    kandtab.classList.add('now');
    coltab.classList.remove('now');
    galletab.classList.remove('now');
    negtab.classList.remove('now');
    puretab.classList.remove('now');
    gamtab.classList.remove('now');

    kanimg.classList.add('now');
    comimg.classList.remove('now');
    galimg.classList.remove('now');
    negimg.classList.remove('now');
    purimg.classList.remove('now');
    gamimg.classList.remove('now');

    seckand.classList.add('now');
    seccol.classList.remove('now');
    secgalle.classList.remove('now');
    secneg.classList.remove('now');
    secpure.classList.remove('now');
    secgam.classList.remove('now');
})
galletab.addEventListener('click', function(){
    galletab.classList.add('now');
    kandtab.classList.remove('now');
    coltab.classList.remove('now');
    negtab.classList.remove('now');
    puretab.classList.remove('now');
    gamtab.classList.remove('now');

    galimg.classList.add('now');
    kanimg.classList.remove('now');
    comimg.classList.remove('now');
    negimg.classList.remove('now');
    purimg.classList.remove('now');
    gamimg.classList.remove('now');

    secgalle.classList.add('now');
    seckand.classList.remove('now');
    seccol.classList.remove('now');
    secneg.classList.remove('now');
    secpure.classList.remove('now');
    secgam.classList.remove('now');
})
negtab.addEventListener('click', function(){
    negtab.classList.add('now');
    kandtab.classList.remove('now');
    galletab.classList.remove('now');
    coltab.classList.remove('now');
    puretab.classList.remove('now');
    gamtab.classList.remove('now');

    negimg.classList.add('now');
    kanimg.classList.remove('now');
    galimg.classList.remove('now');
    comimg.classList.remove('now');
    purimg.classList.remove('now');
    gamimg.classList.remove('now');

    secneg.classList.add('now');
    seckand.classList.remove('now');
    secgalle.classList.remove('now');
    seccol.classList.remove('now');
    secpure.classList.remove('now');
    secgam.classList.remove('now');
})
puretab.addEventListener('click', function(){
    puretab.classList.add('now');
    kandtab.classList.remove('now');
    galletab.classList.remove('now');
    negtab.classList.remove('now');
    coltab.classList.remove('now');
    gamtab.classList.remove('now');

    purimg.classList.add('now');
    kanimg.classList.remove('now');
    galimg.classList.remove('now');
    negimg.classList.remove('now');
    comimg.classList.remove('now');
    gamimg.classList.remove('now');

    secpure.classList.add('now');
    seckand.classList.remove('now');
    secgalle.classList.remove('now');
    secneg.classList.remove('now');
    seccol.classList.remove('now');
    secgam.classList.remove('now');
})
gamtab.addEventListener('click', function(){
    gamtab.classList.add('now');
    kandtab.classList.remove('now');
    galletab.classList.remove('now');
    negtab.classList.remove('now');
    puretab.classList.remove('now');
    coltab.classList.remove('now');

    gamimg.classList.add('now');
    kanimg.classList.remove('now');
    galimg.classList.remove('now');
    negimg.classList.remove('now');
    purimg.classList.remove('now');
    comimg.classList.remove('now');

    secgam.classList.add('now');
    seckand.classList.remove('now');
    secgalle.classList.remove('now');
    secneg.classList.remove('now');
    secpure.classList.remove('now');
    seccol.classList.remove('now');
})
 
