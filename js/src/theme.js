( function( $ ) {

	// Add Exphasis to Page Titles
	var titleString = $('#page-title').text();

	if ( titleString !== "") {

		var wordsArr = titleString.split(" ");

		if ( wordsArr.length > 2 ) {

			var lastWords = wordsArr.splice(-2);
			return $('.display-4').html(wordsArr.join(" ") + ' <span class="font-weight-semi-bold">' + lastWords[0] + '</span>' + '<span class="font-weight-semi-bold"> ' + lastWords[1] + '</span>');

		} else {

			var lastWord = wordsArr.splice(-1);
			return $('.display-4').html(wordsArr.join(" ") + ' <span class="font-weight-semi-bold"> ' + lastWord + '</span>');

		}
	}

} )( jQuery );