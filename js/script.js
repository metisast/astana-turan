/**
 * document.ready wrapper
 */
jQuery(document).ready(function( $ ) {

    var menu = $("#desktop-menu, #mobile-menu");
    var pageUp = $('.page-up');

    $(window).scroll(function(){
        if($(this).scrollTop() > 60 ){
            menu.css({
                top: 0
            });
        }
        else if($(this).scrollTop() < 61 ){
            menu.css({
                top: 55
            });
        }
    });

    //paralax
    $(window).scroll(function(){

        $(".jqueryparalax").css("background-position",(0 +"px " +$(window).scrollTop())+"px");

    });
    $(".arrow-border").click(function(){
        $('body').animate({"scrollTop":0},1500);

    });

    pageUp.click(function () { // При клике по кнопке "Наверх" попадаем в эту функцию
        /* Плавная прокрутка наверх */
        $('body, html').animate({
            scrollTop: 0
        }, 1000);
    });

});

/**
 * General + window.load wrapper
 */
(function( $ ){

    // Здесь код, который должен выполняться сразу, не дожидаясь document.ready
    // (самым первым в цикле жизни страницы)

    /**
     * window.load wrapper
     * Этот код выполняется, когда страница и все элементы загружены целиком
     */
    $(window).load(function(){

        // Your code here...

    }); // window.load END

})(jQuery);