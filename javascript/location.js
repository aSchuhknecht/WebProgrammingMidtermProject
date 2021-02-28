$(function() {
    $("#tickets").click(function() {
        $(this).css('background-color', 'red');
        $(this).text('SOLD OUT');
        $(this).after(" Check back later")
    });
});

