/**
 * Created by Vlad Starkovsky on 28.06.2017.
 */

"use strict";

//
// Import Libs
//

import $ from 'jquery';

import axios from 'axios';

//
// Import Scripts
//


//
// Costume Scripts
//


$(document).ready(function () {

    var DeviceWidth = $(window).width();


    // Плавная прокрутка к якорю
    $(".nav a").bind("click", function (e) {
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
    if(DeviceWidth>1000) {
        $('.brand-photo-wrap').css('width', DeviceWidth).css('left', (-DeviceWidth / 2));
        $('.brand-photo-item_b').css('width', (DeviceWidth - 40) / 10 * 2.33333);
        $('.brand-photo-item_s').css('width', (DeviceWidth - 40) / 10 * 1.5);
    }

    if (DeviceWidth < 1000) {
        //Расчет отсупов в блоках с картинкой
        var ImageHeight1 = $('.block-bizprocess .full-width-img').height();
        if (DeviceWidth < 400) {
            ImageHeight1 = ImageHeight1 + 20;
        }
        $('.block-bizprocess__text-item').css('top', ImageHeight1);


        var ImageHeight2 = $('.block-sellfranchise .full-width-img').height();
        if (DeviceWidth < 400) {
            ImageHeight2 = ImageHeight2 + 20;
        }
        $('.block-sellfranchise__text-item').css('top', ImageHeight1);


        var ImageHeight3 = $('.block-digitalmark .full-width-img').height() + 20;
        if (DeviceWidth < 400) {
            ImageHeight3 = ImageHeight3;
        }
        $('.block-digitalmark__text-item').css('top', ImageHeight3);
    }


    $('.feedback__form .button').click(function (event) {
        event.preventDefault();

        axios.get('/amo_api.php', {
            params: {
                contact_name: $('.feedback__form').find('input[name="contact_name"]').val(),
                contact_email: $('.feedback__form').find('input[name="contact_email"]').val(),
                contact_phone: $('.feedback__form').find('input[name="contact_phone"]').val(),
                contact_sity: $('.feedback__form').find('input[name="contact_sity"]').val(),
                form_name: $('.feedback__form').find('input[name="form_name"]').val(),
                urlPage: document.location.href,

            }
        })
            .then(function (response) {
                //console.log(response);
                $('.block-video__form').hide(100);
                $('.block-video__desc').css('display', 'flex').show(100);
            })
            .catch(function (error) {
                //console.log(error);
            });

    });

    $('.feedback__form_footer .button').click(function (event) {
        event.preventDefault();

        axios.get('/amo_api.php', {
            params: {
                contact_name: $('.feedback__form_footer').find('input[name="contact_name"]').val(),
                contact_email: $('.feedback__form_footer').find('input[name="contact_email"]').val(),
                contact_phone: $('.feedback__form_footer').find('input[name="contact_phone"]').val(),
                contact_sity: $('.feedback__form_footer').find('input[name="contact_sity"]').val(),
                form_name: $('.feedback__form_footer').find('input[name="form_name"]').val(),
                urlPage: document.location.href,
            }
        })
            .then(function (response) {
                //console.log(response);
            })
            .catch(function (error) {
                //console.log(error);
            });

    });


});


