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

    $('.button').on('mousedown', function() {
        $(this).addClass('button--pressed');
    });
    $('.button').on('mouseup', function() {
        $(this).removeClass('button--pressed');
    });

})