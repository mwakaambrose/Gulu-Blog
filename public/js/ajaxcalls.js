//$(document).ready(function () {
$(function(){
	console.log('Jquery loaded.');

	$('.likeholder').on('click', function (event) {

		var postid = $(this).data('post-id');

		$.ajaxSetup({
	        headers: { 'X-CSRF-Token' : $('meta[name=csrf-token]').attr('content') }
	    });

		// '(response) => {}' same as 'function (response) => {}'
		// its only being used to get around the 'this' context
		// in functions.
		// link :https://developer.mozilla.org/en/docs/Web/JavaScript/Reference/Functions/Arrow_functions

		$.ajax({
		    method: 'POST', // Type of response and matches what we said in the route
		    url: '/like/'+postid, // This is the url we gave in the route
		    // data: {'id':postid}, // a JSON object to send back
		    success: (response) => { // What to do if we succeed
		    	// debugger
		        $(this).html("    "+response);
		    },
		    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
		        // debugger;
		        console.log(JSON.stringify(jqXHR));
		        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
		    }
		});

	});

});