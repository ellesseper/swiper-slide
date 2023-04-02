jQuery.noConflict();

// Mobile Navigation Function
M.AutoInit();

jQuery(document).ready(function() {
  // initializing the .sidenav element
  var elem = document.querySelector('.sidenav');
  var instance = M.Sidenav.init(elem);


  // initializing the .sidenav element and modifying its options
  var elem = document.querySelector('.sidenav');
  var instance = M.Sidenav.init(elem, {
    inDuration: 350,
    outDuration: 350,
    edge: 'right' //or left
  });

  var gallery = new Swiper(".myswiper", {
    slidesPerView: 4,
    centeredSlides: true,
    loop: true,
    autoplay : {
      enabled: true,
      delay: 3000,
      disableOnInteraction: false
    },
    speed: 1200,
  });

  // Function to get the child before the previous slides
  childBeforePrev();
  gallery.on("slideChangeTransitionStart", function () {
    childBeforePrev();
  });
});

function childBeforePrev(){
  jQuery(".swiper-slide").each(function() {
   if(jQuery(this).hasClass('swiper-slide-prev')){
     jQuery(this).prev('div').addClass('childBeforePrev');
     jQuery(this).prev('div').siblings().removeClass('childBeforePrev');
   }
 });
}



