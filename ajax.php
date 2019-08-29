$.ajax({
  		accepts: {
    	mycustomtype: 'application/x-some-custom-type'
  	},
 
 		 // Instructions for how to deserialize a `mycustomtype`
  	converters: {
    'text mycustomtype': function(result) {
      // Do Stuff
      return newresult;
    }
  	},
  	$.ajax({
  	url: "index.html",
  	context: document.body
	}).done(function() {
  	$( this ).addClass( "done" );
	});
 
  		// Expect a `mycustomtype` back from server
  	dataType: 'mycustomtype'
	});