define([
    "jquery",
    "OwlCarousel-min"
], function($){
    return function (config, elem) {
        $(elem).addClass('owl-carousel');
        return $(elem).owlCarousel(config);
    }
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})