$(document).ready(function(){
    $('.hb-button').on('click', function(){
        console.log('yee');
        $('nav ul').toggleClass('show');
    });
});