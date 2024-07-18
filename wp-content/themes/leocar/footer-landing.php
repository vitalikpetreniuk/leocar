<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ninesquares
 */

renderBlock('footer-landing');

 wp_footer(); ?>
<script>
    wpcf7Elms = jQuery('.modal form');
    jQuery.each(wpcf7Elms,function(index,form){
        form.addEventListener('wpcf7mailsent', function( event ) {
            jQuery('#leo-modals').removeClass('drive');
            jQuery('#leo-modals').removeClass('call');
            jQuery('#leo-modals').addClass('thanks');
        }, false );
    });
    jQuery('.close-thanks').on('click', function(){
        jQuery('#leo-modals').removeClass('thanks');
        jQuery('body').removeClass('modal');
        jQuery('.wpcf7-response-output').text('');
        jQuery('.wpcf7-response-output:before').css('color','red');
    });
</script>
</body>
</html>
