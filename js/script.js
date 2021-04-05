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

  AOS.init({
    duration: 800,
    easing: 'ease',
    once: false
  });
 
 jQuery(document).ready(function($) {
 
   "use strict";
 
   $(".loader").delay(1000).fadeOut("slow");
   $("#overlayer").delay(1000).fadeOut("slow");	
 
   var siteMenuClone = function() {
 
     $('.js-clone-nav').each(function() {
       var $this = $(this);
       $this.clone().attr('class', 'site-nav-wrap').appendTo('.site-mobile-menu-body');
     });
 
 
     setTimeout(function() {
       
       var counter = 0;
       $('.site-mobile-menu .has-children').each(function(){
         var $this = $(this);
         
         $this.prepend('<span class="arrow-collapse collapsed">');
 
         $this.find('.arrow-collapse').attr({
           'data-toggle' : 'collapse',
           'data-target' : '#collapseItem' + counter,
         });
 
         $this.find('> ul').attr({
           'class' : 'collapse',
           'id' : 'collapseItem' + counter,
         });
 
         counter++;
 
       });
 
     }, 1000);
 
     $('body').on('click', '.arrow-collapse', function(e) {
       var $this = $(this);
       if ( $this.closest('li').find('.collapse').hasClass('show') ) {
         $this.removeClass('active');
       } else {
         $this.addClass('active');
       }
       e.preventDefault();  
       
     });
 
     $(window).resize(function() {
       var $this = $(this),
         w = $this.width();
 
       if ( w > 768 ) {
         if ( $('body').hasClass('offcanvas-menu') ) {
           $('body').removeClass('offcanvas-menu');
         }
       }
     })
 
     $('body').on('click', '.js-menu-toggle', function(e) {
       var $this = $(this);
       e.preventDefault();
 
       if ( $('body').hasClass('offcanvas-menu') ) {
         $('body').removeClass('offcanvas-menu');
         $this.removeClass('active');
       } else {
         $('body').addClass('offcanvas-menu');
         $this.addClass('active');
       }
     }) 
 
     // click outside offcanvas
     $(document).mouseup(function(e) {
       var container = $(".site-mobile-menu");
       if (!container.is(e.target) && container.has(e.target).length === 0) {
         if ( $('body').hasClass('offcanvas-menu') ) {
           $('body').removeClass('offcanvas-menu');
         }
       }
     });
   }; 
   siteMenuClone();
   
   var siteCarousel = function () {
     if ( $('.nonloop-block-13').length > 0 ) {
       $('.nonloop-block-13').owlCarousel({
         center: false,
         items: 1,
         loop: true,
         stagePadding: 0,
         margin: 0,
         autoplay: true,
         smartSpeed: 800,
         nav: true,
         navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">'],
         responsive:{
           600:{
             margin: 0,
             nav: true,
             items: 2
           },
           1000:{
             margin: 0,
             stagePadding: 0,
             nav: true,
             items: 3
           },
           1200:{
             margin: 0,
             stagePadding: 0,
             nav: true,
             items: 4
           }
         }
       });
     }
 
     if ( $('.nonloop-block-14').length > 0 ) {
       $('.nonloop-block-14').owlCarousel({
         center: false,
         items: 1,
         loop: true,
         stagePadding: 0,
         margin: 0,
         autoplay: true,
         smartSpeed: 800,
         nav: true,
         navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">'],
         responsive:{
           600:{
             margin: 20,
             nav: true,
             items: 2
           },
           1000:{
             margin: 30,
             stagePadding: 0,
             nav: true,
             items: 3
           },
           1200:{
             margin: 30,
             stagePadding: 0,
             nav: true,
             items: 4
           }
         }
       });
     }
 
     $('.slide-one-item').owlCarousel({
       center: false,
       items: 1,
       loop: true,
       stagePadding: 0,
       margin: 0,
       autoplay: true,
       pauseOnHover: false,
       nav: true,
       navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">']
     });
 
     $('.slide-one-item-alt').owlCarousel({
       center: false,
       items: 1,
       loop: true,
       stagePadding: 0,
       margin: 0,
       smartSpeed: 1000,
       autoplay: true,
       pauseOnHover: true,
       onDragged: function(event) {
         console.log('event : ',event.relatedTarget['_drag']['direction'])
         if ( event.relatedTarget['_drag']['direction'] == 'left') {
           $('.slide-one-item-alt-text').trigger('next.owl.carousel');
         } else {
           $('.slide-one-item-alt-text').trigger('prev.owl.carousel');
         }
       }
     });
     $('.slide-one-item-alt-text').owlCarousel({
       center: false,
       items: 1,
       loop: true,
       stagePadding: 0,
       margin: 0,
       smartSpeed: 1000,
       autoplay: true,
       pauseOnHover: true,
       onDragged: function(event) {
         console.log('event : ',event.relatedTarget['_drag']['direction'])
         if ( event.relatedTarget['_drag']['direction'] == 'left') {
           $('.slide-one-item-alt').trigger('next.owl.carousel');
         } else {
           $('.slide-one-item-alt').trigger('prev.owl.carousel');
         }
       }
     });
 
     $('.custom-next').click(function(e) {
       e.preventDefault();
       $('.slide-one-item-alt').trigger('next.owl.carousel');
       $('.slide-one-item-alt-text').trigger('next.owl.carousel');
     });
     $('.custom-prev').click(function(e) {
       e.preventDefault();
       $('.slide-one-item-alt').trigger('prev.owl.carousel');
       $('.slide-one-item-alt-text').trigger('prev.owl.carousel');
     });
 
   };
   siteCarousel();
 
 });
 
 //uses classList, setAttribute, and querySelectorAll
 //if you want this to work in IE8/9 youll need to polyfill these
 (function() {
   var d = document,
     accordionToggles = d.querySelectorAll('.js-accordionTrigger'),
     setAria,
     setAccordionAria,
     switchAccordion,
     touchSupported = ('ontouchstart' in window),
     pointerSupported = ('pointerdown' in window);
   
   skipClickDelay = function(e) {
     e.preventDefault();
     e.target.click();
   }
   
   setAriaAttr = function(el, ariaType, newProperty) {
     el.setAttribute(ariaType, newProperty);
   };
   setAccordionAria = function(el1, el2, expanded) {
     switch (expanded) {
     case "true":
       setAriaAttr(el1, 'aria-expanded', 'true');
       setAriaAttr(el2, 'aria-hidden', 'false');
       break;
     case "false":
       setAriaAttr(el1, 'aria-expanded', 'false');
       setAriaAttr(el2, 'aria-hidden', 'true');
       break;
     default:
       break;
     }
   };
   //function
   switchAccordion = function(e) {
     e.preventDefault();
     var thisAnswer = e.target.parentNode.nextElementSibling;
     var thisQuestion = e.target;
     if (thisAnswer.classList.contains('is-collapsed')) {
     setAccordionAria(thisQuestion, thisAnswer, 'true');
     } else {
     setAccordionAria(thisQuestion, thisAnswer, 'false');
     }
     thisQuestion.classList.toggle('is-collapsed');
     thisQuestion.classList.toggle('is-expanded');
     thisAnswer.classList.toggle('is-collapsed');
     thisAnswer.classList.toggle('is-expanded');
   
     thisAnswer.classList.toggle('animateIn');
   };
   for (var i = 0, len = accordionToggles.length; i < len; i++) {
     if (touchSupported) {
     accordionToggles[i].addEventListener('touchstart', skipClickDelay, false);
     }
     if (pointerSupported) {
     accordionToggles[i].addEventListener('pointerdown', skipClickDelay, false);
     }
     accordionToggles[i].addEventListener('click', switchAccordion, false);
   }
   })();



   // Products Slick4 Image slide
	$('.products-slick').each(function () {
		var $this = $(this),
			$nav = $this.attr('data-nav');

		$this.slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			infinite: true,
			speed: 1000,
			dots: false,
			arrows: true,
			appendArrows: $nav ? $nav : false,
			responsive: [{
				breakpoint: 1028,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			},
			{
				breakpoint: 770,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			},
			]
		});
	});