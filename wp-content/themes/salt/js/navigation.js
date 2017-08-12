/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */


	function openNav() {
		document.getElementById("mySidenav").style.width = "250px";
	}
				
	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
	}
				
	var open = document.getElementById("openNav");
	var close = document.getElementById("closeNav");
				
	open.addEventListener("click", openNav, false);
	close.addEventListener("click", closeNav, false);
