//Green sock animations
TweenMax.staggerFrom(".panel", 2,{opacity:0,},1);


$(document).ready(function(){
//carousel animation when slide loads
$("#myCarousel").on('slid.bs.carousel', function () {
TweenMax.to(".back",1,{opacity:0.8, delay:0});
TweenMax.from(".cap2",2,{opacity:0,y:500}); 
TweenMax.from(".cap1",2,{opacity:0,x:-500}); 
TweenMax.to(".back",1,{opacity:1, delay:2});

});
/*
$("#myCarousel").on('slide.bs.carousel', function () {
TweenMax.to(".back",1,{opacity:0.8, delay:0});
});
*/
});





