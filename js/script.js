//hide or show input "Flexores" if data is man or woman
$('input[type="radio"]').click(function(){

	if($(this).attr("value")=="1"){
	    $(".flex-mujer").hide();
	    $(".flex-hombre").show();
	}
	if($(this).attr("value")=="2"){
	    $(".flex-mujer").show();
	    $(".flex-hombre").hide();
	}     
});

//Change fieldset color when input is on focus
$(".campo, .ci").focus(function(){
	$(".entrada").click(function(){
		$(this).css("border", "1px solid #1a73e8");
	})
}) 
$(".campo, .ci").blur(function(){
	$(".entrada").css("border", "1px solid #abb2b7");
});

// Getting rid of the error on page load
$('input[type="submit"]').click(function(){
	$(".invalid").addClass('errortype');
	$(".invalidcheck").addClass('errorcheck');
	$(".invalidcheck2").addClass('check');
});


   