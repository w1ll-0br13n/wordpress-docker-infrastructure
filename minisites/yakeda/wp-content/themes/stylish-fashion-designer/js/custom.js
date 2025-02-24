// Menu
function stylish_fashion_designer_openNav() {
  jQuery(".sidenav").addClass('show');
}
function stylish_fashion_designer_closeNav() {
  jQuery(".sidenav").removeClass('show');
}

( function( window, document ) {
  function stylish_fashion_designer_keepFocusInMenu() {
    document.addEventListener( 'keydown', function( e ) {
      const stylish_fashion_designer_nav = document.querySelector( '.sidenav' );

      if ( ! stylish_fashion_designer_nav || ! stylish_fashion_designer_nav.classList.contains( 'show' ) ) {
        return;
      }
      const elements = [...stylish_fashion_designer_nav.querySelectorAll( 'input, a, button' )],
        stylish_fashion_designer_lastEl = elements[ elements.length - 1 ],
        stylish_fashion_designer_firstEl = elements[0],
        stylish_fashion_designer_activeEl = document.activeElement,
        tabKey = e.keyCode === 9,
        shiftKey = e.shiftKey;

      if ( ! shiftKey && tabKey && stylish_fashion_designer_lastEl === stylish_fashion_designer_activeEl ) {
        e.preventDefault();
        stylish_fashion_designer_firstEl.focus();
      }

      if ( shiftKey && tabKey && stylish_fashion_designer_firstEl === stylish_fashion_designer_activeEl ) {
        e.preventDefault();
        stylish_fashion_designer_lastEl.focus();
      }
    } );
  }
  stylish_fashion_designer_keepFocusInMenu();
} )( window, document );

// scroll
jQuery(document).ready(function () {
	jQuery(window).scroll(function () {
	    if (jQuery(this).scrollTop() > 0) {
	        jQuery('#scrollbutton').fadeIn();
	    } else {
	        jQuery('#scrollbutton').fadeOut();
	    }
	});
	jQuery(window).on("scroll", function () {
	   document.getElementById("scrollbutton").style.display = "block";
	});
	jQuery('#scrollbutton').click(function () {
	    jQuery("html, body").animate({
	        scrollTop: 0
	    }, 600);
	    return false;
	});
});

// preloader
jQuery(function($){
    setTimeout(function(){
        $(".frame").delay(1000).fadeOut("slow");
    });
});

// Search
var stylish_fashion_designer_Keyboard_loop = function (elem) {
    var stylish_fashion_designer_tabbable = elem.find('select, input, textarea, button, a').filter(':visible');

    var stylish_fashion_designer_firstTabbable = stylish_fashion_designer_tabbable.first();
    var stylish_fashion_designer_lastTabbable = stylish_fashion_designer_tabbable.last();
    /*set focus on first input*/
    stylish_fashion_designer_firstTabbable.focus();

    /*redirect last tab to first input*/
    stylish_fashion_designer_lastTabbable.on('keydown', function (e) {
        if ((e.which === 9 && !e.shiftKey)) {
            e.preventDefault();
            stylish_fashion_designer_firstTabbable.focus();
        }
    });

    /*redirect first shift+tab to last input*/
    stylish_fashion_designer_firstTabbable.on('keydown', function (e) {
        if ((e.which === 9 && e.shiftKey)) {
            e.preventDefault();
            stylish_fashion_designer_lastTabbable.focus();
        }
    });

    /* allow escape key to close insiders div */
    elem.on('keyup', function (e) {
        if (e.keyCode === 27) {
            elem.hide();
        }
        ;
    });
};

jQuery('document').ready(function($){
    $('.main-search span a').click(function(){
        $(".searchform_page").slideDown(500);
        stylish_fashion_designer_Keyboard_loop($('.searchform_page'));
    });

    $('.close a').click(function(){
        $(".searchform_page").slideUp(500);
    });
}); 

// Title Color
jQuery(document).ready(function () {
  jQuery("#slider h1.slider-title").each(function () {
    var t = jQuery(this).text().trim();
    var splitT = t.split(" ");

    if (splitT.length > 1) {
      var lastWord = splitT.pop(); // Remove and store the last word
      var newText = splitT.join(" ") + " <span class='last-word'>" + lastWord + "</span>"; // Reconstruct text
      jQuery(this).html(newText);
    }
  });
});
