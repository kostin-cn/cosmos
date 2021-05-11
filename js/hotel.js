jQuery.noConflict();
(function($){
  $(function(){
    if($("#apartmentsSlider").length){

      const $apartmentsSlider = tns({
        container: "#apartmentsSlider",
        items: 1.2,
        slideBy: 1,
        gutter:15,
        mode: "carousel",
        autoplay: false,
        autoplayButtonOutput: false,
        controls: false,
        nav: false,
        lazyload: false,
        loop: true,
        mouseDrag:true,
      });

    }

    if($("#recreations").length) {
      $('.advantagesArrow.prev').click(function () {
        let $key = parseInt($('.catLink.active').data('id').substr(-1));
        if ($key != 0) {$key=$key-1};
        $('.catLink').removeClass('active');
        $('.sectionRecreation .sliderContainer').addClass('hidden');
        let $catId = '#cat-'+$key;
        let $slId = '#slider-'+$key;
        $($catId).addClass('active');
        $($slId).removeClass('hidden');
      });
      $('.advantagesArrow.next').click(function () {
        let $key = parseInt($('.catLink.active').data('id').substr(-1));
        if ($key != ($('.catLink').length -1)) {$key=$key+1;}
        $('.catLink').removeClass('active');
        $('.sectionRecreation .sliderContainer').addClass('hidden');
        let $catId = '#cat-'+$key;
        let $slId = '#slider-'+$key;
        $($catId).addClass('active');
        $($slId).removeClass('hidden');
      });
    }

    if($("#recreations").length && (window.innerWidth < 960) ){
      const $apartmentsSlider = tns({
        container: "#recreations .advantCategories",
        autoWidth:true,
        items: 2,
        slideBy: 1,
        gutter:15,
        mode: "carousel",
        autoplay: false,
        autoplayButtonOutput: false,
        controls: false,
        nav: false,
        lazyload: false,
        loop: false,
        mouseDrag: true,
      });
      $(".catLink").on("click",function(){
        const index = $(this).index();
        $apartmentsSlider.goTo(index);
      });

      $('.advantagesArrow.prev').click(function () {
        $apartmentsSlider.goTo('prev');
      });
      $('.advantagesArrow.next').click(function () {
        $apartmentsSlider.goTo('next');
      });

    }

  });
})(jQuery);
