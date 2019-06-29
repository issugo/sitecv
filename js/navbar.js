function animateHamburger() {
  $('#burger-button').toggleClass('open');
/*animation from burger to X*/
    if (document.getElementById('sidebar').style.opacity == "0") {
        document.getElementById('sidebar').style.opacity = "1";
    } else {
        document.getElementById('sidebar').style.opacity = "0";
    }
}

function slideMenu(){
  $('.navbar').toggleClass('open');
  /*animation for slide down menu*/
}
$('#burger-button').click(function(){
  animateHamburger();
  slideMenu(); /*attaching click handler to the burger button*/
});