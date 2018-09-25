<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<div class="footer-section text-center">
	<h3>Web Developer</h3>
	<span>Emmanuel Tabar &bull; Copyright <?php echo date('Y'); ?></span>
</div>
<a href="javascript:void(0);" class="back-to-top" onclick="backToTop();" style="display: none;"><i class="fa fa-arrow-up"></i></a>
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/backstretch.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
	var pHeadArr = [];
	if(jQuery('.projects-item').length != 0){
		jQuery('.projects-item h1').each(function(){
			pHeadArr.push(jQuery(this).height());
		}).each(function(){
			jQuery(this).height(Math.max.apply(Math,pHeadArr));
		});		
	}
	headeerHeight();
	portfoliodetails();
	shBTTbtn();
	jQuery('#menu-main li a, .site-details-section-content .btn').each(function(){
		jQuery(this).attr('onclick', 'topScroll("'+jQuery(this).attr('href').replace('/', '')+'")').attr('href','javascript:void(0)');
	});
	
});
jQuery(window).scroll(function(){shBTTbtn();});
jQuery(window).resize(function(){
	headeerHeight();
	portfoliodetails();
});
function portfoliodetails(){
	var y_arr = [];
	jQuery('.portfolio-details p').each(function(){
		jQuery(this).removeAttr('style');
		y_arr.push(jQuery(this).height());
	}).each(function(){
		jQuery(this).height(Math.max.apply(Math,y_arr));
	});
}
function topScroll(a){
	jQuery('html, body').animate({
	  scrollTop: jQuery(a).offset().top
	}, 1000);
}
function headeerHeight(){
	var winH = jQuery(window).height();
	if(winH >= 700){
		jQuery('.header-section, .site-details-section, .site-details-section .table-cell-j').height(winH);
	}else if(winH >= 2000){
		jQuery('.header-section, .site-details-section, .site-details-section .table-cell-j').height(1500);
	}else{
		jQuery('.header-section, .site-details-section, .site-details-section .table-cell-j').height(700);
	}	
}

function shBTTbtn(){
	(function( $ ) {
		if($(window).scrollTop() >= 700){
			$('.back-to-top').fadeIn();
		}else{
			$('.back-to-top').fadeOut();
		}
	})(jQuery);			
}

function backToTop(){
	jQuery('html, body').animate({
		scrollTop: jQuery('html, body').offset().top
	}, 1000);
}


WebFontConfig = {
google: { families: [ 'Lato:400,700,900:latin' ] }
};
(function() {
var wf = document.createElement('script');
wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
wf.type = 'text/javascript';
wf.async = 'true';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(wf, s);
})(); </script>
<script type="application/ld+json"> { "@context" : "http://schema.org", "@type" : "LocalBusiness", "name" : "Emmanuel Tabar", "image" : "http://etabar.890m.com/wp-content/themes/webjabs/images/typos.jpg", "email" : "hello@etabar.890m.com" } </script>
</body>
</html>
