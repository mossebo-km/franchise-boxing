/**
 * Created by Vlad Starkovsky on 28.06.2017.
 */

"use strict";

//
// Import Libs
//

import $ from 'jquery';

//
// Import Scripts
//




//
// Costume Scripts
//

$(document).ready(function () {

    // Плавная прокрутка к якорю
    $(".nav a").bind("click", function(e){
        var anchor = $(this);
        var name = anchor.attr("href").replace(new RegExp("#", "gi"), "");
        $('html, body').stop().animate({
            scrollTop: $("a[name=" + name + "]").offset().top
        }, 700);
        e.preventDefault();
        return false;
    });


    // Форма в шапке
    $('.block-video .button').click(function () {
        $('.block-video__form').css('display', 'flex').show(100);
        $('.block-video__desc').hide(100);
    });



    // Высчитывание ширины фоток в блоке репутация
    var DeviceWidth = $(window).width();
    $('.brand-photo-wrap').css('width', DeviceWidth).css('left',(-DeviceWidth/2));
    $('.brand-photo-item_b').css('width',(DeviceWidth-40)/10*2.33333);
    $('.brand-photo-item_s').css('width',(DeviceWidth-40)/10*1.5);



});

