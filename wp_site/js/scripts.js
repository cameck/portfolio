jQuery(document).ready(function(){
  // Add smooth scrolling to all links
  jQuery(".anchor-link").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    jQuery('html, body').animate({
      scrollTop: jQuery(hash).position().top
    }, 800, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
    });
  });
  // Custom Functionality to hide & show form when Response Message Appears
  function scrollToContact() {
    var topLocation =  $('#contact').position().top;
    $('html,body').animate( { scrollTop: topLocation} , 1000);
  }

  $.hideForm = function() {
    jQuery('#ninja_forms_form_5').hide();
    jQuery('#contact-header h3').hide();
    scrollToContact();
  }
  $.showForm = function() {
    jQuery('#ninja_forms_form_5').show();
    jQuery('#contact-header h3').show();
  }

  var toggleForm = function() {

    if ( document.getElementsByClassName('ninja-forms-success-msg').length ) {
      $.hideForm();
    } else {
      $.showForm();
    }
  };

  toggleForm()
});
