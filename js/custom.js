// On document ready:

( function( $ ) {

	// Instantiate MixItUp:

	$('#portfolio-items').mixItUp();
     
  
  var testimonial = $("#testimonial-carousel");
 
  testimonial.owlCarousel({
    singleItem : true, // Display only one item
    navigation : false, // Show next and prev buttons
    navigationText : ["&lt;","&gt;"],
    pagination : true, //Show pagination
    paginationSpeed : 1000, // Pagination speed in milliseconds
    slideSpeed : 1000, // Slide speed in milliseconds
    rewindSpeed : 1000, // Rewind speed in milliseconds
    autoPlay : 5000, // Default speed will be 5 seconds.
    stopOnHover : true, // Stop autoplay on mouse hover
    
  });
     
  var brand = $("#brand-carousel");
 
  brand.owlCarousel({
    singleItem : false, // Display only one item
    navigation : true, // Show next and prev buttons
    navigationText : ["&lt;","&gt;"],
    pagination : false, //Show pagination
    paginationSpeed : 1000, // Pagination speed in milliseconds
    slideSpeed : 1000, // Slide speed in milliseconds
    rewindSpeed : 1000, // Rewind speed in milliseconds
    autoPlay : 1000, // Default speed will be 5 seconds.
    stopOnHover : true, // Stop autoplay on mouse hover

    items : 5, //10 items above 1000px browser width
    itemsDesktop : [1000,5], //5 items between 1000px and 901px
    itemsDesktopSmall : [900,3], // betweem 900px and 601px
    itemsTablet: [600,2], //2 items between 600 and 0
    itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
    
  });

} )( jQuery );