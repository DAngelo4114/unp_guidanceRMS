;( function ( w, ko ) {
	"use strict";

	w.onload = function(){
		//$(".row").slideDown().addClass("animated fadeIn");
	};

	function organizationalAffiliationField(){
		var obj = {
			year_level : ko.observable(),
			name : ko.observable(),
			position : ko.observable(),
			school_year : ko.observable()
		}
		return obj;
	}

	function editOrganizationalAffiliationField(data){
		var d= data, obj = {
			id: d.id,
			year_level : ko.observable(d.year_level),
			name : ko.observable(d.name),
			position : ko.observable(d.position),
			school_year : ko.observable(d.school_year)
		}
		return obj;
	}

	var x = w.RMS.XHR, _base = w.RMS.baseUrl,
		organizationalAffiliationVM = {
			student_id : ko.observable(),
			organizationalAffiliationFields : ko.observableArray([new organizationalAffiliationField()])
		}, me = organizationalAffiliationVM, success, error;

	me.canAddField = ko.pureComputed( function() {
		if( me.organizationalAffiliationFields().length < 5 ){
			return true;
		}else{
			return false;
		}
	});

	me.addField = function() {
		me.organizationalAffiliationFields.push(new organizationalAffiliationField());
	}

	me.canRemoveField = ko.pureComputed( function(){
		if( me.organizationalAffiliationFields().length !== 1){
			return true;
		}else{
			return false;
		}
	});

	me.removeField = function( field ){
		me.organizationalAffiliationFields.remove( field );
	};

	me.removeFieldFromDB = function(field){
		(new PNotify({
		    title: 'Confirmation Needed',
		    text: 'Are you sure?',
		    icon: 'glyphicon glyphicon-question-sign',
		    hide: false,
		    confirm: {
		        confirm: true
		    },
		    buttons: {
		        closer: false,
		        sticker: false
		    },
		    history: {
		        history: false
		    },
		    type: 'error'
		})).get().on('pnotify.confirm', function() {
		    x.post( _base + "org-affiliation/delete/"+ field.id).done( function ( response ){
				if( response > 0 ){
					me.organizationalAffiliationFields.remove( field );
					if( me.organizationalAffiliationFields().length == 0 ){
						$("#editOrgAffiliationModal").modal("hide");
					}
					new PNotify({
						title: 'Success!',
						text: 'Deleted!',
						type: 'success',
						buttons: {
							sticker: false
						}
					});


					
				}
			}).fail( function(){
				new PNotify({
					title: 'Whoops!',
					text: 'Something went wrong.',
					type: 'error',
					buttons: {
						sticker: false
					}
				});
			});
		}).on('pnotify.cancel', function() {
		    
		});
		
	};

	me.selectedStudent = ko.pureComputed( function() {
		var s = me.student_id();
		if( s ){
			return s.lname + ', ' + s.fname + ' ' +s.mname;
		}else{
			return '(NO STUDENT SELECTED)';
		}
	});

	me.canSaveRecord = ko.pureComputed( function() {
		return true;
	});
	me.saveRecord = function(e) {
		if( typeof success !== "undefined"){
			success.remove();
		}


		$.each( me.organizationalAffiliationFields(), function(){
			this.student_id = me.student_id().id;
		});
		
		var data = ko.toJS(me.organizationalAffiliationFields());

		x.post( _base + "org-affiliation/store",{data})
			.done( function ( response ){
				if( response == "OK" ){
					me.student_id( undefined );
					me.organizationalAffiliationFields([]);
					success = new PNotify({
						title: 'Success!',
						text: 'Organizational Affiliation/s added!' ,
						icon: 'fa fa-check',
						type: 'success',
						buttons:{
							sticker: false
						}
					});
				}
		}).fail( function(){
			if( typeof error !== "undefined"){
				error.remove();
			}
			error = new PNotify({
				title: 'Whoops!',
				text: 'Something went wrong.',
				type: 'error',
				buttons:{
					sticker: false
				}
			});
		});
	}


	me.edit = function(){
		me.organizationalAffiliationFields([]);
		var id = w.RMS.VM.studentRecordsVM.targetID();

		x.get( _base + "org-affiliation/record/" + id ).done( function ( response ){
			if( response.length ){
				$.each( response, function(){
					me.organizationalAffiliationFields.push(new editOrganizationalAffiliationField(this));
				});
				
				$("#editOrgAffiliationModal").modal("show");
			}else{
				new PNotify({
					title: 'Warning!',
					text: 'No Absences Record Found!',
					type: 'warning',
					buttons: {
						sticker: false
					}
				});
			}
		});
	};



	me.updateRecord = function(){
		var data = ko.toJS(me.organizationalAffiliationFields())
		x.post( _base + "org-affiliation/update",{data}).done( function ( response ){
			if( response == "OK"){
				new PNotify({
					title: 'Success!',
					text: 'Updated!',
					type: 'success',
					buttons: {
						sticker: false
					}
				});
			}
		}).fail( function(){
			new PNotify({
				title: 'Whoops!',
				text: 'Something went wrong.',
				type: 'error',
				buttons: {
					sticker: false
				}
			});
		});
	};
	w.RMS.VM.organizationalAffiliationVM = me;
}( window, ko ));