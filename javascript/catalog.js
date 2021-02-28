$(function() {
    $("#home").click(function() {

        $(".away").css('display', 'none');
        $(".home").css('display', 'table-row');

    });
});

$(function() {
    $("#away").click(function() {

        $(".away").css('display', 'table-row');
        $(".home").css('display', 'none');

    });
});

$(function() {
    $("#all").click(function() {

        $(".away").css('display', 'table-row');
        $(".home").css('display', 'table-row');

    });
});