var flag1 = 0;
var flag2 = 0;
var flag3 = 0;
var flag4 = 0;

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

$(function() {
    $("#rb").click(function(){

        if (flag3 == 0) {
            $("#rb").animate({
                opacity: '0.5',
                width: '30%'
            });
            flag3 = 1;
        }
        else {
            $("#rb").animate({
                opacity: '1',
                width: '80%'
                });
            flag3 = 0;
        }   
    });
});

$(function() {
    $("#lb").click(function(){

        if (flag4 == 0) {
            $("#lb").animate({
                opacity: '0.5',
                width: '30%'
            });
            flag4 = 1;
        }
        else {
            $("#lb").animate({
                opacity: '1',
                width: '80%'
                });
            flag4 = 0;
        }   
    });
});



