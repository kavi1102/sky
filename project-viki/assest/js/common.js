$(".mat-input").focus(function () {
    $(this).parent().addClass("is-active is-completed");
});

$(".mat-input").focusout(function () {
    if ($(this).val() === "")
        $(this).parent().removeClass("is-completed");
    $(this).parent().removeClass("is-active");
})

//loader js start   //

$(window).on('load', function () { // makes sure the whole site is loaded 
    $('#status').fadeOut(); // will first fade out the loading animation 
    $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
    $('body').delay(350).css({
        'overflow': 'visible'
    });
})


//loader js start   //



//date picker js start//
 $( function() {
    $( "#datepicker" ).datepicker,$( "#yoadmin" ).datepicker({
		firstDay: 1,
		showButtonPanel:true,
		dateFormat: "dd-mm-yy",
		closeText: "Close",
		changeMonth: true,
		changeYear: true,
		yearRange: "1965:2060",
		showAnim: "fold",
	});
  } );
//datepicker js end//

//datepicker js start yearof admission//
//    $( function() {
//    $( "#yoadmin" ).datepicker({
//		firstDay: 1,
//		showButtonPanel:true,
//		dateFormat: "dd-mm-yy",
//		closeText: "Close",
//		changeMonth: true,
//		changeYear: true,
//		yearRange: "1965:2060",
//		showAnim: "fold",
//	});
//  } );
//datepicker js end yearof admission//


//data_binding for address bar starts //



//data_binding ends //