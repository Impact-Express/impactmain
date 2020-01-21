import $ from 'jquery';
window.$ = window.jQuery = $;
import 'jquery-ui/ui/core';

//    sidebar toggle
$(function() {
    function responsiveView() {
        var wSize = $(window).width();
        if (wSize <= 768) {
            $('#container').addClass('sidebar-close');
            $('#sidebar').hide();
        }

        if (wSize > 768) {
            $('#container').removeClass('sidebar-close');
            $('#sidebar').show();
        }
    }
    $(window).on('load', responsiveView);
    $(window).on('resize', responsiveView);
});

$('.fa-bars').click(function () {
    if ($('#sidebar').is(":visible") === true) {
        $('#main-content').css({
            'margin-left': '0px'
        });
        $('#sidebar').css({
            'margin-left': '-300px',

        });
        $('#sidebar').hide();
        $("#container").addClass("sidebar-closed");
    } else {
        $('#main-content').css({
            'margin-left': '300px'
        });
        $('#sidebar').show();
        $('#sidebar').css({
            'margin-left': '0'
        });
        $("#container").removeClass("sidebar-closed");
    }
});
