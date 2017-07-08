$(function(){
    "use strict";
    // Full screen pre loader
    $(window).load(function(){
        $("#pre-loader").delay(500).fadeOut(2000);
        $(".preload-logo").addClass('zoomOutUp');
        $(".loader").addClass('zoomOutDown');
    });


    //Logo fadeIn fadeOut on
    $(window).scroll(function(){
      if($(this).scrollTop() > $(window).height()/2.2) $('.header-barlist').addClass( "myClass" );
      if($(this).scrollTop() < $(window).height()/2.2) $('.header-barlist').removeClass("myClass").fadeIn('slow');
    });

    //Using the smooth scroll for smooth navigation
    smoothScroll.init({
        speed: 500, // Integer. How fast to complete the scroll in milliseconds
        easing: 'easeInOutCubic', // Easing pattern to use
        updateURL: false, // Boolean. Whether or not to update the URL with the anchor hash on scroll
        offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
        callbackBefore: function ( toggle, anchor ) {}, // Function to run before scrolling
        callbackAfter: function ( toggle, anchor ) {} // Function to run after scrolling
    });

    //wow animation by using with animate css
    var isiPad = (navigator.userAgent.match(/iPad/i) != null);
    if (($.browser.mobile)||(isiPad)) {
        // disable animation on mobile
        $("body").removeClass("wow");
    }
    else{
        var wow = new WOW(
          {
            boxClass:     'wow',
            animateClass: 'animated',
            offset:       0,
            mobile:       true
          }
        );
        wow.init();
    }

    // Full screen navigations
    var triggerBttn = document.getElementById( 'trigger-navbar' ),
        navbar = document.querySelector( 'section.navbar' ),
        closeBttn = navbar.querySelector( 'a.navbar-close' ),
        navClick = navbar.querySelector( 'section.navbar nav ul li a' ),
        transEndEventNames = {
            'WebkitTransition': 'webkitTransitionEnd',
            'MozTransition': 'transitionend',
            'OTransition': 'oTransitionEnd',
            'msTransition': 'MSTransitionEnd',
            'transition': 'transitionend'
        },
        transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
        support = { transitions : Modernizr.csstransitions };

        function toggleOverlay() {
        if( classie.has( navbar, 'open' ) ) {
            classie.remove( navbar, 'open' );
            classie.add( navbar, 'close' );
            var onEndTransitionFn = function( ev ) {
                if( support.transitions ) {
                    if( ev.propertyName !== 'visibility' ) return;
                    this.removeEventListener( transEndEventName, onEndTransitionFn );
                }
                classie.remove( navbar, 'close' );
            };
            if( support.transitions ) {
                navbar.addEventListener( transEndEventName, onEndTransitionFn );
            }
            else {
                onEndTransitionFn();
            }
        }
        else if( !classie.has( navbar, 'close' ) ) {
            classie.add( navbar, 'open' );
        }
    }

    triggerBttn.addEventListener( 'click', toggleOverlay );
    closeBttn.addEventListener( 'click', toggleOverlay );
    $('section.navbar nav ul li a').click(function(){
        toggleOverlay();
    });

    //prepare video
    $('.video').height($(window).height());
    $('.home-text').css('top',$(window).height()/4+'px');
    $('.home-text-2').css('top',$(window).height()/4.5+'px');

    $(window).resize(function() {
        $('.video').height($(window).height());
        $('.home-text').css('top',$(window).height()/4+'px');
        $('.home-text-2').css('top',$(window).height()/4.5+'px');
    });
    $('.video .cont').addClass('visible');





    /*/ grid gallery (Portfolio)
    new CBPGridGallery( document.getElementById( 'grid-gallery' ) );*/

    // Carousel
    $("#home-text-slider").owlCarousel({
      navigation : true, // Show next and prev buttons
      slideSpeed : 500,
      autoPlay : 5000,
      stopOnHover : false,
      paginationSpeed : 400,
      loop: true,
      items:1,
      dots:false,
    });

    $("#products-slider").owlCarousel({
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      autoplay:true,
       autoplayTimeout:1000,
       autoplayHoverPause:true,
      stopOnHover : false,
      loop: true,
      dots:true,
      responsive:{
              0:{
                  items:1,
                  responsiveClass:true,
              },
              600:{
                  items:3
              },
              1000:{
                  items:3
              }
          }
    });

    $("#clients-logo").owlCarousel({
      navigation : false, // Show next and prev buttons,
      pagination: false,
      slideSpeed : 300,
      autoplay:true,
       autoplayTimeout:1000,
       autoplayHoverPause:true,
      margin:20,
      stopOnHover : false,
      paginationSpeed : 400,
      dots:false,
      loop: true,
      responsive:{
              0:{
                  items:1,
                  responsiveClass:true,
              },
              600:{
                  items:3
              },
              1000:{
                  items:5
              }
          }
    });


    //Counter Up
    $('.counter').counterUp({
        delay: 5,
        time: 800
    });


    $('form.material').materialForm();




});
