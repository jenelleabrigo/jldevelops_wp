(function($){

  //nav sp trigger
  $(function(){
    var $html = $("html");
    $(".l-nav__trigger__button").on("click", function(){
      $html.toggleClass("is-show-nav");
    });
  })

  //active menu
  $(function(){
    var path = window.location.href;
    $(".l-nav__content__menu__anchor").each(function() {
      if (this.href == path){
        $(this).addClass("is-active");
      }
    })
  })

  //header on scroll
  $(window).scroll(function(){
    if ($(window).scrollTop() > $(".p-index__carousel").height()) {
      $(".l-header").addClass("is-scrolled");
    }
    else {
      $(".l-header").removeClass("is-scrolled");
    }
  })

})(jQuery);
