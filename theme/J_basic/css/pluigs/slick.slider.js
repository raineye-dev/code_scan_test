function _defineProperty(obj, key, value) {if (key in obj) {Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true });} else {obj[key] = value;}return obj;}
$(document).ready(function() {
    $('[data-slider]').each(function (key, item) {
        var _$$slick;
        var sliderIdName = 'slider' + key;
        this.id = sliderIdName;
        var sliderId = '#' + sliderIdName;
        var autoplay = Boolean($(sliderId).data("autoplay"));
        var autoplayInterval = parseInt($(sliderId).data("autoplay-interval"));
        var show = parseInt($(sliderId).data("show"));
        var slides = parseInt($(sliderId).data("slides"));
        var fade =  Boolean($(sliderId).data("fade"));
        var dot = Boolean($(sliderId).data("dot"));
        var total =  Boolean($(sliderId).data("total"));
        var arrows = Boolean($(sliderId).data("arrows"));
        var responsive = JSON.stringify($(sliderId).data('responsive'));
        
        
        	
        
      if (total == true) {
           $(sliderId).parent().find('[data-paging]').append('<div class="total"></div>');
           $(sliderId).on("init", function(event, _$$slick){
               $(sliderId).parent().find('.total').html('<span class="current">'+ parseInt(_$$slick.currentSlide + 1) + '</span> <span class="line">/</span><span class="count">' + _$$slick.slideCount +'</span>');
            });
        }
        $(sliderId).slick((_$$slick = {
            slidesToShow: show,
            slidesToScroll: slides,
            autoplay:autoplay,
            autoplaySpeed: autoplayInterval,
            arrows: arrows,
            draggable: true,
            infinite: true,
            centerMode: true,
            fade: fade,
            dots: dot,
            responsive:responsive
        }, 
        _defineProperty(_$$slick, 'arrows',true), 
        _defineProperty(_$$slick, 'appendDots',$(sliderId).parent().find('[data-dot]')), 
        _defineProperty(_$$slick, 'nextArrow',$(sliderId).parent().find('[data-control=next]')), 
        _defineProperty(_$$slick, 'prevArrow',$(sliderId).parent().find('[data-control=prev]')),
        //_defineProperty(_$$slick, 'responsive',responsive), 
        _$$slick)); 
        
        
        if (total == true) {
            $(sliderId).on("afterChange", function(event, _$$slick, currentSlide){
               $(sliderId).parent().find('.total').html('<span class="current">'+ parseInt(_$$slick.currentSlide + 1) + '</span> <span class="line">/</span><span class="count">' + _$$slick.slideCount +'</span>');
            });
        }
        
        $(sliderId).on("afterChange", function(event, _$$slick, currentSlide){
        	// console.log(_$$slick, currentSlide);	
        });
        
        var $pause = $(sliderId).parent().find("[data-control=stop]");
        var $play = $(sliderId).parent().find("[data-control=play]");
        $play.hide();
        $pause.on('click', function() {
            $pause.hide();
            $play.show().focus();
            $(sliderId)
            .slick('slickPause')
            .slick('slickSetOption', true);
        });
        $play.on('click', function() {
            $pause.show().focus();
            $play.hide();
            $(sliderId)
            .slick('slickPlay')
            .slick('slickSetOption', true);
        });
        
        

        $(window).on('resize orientationchange', function() {
            $(sliderId).slick('resize');
        });
    });
});