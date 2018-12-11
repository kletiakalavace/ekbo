jQuery( function($){
    $(document).ready( function(){

        // Slider
        $('.header-slider').slick({
            dots: true
        });
        
        // Masonry
        $('.list-posts').masonry({
            // options
            itemSelector: '.list-post-item',
        });

        // Questions
        var close = $('.question-item').find('span');
        close.click( function(){
            $(this).closest('.question-item').toggleClass('close');
            $(this).closest('.question-item').find('.question-hide').toggleClass('show');
        });

    });
});