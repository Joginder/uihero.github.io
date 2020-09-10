(function ($) {
  $(document).ready(function () {

    $('.slick-carousel').slick({
      dots: true,
      infinite: true,
      speed: 1000,
      responsive: []
    });

    $('.search-block-form label').on('click', function() {
      $(this).parent().toggleClass('open');
    }); 

  }); 
}(jQuery));
