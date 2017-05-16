// You can see additional parameters here: https://github.com/woocommerce/FlexSlider/wiki/FlexSlider-Properties
jQuery(window).load(function() {
  jQuery('.flexslider').flexslider({
    animation: "slide",
    direction: "horizontal",
	slideshowSpeed: 7000,
	animationSpeed: 600,
	smoothHeight: true,
	useCSS: false
  });
});
