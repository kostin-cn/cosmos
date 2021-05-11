jQuery.noConflict();
(function($){
  $(function(){

    if(document.getElementById("brandsContainer")){
      const brandsBlocks = document.querySelectorAll(".indexBrandsItemBlock");
      const brandsContainer = document.getElementById("brandsContainer");

        [...brandsBlocks].map( (brandBlock) => {
          if(window.outerWidth > 500){
            brandBlock.addEventListener("mouseenter", function (event){
              [...brandsBlocks].map( bb => bb.classList.remove("active") );
              event.target.classList.add("active");
            });
            brandBlock.addEventListener("mouseleave", function (event){
              event.target.classList.remove("active");
              brandsBlocks[1].classList.add("active");
            });
          } else {
            brandBlock.addEventListener("click", function(){
              [...brandsBlocks].map( bb => bb.classList.remove("active") );
              this.classList.add("active");
              const toRemove = ["itemBlock","indexBrandsItemBlock","active"];
              const obj =[...this.classList].filter( el => !toRemove.includes( el ) );

              switch (obj[0]){
                case "brandLeft":
                  brandsContainer.style.transform = `translate3d(24%,0, 0)`;
                  break;
                case "brandRight":
                  brandsContainer.style.transform = `translate3d(-24%,0, 0)`;
                  break;
                default:
                  brandsContainer.style.transform = `translate3d(0, 0, 0)`;
              }
            });
          }
        });




      const targetBrand = document.querySelectorAll(".indexBrandsItemBlock.centered")[0];

      let brandsActiveBlocks = null;

      document.addEventListener("scroll", function() {
        let brandsContainerPositionTop = $(".sectionBrands").offset().top;
        if ( (window.pageYOffset > (brandsContainerPositionTop - window.innerHeight*0.7)) && (window.pageYOffset < (brandsContainerPositionTop + window.innerHeight*0.3))){
          //console.log("got it!");

          brandsActiveBlocks = document.querySelectorAll(".indexBrandsItemBlock.active");
          if (!brandsActiveBlocks.length) {targetBrand.classList.add("active");}
        }
        else{
          [...brandsBlocks].map( bb => bb.classList.remove("active") );
          brandsContainer.style.transform = `translate3d(0, 0, 0)`;
        }
      });
    }

  });
})(jQuery);
