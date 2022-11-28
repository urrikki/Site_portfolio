$(document).ready(function(){
  $('.sidenav').sidenav();
  $('.parallax').parallax();
  $('.tabs').tabs();
 });

 $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true,
  });

setInterval(function(){
  $('.carousel.carousel-slider').carousel('next');
},6000);

$(document).ready(function(){
  $('.modal').modal();
});

$(".easter-eggk").on('click',function(){
  window.location.href = "https://youtu.be/yX57O-2BxLU?t=2";
});

$(".easter-eggd").on('click',function(){
$(".easter-eggd").attr("src","source/img/zawarudo.gif" )
});

$(".easter-eggj").on('click',function(){
$(".easter-eggj").attr("src","source/img/julius.gif" )
});

$(".easter-egga").on('click',function(){
$(".easter-egga").attr("src","source/img/chadasta.jpg" )
});
