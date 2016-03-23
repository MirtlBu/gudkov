$(function() {

    console.log('init!');

    var street = $('#street');

    $('#fancyselect, .fancible_select').fancySelect();

    $('#street').focus(function() {
        $('.trigger').trigger('click.fs');
    });

    $('.filter__dropdown').fancySelect();

    $('.modal-wrap').on('click', '.icon-close', function() {
        $('.modal-wrap').css('display', 'none');
    });

    $('.form').on('click', '.icon-close', function() {
        $(this).closest('.accept__icon').removeClass('accept__icon--inactive');
        $(this).closest('.accept__message').removeClass('accept__message--active');
    });

    $('.button').on('mousedown', function() {
        $(this).addClass('button--pressed');
    });
    $('.button').on('mouseup', function() {
        $(this).removeClass('button--pressed');
    });
	
	$(document).on('click', 'label.form__checkbox', function(){
		$(this).closest('div').find('input').trigger('click');
	});

    // $('.form__radio-button').on('mousedown', function() {
    //     $(this).addClass('button--pressed');
    // });
    // $('.form__radio-button').on('mouseup', function() {
    //     $(this).removeClass('button--pressed');
    // });

    $('.header__dropdown').mouseenter(function() {
        $(this).closest('.header__item').css('background-color', '#494949')
    });
    $('.header__dropdown').mouseleave(function() {
        $(this).closest('.header__item').css('background-color', '#000')
    });

})