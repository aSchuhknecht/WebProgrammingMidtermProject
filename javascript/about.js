var flag1 = 0;
var flag2 = 0;

$(function() {
    $(".btn2").click(function() {

    $("#adamBio").fadeToggle(1000);

    if (flag1 == 0) {
        $(".btn2").html("Hide info");
        flag1 = 1;
    }
    else {
        $(".btn2").html("Show info");
        flag1 = 0;
    }
    
    });
});

$(function() {
    $(".btn3").click(function() {
    $("#samBio").fadeToggle(1000);

    if (flag2 == 0) {
        $(".btn3").html("Hide info");
        flag2 = 1;
    }
    else {
        $(".btn3").html("Show info");
        flag2 = 0;
    }
    });
});



