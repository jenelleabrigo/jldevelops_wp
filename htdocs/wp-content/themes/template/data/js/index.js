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
  // $(window).scroll(function(){
  //   if ($(window).scrollTop() > $(".p-index__carousel").height()) {
  //     $(".l-header").addClass("is-scrolled");
  //   }
  //   else {
  //     $(".l-header").removeClass("is-scrolled");
  //   }
  // })

  //modal
  $(function(){
    var modal = $('.p-index__works__inner__modal');
    var item = $('.p-index__works__inner__item');
    var close = $('.p-index__works__inner__modal__close');

    item.on("click", function(){
      $(this).siblings().css("display", "block");
    })

    close.on("click", function(){
      $(this).parent(modal).css("display", "none");
    })

    $(window).click(function(e) {
      if(e.target.className === 'p-index__works__inner__modal'){
        modal.css("display", "none");
      };
    });
  })

})(jQuery);
