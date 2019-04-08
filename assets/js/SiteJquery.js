$(document).ready(function() {
  // Menü Aç Kapat
  $('#menuOpen').click(function() {
    $('#leftSide').toggleClass('leftSideOpen');
    $('#rightSide').toggleClass('rightSideMargin');
  });
  // submenu
  $(function() {
    $('#leftSide ul li, #rightSide ul li').click(function(e) {
      e.stopPropagation();
      var $el = $('.sub-menu', this);
      $('.sub-menu').not($el).slideUp();
      $el.stop(true, true).slideToggle();
    });
  });
  // ARama Açtırma
  $('#search').click(function(){
    $('#searchInner').css({
      "visibility" : "visible",
      "opacity"   : "1"
    });
  });
  // ARama kapattırma
  $('#closesearchInner').click(function(){
    $('#searchInner').css({
      "visibility" : "hidden",
      "opacity"   : "0"
    });
  });
  // paylas menusu
  $(function() {
    $('.postShare').click(function(e) {
      e.stopPropagation();
      var $el = $('.socialOpen', this);
      $('.socialOpen').not($el).slideUp();
      $el.stop(true, true).slideToggle();
    });
  }); 
  // fixed menu
  var nav = $('#rightHeader');
  $(window).scroll(function () {
    if ($(this).scrollTop() > 0) {
        nav.addClass("fixedMenu");
    } else {
        nav.removeClass("fixedMenu");
    }
  });
});
