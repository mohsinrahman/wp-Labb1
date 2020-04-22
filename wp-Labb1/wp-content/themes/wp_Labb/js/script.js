(function($) {
  // Menu icon
  $(".menu-icon").click(function() {
    $(this).toggleClass("fa-bars fa-close");
    $("#nav").slideToggle();
  });

  // Search icon
  $(".fa-search").click(function() {
    $(".mobile-search").slideToggle();
  });
})(jQuery);

//FlexSlider by woocommerce
$(window).on("load", function() {
  $(".flexslider").flexslider({
    animation: Modernizr.touch ? "slide" : "fade"
  });
});
