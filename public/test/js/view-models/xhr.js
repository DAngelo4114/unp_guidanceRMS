( function ( w, $ ) {
	"use strict";

	$.ajaxSetup({
        headers: {
            'X-CSRF-Token': $('meta[name=_token]').attr('content')
        }
    });

	PNotify.prototype.options.styling = "bootstrap3";

	ko.observableArray.fn.find = function(prop, data) {
	    var valueToMatch = data[prop]; 
	    return ko.utils.arrayFirst(this(), function(item) {
	        return item[prop] === valueToMatch; 
	    });
	};

	var obj = {
		get: function ( URL ) {
			return $.get( URL );
		},

		getJ: function ( URL ) {
			return $.getJSON( URL );
		},

		post: function ( URL , DATA ) {
			return $.ajax({method:"POST",url: URL, data: DATA});
		},
		put: function( URL, DATA ) {
			return $.ajax({method:"PUT",url: URL, data: DATA});
		}
	};
	
	w.RMS = {};
	w.RMS.VM = {};
	w.RMS.baseUrl = "/unp_guidanceRMS/public/";
	w.RMS.VM.datas = {};
	w.RMS.XHR = obj;

}) ( window, jQuery );