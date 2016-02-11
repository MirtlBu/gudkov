$(function() {

    console.log('init!');

    var street = $('#street');

    $('#fancyselect').fancySelect();
    $('#street').focus(function() {
        $('.trigger').trigger('click.fs');
    });
    $('#street').blur(function() {
        $('.trigger').trigger('close.fs');
    });

    $('.modal-wrap').on('click', '.icon-close', function() {
        $('.modal-wrap').removeClass('modal-wrap--active');
    });

    $('.button').on('mousedown', function() {
        $(this).addClass('button--pressed');
    });
    $('.button').on('mouseup', function() {
        $(this).removeClass('button--pressed');
    });

})