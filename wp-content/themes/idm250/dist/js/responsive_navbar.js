jQuery(document).ready(function(){
    jQuery('.hb-button').on('click', function(){
        console.log('yee');
        jQuery('nav ul').toggleClass('show');
    });
});