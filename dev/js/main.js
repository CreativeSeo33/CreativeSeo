$(document).ready( function(){
	setTimeout( function(){
		$('.terminal').typewriting( "Эффективное продвижение от 10 000 руб.", {
			"typing_interval": 200,
			"blink_interval": "1s",
			"cursor_color": "#B1986A"
		}, function() {
			console.log( "END" );
		});
		
	}, 1000);
});

