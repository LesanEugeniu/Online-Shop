var initialSrc = "../assets/iPadPro-close.png";
var scrollSrc = "../assets/iPadpro-bkg.gif";
let k=0;
$(window).scroll(function() {
   var value = $(this).scrollTop();
   if (value > 100 && k==0){
      $(".iPadPro-Image").attr("src", scrollSrc);
      k++;
    }
});