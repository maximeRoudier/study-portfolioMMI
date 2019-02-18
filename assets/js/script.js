// Script Loader

$( window ).on( "load", function() {

  var time = setTimeout(fade, 2000);

  function fade() {
    var time = new Date();
    $('#loader').fadeOut();
  }
});


//      Script Menu

var menuClick = 1;

$(".menu_burger").click(function() {
  $('.menu_burger span').toggleClass("croiser");
  if(menuClick == 1){
    $('.menu_lien').css('display', 'block');
    $('.menu').css('background-color', 'white');
    $('.menu').css('position', 'fixed');
    $('.menu').css('z-index', '20');
    menuClick++;
  }
  else{
    $('.menu_lien').css('display', 'none');
    $('.menu').css('background-color', 'transparent');
    $('.menu').css('position', 'static');
    menuClick--;
  }
});

$(".menu_lien a").click(function() {
  $('.menu_lien').css('display', 'none');
  $('.menu').css('background-color', 'transparent');
  $('.menu_burger span').removeClass("croiser");
  $('.menu').css('position', 'static');
  menuClick--;
});

//      Script Dyslexique

var DyslexClick=0;

$("#dis").click(function(){
  if(DyslexClick == 0){
    $("body").toggleClass("dyslex");
    $("#dis").text('Version dyslexique activée');
    DyslexClick++;
  }
  else{
    $("body").removeClass("dyslex");
    $("#dis").text('Version dyslexique non-activée');
    DyslexClick--;
  }
})


//        Script Plus / Moins Police

if(typeof localStorage!='undefined'){
  var taillePolice = localStorage.getItem('taille');
  if(taillePolice!=null){
    taillePolice = parseInt(taillePolice);
  }
  else{
    taillePolice = 16;
  }
  localStorage.setItem('taille',taillePolice);
  var baliseHTML = document.getElementsByTagName('html');
  baliseHTML[0].style = 'font-size:'+ taillePolice + 'px;';
}
else{
  alert("localStorage n\'est pas supporté");
}

document.getElementById("plus").addEventListener("click",function(){
  taillePolice = localStorage.getItem('taille');
  if(taillePolice <= 32){
    taillePolice = parseInt(taillePolice) + 2;
    localStorage.setItem('taille',taillePolice);
    var baliseHTML = document.getElementsByTagName('html');
    baliseHTML[0].style = 'font-size:' + taillePolice + 'px;';
    console.log(taillePolice);
  }
  else{
    alert('Vous avez la taille maximale');
  }
});

document.getElementById("moins").addEventListener("click",function(){
  taillePolice = localStorage.getItem('taille');
  if(taillePolice >= 10){
    taillePolice = parseInt(taillePolice) - 2;
    localStorage.setItem('taille',taillePolice);
    var baliseHTML = document.getElementsByTagName('html');
    baliseHTML[0].style = 'font-size:' + taillePolice + 'px;';
    console.log(taillePolice);
  }
  else{
    alert('Vous avez la taille minimale');
  }
});


// Script bloc Travaux

$(".travaux_btn").click(function() {
    var clickedBouton = $(this).attr('id');
    if(clickedBouton == 'left_btn'){
      $('.left_btn-retour').css('display', 'block'),
      $('.middle_btn-retour').css('display', 'none'),
      $('.right_btn-retour').css('display', 'none'),
      $('.left_btn').css('display', 'none'),
      $('.middle_btn').css('display', 'block'),
      $('.right_btn').css('display', 'block'),
      $('.left_img').css('opacity','0'),
      $('.middle_img').css('opacity','1'),
      $('.right_img').css('opacity','1'),
      $('.travaux_left h3').css('opacity','0');
      $('.travaux_right h3').css('opacity','1');
      $('.travaux_middle h3').css('opacity','1');
    }
    else if(clickedBouton == 'middle_btn'){
      $('.middle_btn-retour').css('display', 'block'),
      $('.left_btn-retour').css('display', 'none'),
      $('.right_btn-retour').css('display', 'none'),
      $('.middle_btn').css('display', 'none'),
      $('.left_btn').css('display', 'block'),
      $('.right_btn').css('display', 'block'),
      $('.middle_img').css('opacity','0'),
      $('.left_img').css('opacity','1'),
      $('.right_img').css('opacity','1'),
      $('.travaux_middle h3').css('opacity','0');
      $('.travaux_left h3').css('opacity','1');
      $('.travaux_right h3').css('opacity','1');
    }
    else if(clickedBouton == 'right_btn'){
      $('.right_btn-retour').css('display', 'block'),
      $('.left_btn-retour').css('display', 'none'),
      $('.middle_btn-retour').css('display', 'none'),
      $('.right_btn').css('display', 'none'),
      $('.middle_btn').css('display', 'block'),
      $('.left_btn').css('display', 'block'),
      $('.right_img').css('opacity','0'),
      $('.left_img').css('opacity','1'),
      $('.middle_img').css('opacity','1'),
      $('.travaux_right h3').css('opacity','0');
      $('.travaux_middle h3').css('opacity','1');
      $('.travaux_left h3').css('opacity','1');
    }
})

$(".travaux_btn-retour").click(function() {
    var clickedBoutonRetour = $(this).attr('id');
    if(clickedBoutonRetour == 'left_btn-retour'){
      $('.left_btn').css('display', 'block'),
      $('.left_btn-retour').css('display', 'none'),
      $('.left_img').css('opacity','1'),
      $('.travaux_left h3').css('opacity','1');
    }
    else if(clickedBoutonRetour == 'middle_btn-retour'){
      $('.middle_btn').css('display', 'block'),
      $('.middle_btn-retour').css('display', 'none'),
      $('.middle_img').css('opacity','1'),
      $('.travaux_middle h3').css('opacity','1');
    }
    else if(clickedBoutonRetour == 'right_btn-retour'){
      $('.right_btn').css('display', 'block'),
      $('.right_btn-retour').css('display', 'none'),
      $('.right_img').css('opacity','1'),
      $('.travaux_right h3').css('opacity','1');
    }
})

// Script Menu Scroll

jQuery(function($){
   var a = sessionStorage.getItem('anchor'), yPos, yInitPos, target;

   function scrolling(href){

      yInitPos = $(window).scrollTop();
      window.location.hash = href;
      $(window).scrollTop(yInitPos);
      target = ($(href + ":first"));
      if (target.length == 0) {
         target = ($("a[name=" + href.replace(/#/gi,"") + "]:first"))
      }
      if (target.length == 1) {
         yPos = target.offset().top
         $('html,body').animate({ scrollTop: yPos}, 1000);
      }
   }
   if(a){ var href = a; scrolling(a); sessionStorage.removeItem('anchor'); }

   $("a").click(function (e) {

      var href = $(this).attr('href'), t = new RegExp('#.*'), anchor = new RegExp('^#.*');
      if(href.match(anchor)){ e.preventDefault(); scrolling(href); }else if(href.match(t)){
         e.preventDefault();
         sessionStorage.setItem('anchor', href.match(t));
         location.href = href.replace(/#.*/, '');

      }
   });
});

// Script Copier Contact Mail

var $btn=$('.linkCopier');

$btn.click (function() {
  var $cachedecopi = $( '<textarea>' );
  $( 'body' ).append( $cachedecopi );
  $cachedecopi.val( $( '#copie_adresse' ).text()).select();
  document.execCommand( 'copy' );
});
