/** sticky Nav **/

$(document).ready(function() {
var stickyNavTop = $('#navigation').offset().top;
 
var stickyNav = function(){
var scrollTop = $(window).scrollTop();
      
if (scrollTop > stickyNavTop) { 
    $('#navigation').addClass('top-nav-fixed');
} else {
    $('#navigation').removeClass('top-nav-fixed'); 
}
};
 
stickyNav();
 
$(window).scroll(function() {
    stickyNav();
});
});

/** sticky Nav **/

//equal height blocks
equalheight = function(container){

var currentTallest = 0,
     currentRowStart = 0,
     rowDivs = new Array(),
     $el,
     topPosition = 0;
 $(container).each(function() {

   $el = $(this);
   $($el).height('auto')
   topPostion = $el.position().top;

   if (currentRowStart != topPostion) {
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }
     rowDivs.length = 0; // empty the array
     currentRowStart = topPostion;
     currentTallest = $el.height();
     rowDivs.push($el);
   } else {
     rowDivs.push($el);
     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
  }
   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
     rowDivs[currentDiv].height(currentTallest);
   }
 });
}

$(document).ready(function() {
  equalheight('.equal-height');
});

$(window).load(function() {
  equalheight('.equal-height');
});

$(window).resize(function(){
  equalheight('.equal-height');
});


Drupal.behaviors.sidebarLeft = function (context) {
  if ($("#left-staff-experts").length > 0){
    $(".left-news").detach().insertAfter('.left-our-expert');
  }
};


// slideshow carousel mouse hover 
$(document).ready(function() {
  $('.carousel-indicators li').on('mouseover',function(){
      $(this).trigger('click');
  })
  
  $('.link-txt').on('click',function(){
    var url= $(this).attr('href');
    //location.href=url
    window.open(url, '_blank');
})
});