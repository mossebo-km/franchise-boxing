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


    $('.feedback__form').submit(function (event) {
        event.preventDefault();
        var thisElem = this;
        // send
        $.ajax({
            method: 'POST',
            url: '/amo_api.php',
            data: {
                // Имя
                contact_name: $(thisElem).find('input[name="contact_name"]').val(),
                // Email
                contact_email: $(thisElem).find('input[name="contact_email"]').val(),
                // Телефон
                contact_phone: $(thisElem).find('input[name="contact_phone"]').val(),
                // Текст сообщения
                message: $(thisElem).find('textarea[name="feedback-form__text"]').val() + ' ',
                // URL страницы
                urlPage: document.location.href,
                // Имя формы
                form_name: thisElem.getAttribute('data-form-place'),
                // Геолокация
                contact_sity: $(thisElem).find('input[name="contact_sity"]').val(),
            }
        })
            .done(function () {
                alert('Отправлено');
            });

    });


});
