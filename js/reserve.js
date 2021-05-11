jQuery.noConflict();
(function($){
  $(function(){
    const formSearch = $("#formSearch");
    const reserveBtn = $(".reserve");
    if(formSearch){
      const formSearchOffsetTop = formSearch.offset().top;
      reserveBtn.on("click",function(){
        window.scrollTo({
          top: formSearchOffsetTop - 150,
          behavior: "smooth"
        });
      });
    }
  });
})(jQuery);
