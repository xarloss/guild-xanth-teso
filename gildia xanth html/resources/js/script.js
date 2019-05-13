
$(document).ready(function() {
    /* FOR THE STICKY NAVIGATION */
   var waypoint = $('.js--section--o--nas').waypoint(function(direction) {

  if(direction == "down") {

            $('nav').addClass('sticky');

        } else {

            $('nav').removeClass('sticky');

        }
}, 
    {

  offset: '60px;'
   });
    
    
    /* SCROLL ON BUTTONS */
    $('.js--scroll-to-jakdolaczyc').click(function() {
        $('html, body').animate({scrollTop: $('.js--scroll-to-join').offset().top}, 1000);
    });
     
    /* NAVIGATION SCROLL */
    
    // Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
    
    
    /* ANIMATIONS */
    
    $('.js--wp-1').waypoint(function(direction){
       $('.js--wp-1').addClass('animated jackInTheBox'); 
        
    }, {
        offset: ('60%;')
    });
    
    
        $('.js--wp-2').waypoint(function(direction){
       $('.js--wp-2').addClass('animated rollIn'); 
        
    }, {
        offset: ('60%;')
    });
                            
var typed = new Typed('.typed', {
  strings: ["First sentence", "Witaj wędrowcze!", "Właśnie zawędrowałeś do ^1500 dziwengo", "Właśnie zawędrowałeś do wspaniałego rodu!", "Zapraszam do Great House Xanth!"],
    typeSpeed: 50,
    startDelay: 700,  
    backDelaY: 200,
    backSpeed: 25,
    showCursor: false
	});
    
    
    /* mobile navigation */
    
    $('.js--nav-icon').click(function(){
        var nav = $('.js--main-nav');
        var icon =$('.js--nav-icon i');
        nav.slideToggle(200)
        if (icon.hasClass('ion-navicon-round')) {
            icon.addClass('ion-close-round');
            icon.removeClass('ion-navicon-round')
        } else {
            icon.addClass('ion-navicon-round');
            icon.removeClass('ion-close-round')
        }
        });
});
    
