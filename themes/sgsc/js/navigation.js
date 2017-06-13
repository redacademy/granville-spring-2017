// hide or display the mobile menu

/* let's consider we want to toggle the menu displayed at 800 screen width, here's what we need to do (you can accordingly replace 800 with to a screen width you would need)..*/
function toggle() {
    if ( jQuery( window ).width() >= 800 ) {
      jQuery( '.nav.mobile-menu' ).hide();
      jQuery( '.nav.desktop-menu' ).show();
    } else {
      jQuery( '.nav.desktop-menu' ).hide();
      jQuery( '.nav.mobile-menu' ).show();
    }
}

// on page load set the menu display initially
toggle();

// toggle the menu display on browser resize
jQuery( window ).resize( function () {
    toggle();
} );






// ( function() {
// 	var nav = document.getElementById( 'site-navigation' ), button, menu;
// 	if ( ! nav ) {
// 		return;
// 	}

// 	button = nav.getElementsByTagName( 'button' )[0];
// 	menu   = nav.getElementsByTagName( 'ul' )[0];
// 	if ( ! button ) {
// 		return;
// 	}

// 	// Hide button if menu is missing or empty.
// 	if ( ! menu || ! menu.childNodes.length ) {
// 		button.style.display = 'none';
// 		return;
// 	}

// 	button.onclick = function() {
// 		if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
// 			menu.className = 'nav-menu';
// 		}

// 		if ( -1 !== button.className.indexOf( 'toggled-on' ) ) {
// 			button.className = button.className.replace( ' toggled-on', '' );
// 			menu.className = menu.className.replace( ' toggled-on', '' );
// 		} else {
// 			button.className += ' toggled-on';
// 			menu.className += ' toggled-on';
// 		}
// 	};
// } )(jQuery);

