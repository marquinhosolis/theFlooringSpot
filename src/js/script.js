/**
 * forEach implementation for Objects/NodeLists/Arrays, automatic type loops and context options
 *
 * @private
 * @author Todd Motto
 * @link https://github.com/toddmotto/foreach
 * @param {Array|Object|NodeList} collection - Collection of items to iterate, could be an Array, Object or NodeList
 * @callback requestCallback      callback   - Callback function for each iteration.
 * @param {Array|Object|NodeList} scope=null - Object/NodeList/Array that forEach is iterating over, to use as the this value when executing callback.
 * @returns {}
 */
var forEach = function (t, o, r) {
    if ("[object Object]" === Object.prototype.toString.call(t))
        for (var c in t)
            Object.prototype.hasOwnProperty.call(t, c) && o.call(r, t[c], c, t);
    else for (var e = 0, l = t.length; l > e; e++) o.call(r, t[e], e, t);
};

var hamburgers = document.querySelectorAll(".hamburger");
if (hamburgers.length > 0) {
    forEach(hamburgers, function (hamburger) {
        hamburger.addEventListener(
            "click",
            function () {
                this.classList.toggle("is-active");
            },
            false
        );
    });
}

$(document).ready(function () {
    $('.hamburger').click(function(){
        $('.navMobile .mainNav').toggleClass('mainNav--visible');
        $('header').toggleClass('header--fixed');
        $('body').toggleClass('body--locked');
    })
    
    $(".menu-item-has-children a").one("click", function(event) {
        event.preventDefault();
    });

    $('.menu-item-has-children').click(function(){
        $(this).find('.sub-menu').slideToggle();
    })

    $('.sub-menu a').click(function(){
        var href = $(this).attr('href');
        window.location.href = href;
    })

    $(".underlineTitle").each(function () {
        var originalHTML = $(this).html();
        var newHTML = originalHTML.replace("{{", "<span>");
        var outputHTML = newHTML.replace("}}", "</span>");
        $(this).html(outputHTML);
    });

    var bgTextHeight = $('.bgText').height();
    if($(window).width() < 1024){
        $('.homeCopy').css('padding-bottom', bgTextHeight)
    }else{
        $('.bgText').css('bottom', -bgTextHeight/2)
    }
    
    $(".underlineTitle").bind("animationend", function(){
        setTimeout(function () {
            $('.underlineTitle').addClass('underlineTitle--full');
        }, 500);
    });

    var firstImage =  $('.colorLinks a').first().attr('href');
    $('.singleProductsDataImage').css('background-image','url('+firstImage+')');

    $('.colorLinks a').click(function(e){
        e.preventDefault();
        var colorImage = $(this).attr('href');
        $('.singleProductsDataImage').css('background-image','url('+colorImage+')');
        //alert(colorImage);
    })
});

$(window).load(function() {
    $('.partnerLogos .flexslider').flexslider({
        animation: "slide",
        animationLoop: true,
        itemWidth: 200,
        itemMargin: 50,
        controlNav: false,
        move: 1,
        slideshow: true,
        /*start: function(slider) {
            if (slider.pagingCount === 1) {
                slider.addClass('flex-centered');
            }
        }*/
    });
    $('.testimonialsHome .flexslider').flexslider({
        animation: "slide",
        slideshow: false,
        controlNav: false,
    });
});

    $(".selectWrapper select").change(function () {
        $(".selectWrapper form").submit();
    });

    $(".productsFilter select").change(function () {
        $(".productsFilter form").submit();
    });

    // $('.promotionBoxModal').click(function(e){
    //     e.preventDefault()
    //     var promotionId = $(this).data('promotion');
    //     $('#promotionPopUp_'+promotionId).fadeIn();
    //     $('body').addClass('body--locked');
    //     $('.promotionPopupContentClose').click(function(e){
    //         e.preventDefault();
    //         $(this).closest('.promotionPopup').fadeOut();
    //         $('body').removeClass('body--locked');
    //     })
    // })

    $('.singleProductDetailsHeader a').click(function(e){
        e.preventDefault();
        var selectedBox = $(this).data('box');
        $(this).addClass('selected').siblings().removeClass('selected');

        $('.singleProductDetailsBoxes').find('#'+selectedBox ).show().siblings().hide();
    })