// fancybox
jQuery.fn.getTitle = function() { // Copy the title of every IMG tag and add it to its parent A so that fancybox can show titles
  var arr = jQuery("a.fancybox");
  jQuery.each(arr, function() {
    var title = jQuery(this).children("img").attr("title");
    jQuery(this).attr('title',title);
  })
}
var thumbnails = jQuery("a:has(img)").not(".nolightbox").filter( function() { return /\.(jpe?g|png|gif|bmp)$/i.test(jQuery(this).attr('href')) }); // Find .post>a>img and create fancybox image gallery
var posts = jQuery(".images"); //find post
posts.each(function() {
  jQuery(this).find(thumbnails).addClass("fancybox").attr("rel","fancybox"+posts.index(this)).getTitle()
});
jQuery("a.fancybox").fancybox({ // fancybox on
  helpers : {
    overlay : {
      locked : false // try changing to true and scrolling around the page
    }
  }
});

// slider top
$('.slider-top').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  autoplay: true,
  autoplaySpeed: 7000
});

// slider how-we
$('.slider-how-we').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
	autoplay: true,
	autoplaySpeed: 7000
});

// forms
function sendMyForm(id, myfile, mytext) {
  jQuery(document).ready(function($) {
    $('#'+id).submit(function() {
      var str = $(this).serialize();
      $.ajax({
        type: 'POST',
        url: '/mail/'+myfile+'.php',
        data: str,
        success: function(msg){
          if(msg == 'OK'){
            result = '<h3 class="centered">'+mytext+'</h3>';
            $('#'+id).html(result);
          }else{
            result = '<h3 class="centered">Система безопасности думает что вы робот, попробуйте стать человеком.</h3>';
            $('#'+id).html(result);
          }
        }
      });
      return false;
    });
  });
};

sendMyForm('saleform', 'call', 'Спасибо, скоро мы с Вами свяжемся!');
sendMyForm('saleform2', 'call', 'Спасибо, скоро мы с Вами свяжемся!');
sendMyForm('fformform', 'call', 'Спасибо, скоро мы с Вами свяжемся!');

// form title
function fform(title,mail,date) {
  $('.title-modal-form').html(title);
  if(mail){
    $('.mail-show').show();
  }else{
    $('.mail-show').hide();
  }
  if(date){
    $('.date-show').show();
  }else{
    $('.date-show').hide();
  }
}

// burger menu
$('.burger-menu').click(function () {
  $(this).toggleClass('active');
  $('.pro-menu').slideToggle();
});

// tabs
(function($) {
  $(function() {
    $('ul#nav-tab').on('click', 'li:not(.active)', function() {
      event.preventDefault(); // not go to tab content
      $(this)
        .addClass('active').siblings().removeClass('active')
        .closest('.command-container').find('.tabs-pane').removeClass('active').eq($(this).index()).addClass('active');
    });
  });
})(jQuery);

//scroll to top
// $(document).ready(function(){
//   $(window).scroll(function(){if ($(this).scrollTop() > 300){$('.scroll-to-top').fadeIn();}else{$('.scroll-to-top').fadeOut();}});
//   $('.scroll-to-top').click(function () {$('body,html').animate({scrollTop: 0}, 400); return false;});
// });