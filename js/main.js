$(function(){

    var sendReviewBtn = $('#send_review');
    sendReviewBtn.on('click', function() {
        var name = $('#name').val().trim();
        var middlename = $('#middlename').val().trim();
        var secondname = $('#secondname').val().trim();
        var review = $('#review').val().trim();
        var email = $('#email').val().trim();

        if((name == "") || (name.length < 2)) {
            $('#errorMess').text("Введите имя (от 2 до 30 символов)")
            return false;
        } else if(email == "") {
            $('#errorMess').text("Введите email")
            return false;
        } else if(review.length < 5) {
            $('#errorMess').text("Введите отзыв (не менее 5 символов)")
            return false;
        }

        $('#errorMess').text("");

        //console.log(name + ' ' + middlename + ' ' + secondname + ' ' + review + ' ' + email);

        var request = $.ajax({
            url: 'ajax/sendReview.php',
            type: 'POST',
            cache: false,
            data : { 'name': name, 'middlename': middlename, 'secondname': secondname, 'email': email, 'review': review},
            dataType: 'html',
            
            beforeSend: function() {
                $('#send_review').prop("disabled", true);
            },
            success: function(data){

                console.info(data); // выведем в консоль ответ обработчика
                // если файл(функция/класс/метод)-обработчик возвращает что-либо
                // (echo/return/print etc.), это вернётся объектом data здесь. 
            },
            error: function(xhr){
        
                console.error("Всё плохо: " + xhr.status + " " + xhr.statusText);
                // в случае неудачного ajax-запроса объект xhr вернётся сюда со 
                // статусом запроса (ошибкой) 
            }
        });
        request.done(function( msg ) {
            $("#errorMess").html( msg );
            $('#send_review').prop("disabled", false);
            $('#form_input').trigger("reset"); //полностью очищает форму
            //$('.mfp-close').trigger('click');
            getReview();
          });

        request.fail(function( jqXHR, textStatus ) {
            $('#send_review').prop("disabled", false);
            alert( "Request failed: " + textStatus );
        });
        $("#errorMess").empty();
    });


    function getReview(){
        $.ajax({
            url: 'ajax/getReview.php',
            method: 'GET',
            cache: false,
            dataType: 'json',
            success: function(data){ 
                alert(data);
                //renderingReviews(data);
            },
            error: function(xhr){
        
                console.error("Всё плохо: " + xhr.status + " " + xhr.statusText);
                // в случае неудачного ajax-запроса объект xhr вернётся сюда со 
                // статусом запроса (ошибкой) 
            }        	
        });
    }

    //при скролле добавляет меню класс .fixed
    var menu = $('.header__row_menu');
    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            menu.addClass("menu_fixed");
        } else {
            menu.removeClass("menu_fixed");
        }
    });

    // слайдер 
	$('.slider__inner').slick({
		nextArrow: '<button type="button" class="slick-btn slick-next"></button>',
		prevArrow: '<button type="button" class="slick-btn slick-prev"></button>',
        autoplay: true,
        //autoplaySpeed: 
        slidesToShow: 1,
        dots: true,
        dotsClass: "my-dots",
        focusOnSelect: true,
        cssEasy: 'linear'
    });
    

    $('.reviews__inner').slick({
		nextArrow: '<button type="button" class="slick-btn slick-next"></button>',
		prevArrow: '<button type="button" class="slick-btn slick-prev"></button>',
        autoplay: true,
        //autoplaySpeed: 
        slidesToShow: 1,
        dots: true,
        dotsClass: "my-dots",
        focusOnSelect: true,
        cssEasy: 'linear'
    });


    // mobile menu
    let docWidth = $(document).width();
    let winHeight = $(window).height();

    $('.menu__hamb').click(function () {
        $('.menu__list').animate({
            left: 0
        });
        $(this).hide();
        $('.menu').addClass('menu_mobile');
        $('.overlay').addClass('menu_open');
    });
    $('.menu__list span, .menu_overlay').click(function () {
        mobileMenuHide();
    });

    function mobileMenuHide() {
        $('.menu__list').animate({
            left: -docWidth
        });
        $('.menu__hamb').show();
        $('.menu').removeClass('menu_mobile');
        $('.overlay').removeClass('menu_open');
    }



    $(window).scroll(function(){
        if ($(this).scrollTop() > 150) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });
          
        $('.scrollup').on('click', function(){
            $('html, body').animate({ 
               scrollTop: top 
            }, 600);
            removeHash();
    });
    
    //настройка перехода по якорю, так чтобы решетка не отображалась в адресной строке после перехода
    $('a[href^="#"]').on('click', function(e){
        if ( $('.menu_mobile') ) {
            mobileMenuHide();
        }
        var anchor = $(this);
        if (anchor.attr('href') == '#id-header') {
            $('html, body').animate({ 
                scrollTop: 0 
             }, 500);
        } else {
            $('html, body').stop().animate({
              scrollTop: $(anchor.attr('href')).offset().top-60
            }, 500);
        }
        e.preventDefault();
    });

    function removeHash() { 
        history.pushState("", document.title, window.location.pathname + window.location.search);
    }

    //popup-окно
    $('.call-popup').magnificPopup({
        type: 'inline',
        focus: '#name',
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = this.st.el.attr('data-effect');
            },
            open:  function () {
                $('.scrollup').fadeOut();
            }
        },
        closeOnBgClick: false,
    });
});