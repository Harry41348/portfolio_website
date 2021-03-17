/* global $ */

/* eslint-env jquery */


$('.js--wp-1').waypoint(function(direction) {
    $('.js--wp-1').addClass('animated fadeIn');
}, {
    offset: '50%'
});

$('.js--wp-2').waypoint(function(direction) {
    $('.js--wp-2').addClass('animated pulse');
}, {
    offset: '50%'
});

$('.js--wp-3').waypoint(function(direction) {
    $('.js--wp-3').addClass('animated bounceInUp');
}, {
    offset: '50%'
});

/* STICKY NAVIGATION*/

/*$(document).ready(function() {
    
    
}); */