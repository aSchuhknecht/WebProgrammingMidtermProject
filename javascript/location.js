$(function() {
	var clicked = false;
    $("#tickets").click(function() {
        $(this).css('background-color', 'red');
        $(this).text('SOLD OUT');
        if (!clicked){
        	clicked = true;
        	$(this).after(" Check back later")
    	}
    });
});

