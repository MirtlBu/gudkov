$(function() {

    console.log('init!');

    var street = $('#street');

    $('#fancyselect, .fancible_select, .calls__dropdown').fancySelect();

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

    $('.header-menu').on('click', function() {
        $('.header__others').toggle();
    });

    $('#private').on('click', function() {
        $(this).next('.header__dropdown').toggle();
    }).on('hover', function() {
        $(this).next('.header__dropdown').toggle();
    });

    // $('.form__radio-button').on('mousedown', function() {
    //     $(this).addClass('button--pressed');
    // });
    // $('.form__radio-button').on('mouseup', function() {
    //     $(this).removeClass('button--pressed');
    // });


});

$(document).ready(function(){
	$(document).on('click', 'label.labeled_checkbox', function(){
		$(this).closest('div').find('input').trigger('click');
	});
});

