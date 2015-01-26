jQuery("document").ready(function($){
    app.init();
});
    
var app = {
    currentPage : $('meta[name="currentPage"]').attr("content"),
    init: function() {
        customScroller.init();
        imageHoverAnimator.init();
        
        // Manage some cases
        if (app.currentPage == "accueil") {
            Page.init();            
            $(function(){
                $().timelinr({
                    arrowKeys: 'true',
                    orientation: 'horizontal'
                })
            });           
        }
        
        /* else if (app.currentPage == "informations") {            
            Page.init();        
            $(function(){
                $().timelinr({
                    arrowKeys: 'true',
                    orientation: 'vertical'
                })
            });           
        } */
    }
};

var customScroller = {
    navHeight : $(".navbar").height(),
    scrollThreshold : 57,
    init : function() {
        $(window).scroll(function() {
            var topPosition = $(document).scrollTop();
            var alpha = 1-(topPosition/customScroller.scrollThreshold);        
            $('.navbar-header').css({opacity: alpha});
            if (topPosition >= customScroller.scrollThreshold) {
                $("body").addClass("scrolled");
                $(".navbar").css({top: -(customScroller.navHeight-customScroller.scrollThreshold)});
            } else {
                $("body").removeClass("scrolled");
                $(".navbar").css({top: 0});
            }
            scrollerAnimator.manage(topPosition);
        });
    }
};

var scrollerAnimator = {
    manage: function(position) {
        if (position > 50) {
            $("#pre-info  p").addClass("textAnim").css('opacity','1'); 
            //$("#pre-info  p").css('opacity','1');
            //$("#pre-info  h1").addClass("titreAnim");
            //$("#pre-info  h1").css('opacity','1');            
        }
    }
};

var imageHoverAnimator = {
    imgOver : $("img.hover"),
    init: function() {
        $(imageHoverAnimator.imgOver).mouseover(function () {
                var url = $(this).attr('src').replace('.png', '-hover.png')
                $(this).attr('src', url);
            }).mouseout(function () {
                var url = $(this).attr('src').replace('-hover.png', '.png')
                $(this).attr('src', url);
        });
    }
};


$(function(){
    $().timelinr({
        arrowKeys: 'true',
        orientation: 'vertical'
    })
});