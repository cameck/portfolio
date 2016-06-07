jQuery(document).ready(function(){
// Add smooth scrolling to all links
jQuery(".anchor-link").on('click', function(event) {

// Prevent default anchor click behavior
event.preventDefault();

// Store hash
var hash = this.hash;

// Using jQuery's animate() method to add smooth page scroll
// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
jQuery('html, body').animate({
  scrollTop: jQuery(hash).position().top
}, 800, function(){

  // Add hash (#) to URL when done scrolling (default click behavior)
  window.location.hash = hash;
});
});
});