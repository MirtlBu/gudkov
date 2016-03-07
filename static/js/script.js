$(function() {

    console.log('init!');

    var street = $('#street');

    $('#fancyselect').fancySelect();
    $('#street').focus(function() {
        $('.trigger').trigger('click.fs');
    });

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

})