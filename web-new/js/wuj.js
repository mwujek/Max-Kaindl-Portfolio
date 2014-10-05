function showContent(){
    $(".work-text").fadeIn(800);
}

function slideSwitch() {
    var active = $('li.active-ss');
    var nextSlide = active.next();
    var firstSlide = $('#first');
    var lastSlide = $('#third');

    if(lastSlide.hasClass('active-ss') ===true){
        active.removeClass('active-ss');
        firstSlide.addClass('active-ss');

    } else {
        active.removeClass('active-ss');
        nextSlide.addClass('active-ss');
    }
}

$(document).ready(function() {
    var redirect;
    $(".main-content").css("display", "none");
    $(".main-content").fadeIn(800);
    $("nav a:not('#work-button')").click(function(e) {
        redirect = $(this).attr("href");
        e.preventDefault();
        $(".main-content").fadeOut(666, function() {
            document.location.href = redirect;
        });
    });



    $(".typed-title").typed({
        strings: ["Hi, I'm Max.^1000\nI make traditional pottery in the Bay Area.^2000"],
        typeSpeed: 5,
        startDelay: 1000, // time before typing starts
        callback: function(){
            //window.alert('done!');
            $(".typed-title-2").typed({
                strings: ["Enjoy looking through my site!^2000"],
                typeSpeed: 5,
        startDelay: 0, // time before typing starts
        callback: function(){
            $('.bg-image').addClass('show-bg');
            $('#introdution-message-2').addClass('make-text-white');
            $('nav > ul > li > a, .sub-menu > li > a').addClass('make-text-white');
            $('.typed-cursor').css('display','none');
        }
    });
        }
    });


    $(".typed-title-bio").typed({
        strings: ["A little bit about me^2000"],
        typeSpeed: 5,
        startDelay: 1000, // time before typing starts
        callback: function(){
            $('.typed-cursor').css('display','none');
        }
    });

// teapot section

$(".typed-subtitle-teapots").typed({
    strings: ["This could be a short description of your work with teapots (about 1-3 sentences)^1000"],
    typeSpeed: 0,
        startDelay: 1000, // time before typing starts
        callback: function(){
            $('.typed-cursor').css('display','none');
            showContent();
        }
    });


// jugs section

$(".typed-subtitle-jugs").typed({
    strings: ["This could be a short description of your work with jugs^1000"],
    typeSpeed: 0,
        startDelay: 1000, // time before typing starts
        callback: function(){
            $('.typed-cursor').css('display','none');
            showContent();
        }
    });

// drinking vessels section

$(".typed-subtitle-drinking").typed({
    strings: ["This could be a short description of your work with drinking vessels^1000"],
    typeSpeed: 0,
        startDelay: 1000, // time before typing starts
        callback: function(){
            $('.typed-cursor').css('display','none');
            showContent();
        }
    });
//blog section


$(".typed-subtitle-blog").typed({
    strings: ["I like to write about these things from time to time^1000"],
    typeSpeed: 0,
        startDelay: 1000, // time before typing starts
        callback: function(){
            $('.typed-cursor').css('display','none');
            showContent();
        }
    });





// accordion menu


var $subMenuButton = $('#work-button');
var $subMenu = $('.sub-menu');
var $navLinks = $('#navigation-list li a');

$navLinks.on('click', function(){
    var $element = $(this);
    var opacity = $subMenu.css('opacity');
    if ($element.hasClass('active-link')){
            // window.alert('already active!');
        } else{
            // window.alert('not active!');
            $navLinks.removeClass('active-link'); // remove all styles first, then wait to add new active state
            setTimeout(function() {
              $element.addClass('active-link');
          }, 500);
        }
        

        

        if($element.is('nav > ul > li > a:not(#work-button)')){
            //window.alert('not work button!');
            $subMenu.removeClass('visible-content');
            setTimeout(function() {
              $subMenu.removeClass('open-sub-menu');
              //$element.removeClass('active-link');
          }, 200);
        }

        if($element.is($subMenuButton)){

            if ( opacity === '0' ) {
            //window.alert('opening');
            $subMenu.addClass('open-sub-menu');
            setTimeout(function() {
              $subMenu.addClass('visible-content');
              //$element.addClass('active-link');
          }, 200);
        }else{
            //window.alert('closing');
            $subMenu.removeClass('visible-content');
            setTimeout(function() {
              $subMenu.removeClass('open-sub-menu');
              $subMenuButton.removeClass('active-link');
          }, 200);
        }
    }
});





        //slideshow for home page
        $(function() {
            setInterval(slideSwitch, 4000);
        });

    });