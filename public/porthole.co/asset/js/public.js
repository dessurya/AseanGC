var win = $(window);

// for dekstop
if(win.width() > 960){
    var initNavbar = 168;
    win.scroll(function () {
        if (win.scrollTop() >= initNavbar) {
            $( "#navigasibar" ).addClass( "in-scroll" );
        }
        else if (win.scrollTop() <= initNavbar) {
            $( "#navigasibar" ).removeClass( "in-scroll" );
        }
    });
}
// end for dekstop

// for mobile
if(win.width() < 800){
    $('#navigasibar #burger-icon').click(function(){
        $('#navigasibar').toggleClass("aktif");;
    });
}
// for mobile

// animate scrool to
    $(function() {
        $('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top - 150
                        }, 1500);
                    return false;
                }
            }
        });
    });
// animate scrool to
    