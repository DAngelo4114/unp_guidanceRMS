;( function (w, ko){
	"use strict";

	var x = w.RMS.XHR, _base = w.RMS.baseUrl,
	counsellingRecordVM = {
		student_id : ko.observable(),
		counsellingRecordFields : ko.observableArray([]),
	}, me = counsellingRecordVM, success, error;

	function counsellingRecordField( id ){
		var obj = {
			student_id: id,
			year_level : ko.observable(),
			date : ko.observable(),
			problem : ko.observable(),
			action : ko.observable(),
		}
		return obj;
	}

	function editCounsellingRecordField( data ){
		var d = data, obj = {
			id: d.id,
			year_level : ko.observable(d.year_level),
			date : ko.observable(moment(d.date).format('YYYY-MM-DD')),
			problem : ko.observable(d.problem),
			action : ko.observable(d.action),
		};

		return obj;
	}

	me.hasSelectedStudent = ko.pureComputed( function(){
		if( me.student_id() ){
			return true;
		}else{
			return false;
		}
	});

	me.student_id.subscribe( function() {
		if( me.student_id() ){
			if(me.counsellingRecordFields().length < 1){
				me.counsellingRecordFields([new counsellingRecordField(me.student_id().id)]);
			}else{
				ko.utils.arrayForEach(me.counsellingRecordFields(), function(field) {
					field.student_id = me.student_id().id;
				});
			}
		}else{
			me.counsellingRecordFields([]); 
		}
	});

	me.canAddField = ko.pureComputed( function() {
		if( me.counsellingRecordFields().length < 5){
			return true;
		}else{
			return false;
		}
	});
	me.addField = function(){
		me.counsellingRecordFields.push( new counsellingRecordField(me.student_id().id) );
	};

	me.canRemoveField = ko.pureComputed( function() {
		if( me.counsellingRecordFields().length !== 1){
			return true;
		}else{
			return false;
		}
	});
	me.removeField = function( field ){
		me.counsellingRecordFields.remove( field );
	}

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
		    x.post( _base + "counselling/delete/"+ field.id).done( function ( response ){
				if( response > 0 ){
					me.counsellingRecordFields.remove( field );
					if( me.counsellingRecordFields().length == 0 ){
						$("#editCounsellingsModal").modal("hide");
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
			if(me.student_id()){
				return s.lname + ', ' + s.fname + ' ' +s.mname;
			}else{
				return "(No Student Selected)";
			}
		});
	me.canSaveRecord = true;
	me.saveRecord = function(){
		var data = ko.toJS(me.counsellingRecordFields());
		
		x.post( _base + "counselling/store" , {
			data
		}).done( function ( response ){

			if( response == "OK") {
				new PNotify({
					title: 'Success!',
					text: 'Counselling Record saved!',
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
	}


	me.edit = function(){
		me.counsellingRecordFields([]);
		var id = w.RMS.VM.studentRecordsVM.targetID();

		x.get( _base + "counselling/record/" + id ).done( function ( response ){
			if( response.length ){
				$.each( response, function(){
					me.counsellingRecordFields.push(new editCounsellingRecordField(this));
				});
				
				$("#editCounsellingsModal").modal("show");
			}else{
				new PNotify({
					title: 'Warning!',
					text: 'No Counselling Records Found!',
					type: 'warning',
					buttons: {
						sticker: false
					}
				});
			}
		});
	};


	me.updateRecord = function(){
		var data = ko.toJS(me.counsellingRecordFields())
		x.post( _base + "counselling/update",{data}).done( function ( response ){
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


	w.RMS.VM.counsellingRecordVM = me;
}( window, ko ));