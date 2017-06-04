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
      if($(this).scrollTop() > $(window).height()/2.2) $('.logo-wrapper').fadeOut('slow');
      if($(this).scrollTop() < $(window).height()/2.2) $('.logo-wrapper').fadeIn('slow');
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
      slideSpeed : 300,
      autoPlay : 5000,
      stopOnHover : false,
      paginationSpeed : 400, 
      singleItem:true
    });

    $("#products-slider").owlCarousel({
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      autoPlay : 5000,
      items:3,
      stopOnHover : false,
      paginationSpeed : 400,
      singleItem:true
    });

    $("#clients-logo").owlCarousel({
      navigation : false, // Show next and prev buttons,
      pagination: false,
      slideSpeed : 300,
      autoPlay : 5000,
      items:4,
      stopOnHover : false,
      paginationSpeed : 400
    });


    //Counter Up
    $('.counter').counterUp({
        delay: 5,
        time: 800
    });



    // Ajax working contact form
    $("#submit").click(function() {
        //get input field values
        var user_name       = $('input[name=name]').val();
        var user_email      = $('input[name=email]').val();
        var user_phone      = $('input[name=phone]').val();
        var user_message    = $('textarea[name=message]').val();
        var post_data;
        var output;

        //simple validation at client's end
        //we simply change border color to red if empty field using .css()
        var proceed = true;
        if(user_name==""){
            $('input[name=name]').css('border-color','red');
            proceed = false;
        }
        if(user_email==""){
            $('input[name=email]').css('border-color','red');
            proceed = false;
        }
        if(user_phone=="") {
            $('input[name=phone]').css('border-color','red');
            proceed = false;
        }
        if(user_message=="") {
            $('textarea[name=message]').css('border-color','red');
            proceed = false;
        }

        //everything looks good! letsproceed
        if(proceed)
        {
            //data to be sent to server
            post_data = {'userName':user_name, 'userEmail':user_email, 'userPhone':user_phone, 'userMessage':user_message};

            //Ajax post data to server
            $.post('include/contact.php', post_data, function(response){

                //load json data from server and output message
                if(response.type == 'error')
                {
                    output = '<div class="error text-center">'+response.text+'</div>';
                }else{

                    output = '<div class="success text-center">'+response.text+'</div>';

                    //reset values in all input fields
                    $('#contact_form input').val('');
                    $('#contact_form textarea').val('');
                }

                $("#form_result").hide().html(output).slideDown();
            }, 'json');

        }
    });



});
