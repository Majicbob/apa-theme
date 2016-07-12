(function( $ ) {
    $(function() {
        $('.menu-icon').click(function() {
            var $homeItem = $('.menu .home');
            if ($homeItem.length) {
                $homeItem.remove();
            }
            else {
                jQuery('.menu').prepend('<li class="leaf home"><a href="/" title="">Home</a></li>');
            }
            $('#header').toggle();
        });
    });
})(jQuery);
