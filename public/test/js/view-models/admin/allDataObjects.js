;(function ( w, $, ko){

	"use strict";


	var _base = w.RMS.baseUrl, x = w.RMS.XHR,
	 obj = {
		yearLevels: ['1st Year', '2nd Year', '3rd Year', '4th Year', '5th Year'],
		educationalLevel: [
			'Pre-School/Kindergarten',
			'Elementary',
			'Secondary',
			'College',
			'Transferee/Shifter'
		],
		colleges : ko.observableArray([]),
		courses: ko.observableArray([]),
		scholarships: ko.observableArray([]),
		students: ko.observableArray([]),
		semesters : ['1st','2nd','Summer'],
		remarks : ['PASSED','INCOMPLETE','FAILED','DROPPED'],
		familyMembers: ['Mother','Father','Guardian','Spouse','Children'],
	}
	x.get( _base + "ajax-source").done( function ( response ){
		var res = response;
		obj.colleges( res.colleges );
		obj.courses( res.courses );
		obj.scholarships( res.scholarships );
		obj.students( res.students );
	});
	w.RMS.VM.datas = obj;

}( window, jQuery, ko));