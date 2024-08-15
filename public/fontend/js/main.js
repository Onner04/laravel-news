const $ = document.querySelector.bind(document)
const $$ = document.querySelectorAll.bind(document)

const slides =$$('.slide-move__item')
const slideUp = $('.slide-up')
const slideBack = $('.slide-back')
const widthSlide = $('.slide').clientWidth;
const slideMove =  $('.slide-move')
const maxSlide = widthSlide*2

var up = 0


function Up (){
    if(up < maxSlide){
        up += widthSlide
    }
    else{
        up=0
    }
    // slideMove.style.transform =`translate3d(-${up}px, 0px, 0px)`

    slides.forEach((tab,index) => {
        if(up === widthSlide){
            $('.slide-move__item.active').classList.remove('active')
            slides[1].classList.add('active')
        }if(up===maxSlide){
            $('.slide-move__item.active').classList.remove('active')
            slides[2].classList.add('active')

        }if(up===0){
            $('.slide-move__item.active').classList.remove('active')
            slides[0].classList.add('active')
        }
    })

    $('.slide-move__item.active').style.animation = `Slider linear 0.2s`
    
}

function Back (){
    if(up > 0){
        up -= widthSlide

    }
    else{
        up = maxSlide
    }
    // slideMove.style.transform = `translate3d(-${up}px, 0px, 0px)`
    slides.forEach((tab,index) => {
        if(up === widthSlide){
            $('.slide-move__item.active').classList.remove('active')
            slides[1].classList.add('active')
        }if(up===maxSlide){
            $('.slide-move__item.active').classList.remove('active')
            slides[2].classList.add('active')

        }if(up===0){
            $('.slide-move__item.active').classList.remove('active')
            slides[0].classList.add('active')
        }
    })
    $('.slide-move__item.active').style.animation = `SliderTT linear 0.2s`
    
    
}

// Sau 3s chuyển slide
let setTime;
const startInterval = () => {
    
    setTime = setInterval(function(){
        Up ()
    },4000)
}

startInterval();

slideUp.onclick = function(){
    Up ()
    clearInterval(setTime)
    setTimeout(startInterval(), 4000)
}

slideBack.onclick = function(){
    Back ()
    clearInterval(setTime)
    setTimeout(startInterval(), 4000)
}



// navbar
const menus = $$('.header-center-nav__list .header-center-nav__list-child');
const items = $$('.header-center-nav__list-menu');

menus.forEach((menu, index) => {
    menu.addEventListener('click', (event) => {
        event.preventDefault();  
        items.forEach((item, i) => {
            if (i === index) {
                item.classList.toggle('active');
            } else {
                item.classList.remove('active');
            }
        });
    });
});
