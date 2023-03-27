(function ($, Drupal, once) {
  Drupal.behaviors.myModuleBehavior = {
    attach: function (context, settings) {
      $("#tabs-nav li:first-child").addClass("active");
      $(".tab-content").hide();
      $(".tab-content:first").show();
      // $('.con-card-wrapper').each(function(){
      //   $(this).hover(function(){
      //     $(this).toggle('slow', function(){
      //       $(this).toggleClass('hover-done')
      //     })
      //   })
      // })

      

      // Click function
      $("#tabs-nav li").click(function () {
        $("#tabs-nav li").removeClass("active");
        $(this).addClass("active");
        $(".tab-content").hide();

        var activeTab = $(this).find("a").attr("href");
        $(activeTab).fadeIn();

        $('.tab-slider-wrapper').slick('reinit');
        return false;
      });
      $(".tab-slider-wrapper").slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              infinite: true,
            },
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              dots: true,
            },
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              dots: true,
            },
          },
        ],
      });      
    },
  };
})(jQuery, Drupal, once);
