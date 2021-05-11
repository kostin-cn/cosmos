const homeSlider = document.querySelector("#hotelsSlider");
if (homeSlider) {
  // autoplay timeout
  const timeout = 4000;
  const slideDelay = 1000;
  let autoPlay;
  let clickSlide;

  const defaultBgBlock = document.querySelector(".defaultBackground");

  const hotelsSlider = tns({
    container: "#hotelsSlider",
    items: 2,
    responsive: {
      500: {
        items: 2
      },
      960: {
        items: 3
      },
    },
    startIndex: 1,
    slideBy:1,
    //slideBy: "page",
    mode: "carousel",
    //animateDelay: true,
    autoplay: false,
    autoplayTimeout: 5000,
    autoplayButtonOutput: false,
    controls: false,
    nav: false,
    loop: true,
    animateDelay: 2500,
    lazyload: false,

  });

  function autoplaySlider() {
    nextSlide();
    setTimeout(autoplaySlider, 7000);
  }

  setTimeout(autoplaySlider, 7000);

  // hotelsSlider.events.on('transitionStart', function (info, eventName) {
    // direct access to info object
    // if (info.index < info.indexCached) {
    //   nextSlide();
    // }else {
    //   prevSlide();
    // }
  //
  // })

  //define arrows
  const arrowNext = document.querySelector(".hotelsArrow.next");
  const arrowPrev = document.querySelector(".hotelsArrow.prev");

  const dyn = document.querySelectorAll(".dynamicBackgroundWrapper");
  const dynCount = dyn.length;
  const txt = document.querySelectorAll(".dynamicTexts");

  const slideItems = hotelsSlider.getInfo().slideItems;



  const nextSlide = () => {

    // define index
    const displayIndex = hotelsSlider.getInfo().displayIndex;

    // adding showing background class
    [...dyn].map((dynItem)=> {dynItem.classList.remove("current","active");dynItem.children[0].classList.remove("showed");});

    let activeCurrent = dyn[(displayIndex - 1)];
    let defaultBgImage = activeCurrent.children[0].style.backgroundImage;

    activeCurrent.classList.add("active","current");
    activeCurrent.children[0].classList.add("showed");

    [...txt].map( txtItem => txtItem.classList.remove("active"));

    //adding hiding slide class
    const curSlide = hotelsSlider.getInfo().index;

    //ADDING TO ARRAY TO map
    [...slideItems].map((slideItem)=> slideItem.classList.remove("slideHide"));

    slideItems[curSlide].classList.add("slideHide");

    setTimeout(function () {

      txt[(displayIndex - 1)].classList.add("active");
    },slideDelay*0.5);


    setTimeout(function () {
      hotelsSlider.goTo("next");
      defaultBgBlock.style.backgroundImage = defaultBgImage;
      [...dyn].map( (dynItem) => {
        if (!dynItem.classList.contains("current")){
          dynItem.classList.remove("active");
          dynItem.children[0].classList.remove("showed");
        }
      });

      // resetting timeout
      // clearTimeout(autoPlay);
      // autoPlay = setTimeout(nextSlide,timeout);
    }, slideDelay);
  };

  const prevSlide = () => {
    [...dyn].map((dynItem)=> dynItem.classList.remove("current"));
    hotelsSlider.goTo("prev");

    // resetting timeout
    // clearTimeout(autoPlay);
    // autoPlay = setTimeout(nextSlide,timeout);

    let displayIndex = hotelsSlider.getInfo().displayIndex;
    let curSlide = hotelsSlider.getInfo().index;

    if (curSlide === 0) {
      slideItems[0].classList.add("slideHide");
      slideItems[slideItems.length-1].classList.add("slideHide");
    }
    else{
      slideItems[curSlide].classList.add("slideHide");
    }

    if (displayIndex === 1 ) {
      displayIndex = dynCount;
      dyn[displayIndex-1].classList.add("active");
      txt[0].classList.remove("active");

      setTimeout(function () {
        dyn[0].classList.remove("active");
      },slideDelay*0.5);
      setTimeout(function () {
        dyn[0].children[0].classList.remove("showed");
        slideItems[curSlide].classList.remove("slideHide");
        dyn[displayIndex-1].children[0].classList.add("showed");
        txt[displayIndex-1].classList.add("active");
      },slideDelay);
    }
    else{
      dyn[displayIndex-2].classList.add("active");
      dyn[displayIndex-2].children[0].classList.add("showed");
      txt[displayIndex-1].classList.remove("active");
      setTimeout(function () {
        dyn[displayIndex-1].classList.remove("active");
      },slideDelay*0.5);
      setTimeout(function () {
        dyn[displayIndex-1].children[0].classList.remove("showed");
        slideItems[curSlide].classList.remove("slideHide");
        txt[displayIndex-2].classList.add("active");
      },slideDelay);
    }

  };

  const nextSlideMobile = () => {
    hotelsSlider.goTo("next");
  };
  const prevSlideMobile = () => {
    hotelsSlider.goTo("prev");
  };

  if(window.outerWidth > 960){
    //event handler only on desktop
    [...slideItems].map((slItem)=>{
      slItem.addEventListener("click",function() {
        let slIndex = [...this.parentElement.children].indexOf(this);
        hotelsSlider.goTo(slIndex % dynCount);
        setTimeout(nextSlide,slideDelay*0.5);
      });
    });
    arrowNext.onclick = nextSlide;
    arrowPrev.onclick = prevSlide;
  }
  else{
    arrowNext.onclick = nextSlideMobile;
    arrowPrev.onclick = prevSlideMobile;
  }






  // document.addEventListener('DOMContentLoaded', function(){ // Аналог $(document).ready(function(){
  //   autoPlay = setTimeout(nextSlide,timeout);
  // });

  // const customAnim = () => {
  //   if (window.innerWidth > 960) {
  //     arrowNext.onclick = nextSlide;
  //     arrowPrev.onclick = prevSlide;
  //   }
  // };
  // customAnim();
  // window.addEventListener("resize", function() {
  //   customAnim();
  // });
}
