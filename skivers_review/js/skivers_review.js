//$(".btn-publish").click(function() {
//	$.ajax({
//		type: "GET",
//		url: '/dog-park/ajax-publish',
//		data: {
//			'fid': $(this).attr('fid')
//		},
//		dataType: "text",
//		success: function(msg) {
//			//we need to check if the value is the same
//			console.log(msg);
////				$('#results').html(msg);
//
////                            $('#results').html(msg);
//
//			//Receiving the result of search here
//		}
//	});
//});
//$(".btn-delete").click(function() {
//	$.ajax({
//		type: "GET",
//		url: 'dog-park/ajax-delete',
//		data: {
//			'fid': $(this).attr('fid')
//		},
//		dataType: "text",
//		success: function(msg) {
//			//we need to check if the value is the same
////			console.log(msg);
////				$('#results').html(msg);
//
////                            $('#results').html(msg);
//
//			//Receiving the result of search here
//		}
//	});
//});
//
//
//
//$(function()
//{
//	$('#mix_container').mixItUp();
//
//
//
//	var inputText;
//	var $matching = $();
//
//	// Delay function
//	var delay = (function() {
//		var timer = 0;
//		return function(callback, ms) {
//			clearTimeout(timer);
//			timer = setTimeout(callback, ms);
//		};
//	})();
//
//	$("#input").keyup(function() {
//		// Delay function invoked to make sure user stopped typing
//		delay(function() {
//			inputText = $("#input_mix").val().toLowerCase();
//
//			// Check to see if input field is empty
//			if ((inputText.length) > 0) {
//				$('.mix').each(function() {
//					$this = $("this");
//
//					// add item to be filtered out if input text matches items inside the title   
//					if ($(this).children('.title').text().toLowerCase().match(inputText)) {
//						$matching = $matching.add(this);
//					}
//					else {
//						// removes any previously matched item
//						$matching = $matching.not(this);
//					}
//				});
//				$(".mix_it_up").mixItUp('filter', $matching);
//			}
//
//			else {
//				// resets the filter to show all item if input is empty
//				$(".mix_it_up").mixItUp('filter', 'all');
//			}
//		}, 200);
//	});
//
//})
//
//
