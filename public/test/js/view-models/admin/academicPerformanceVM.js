;( function (w, ko){
	"use strict";

	function academicPerformanceField(){
		
		var obj = {
			year_level : ko.observable(),
			semester : ko.observable(),
			remark : ko.observable(),
			subject : ko.observable(),
		}
		return obj;
	}

	function editAcademicPerformanceField(data){
		
		var d = data, obj = {
			id: d.id,
			year_level : ko.observable(d.year_level),
			semester : ko.observable(d.semester),
			remark : ko.observable(d.remark),
			subject : ko.observable(d.subject),
		}
		return obj;
	}


	var x = w.RMS.XHR, _base = w.RMS.baseUrl,
		academicPerformanceVM ={
			student_id : ko.observable(),
			academicPerformanceFields: ko.observableArray([new academicPerformanceField()]),
		}, me = academicPerformanceVM;

	me.canAddField = ko.pureComputed( function(){
		if(me.academicPerformanceFields().length < 15){
			return true;
		}else{
			return false;
		}
	});

	me.addField = function(){
		me.academicPerformanceFields.push(new academicPerformanceField());
	}

	me.canRemoveField = ko.pureComputed( function() {
		if(me.academicPerformanceFields().length !== 1){
			return true
		}else{
			return false;
		}
	});

	me.removeField = function( field ){
		me.academicPerformanceFields.remove( field );
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
		    x.post( _base + "academic-performance/delete/"+ field.id).done( function ( response ){
				if( response > 0 ){
					me.academicPerformanceFields.remove( field );
					if( me.academicPerformanceFields().length == 0 ){
						$("#editAcademicsModal").modal("hide");
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

	me.canSaveRecord = ko.pureComputed( function() {
		if(me.student_id() &&  me.academicPerformanceFields()){
			return true;

		}else{
			return false;
		}
	});
	
	me.saveRecord = function(){
		/*me.year_graduated = $("#year_graduated").val();
		me.attendance_date_from = $("#attendance_date_from").val();
		me.attendance_date_to = $("#attendance_date_to").val();*/
		$.each(me.academicPerformanceFields(), function(){
			this.student_id = me.student_id().id;
		});
		var data = ko.toJS(me.academicPerformanceFields());
		
		x.post( _base + "academic-performance/store",{data}).done(function(res){
			if(res == "OK"){
				new PNotify({
					title: 'Success!',
					text: 'Academic Performance added!',
					type: 'success'
				});
			}
		});
	};

	me.edit = function(){
		me.academicPerformanceFields([]);
		var id = w.RMS.VM.studentRecordsVM.targetID();

		x.get( _base + "academic-performance/record/" + id ).done( function ( response ){
			if( response.length ){
				$.each( response, function(){
					me.academicPerformanceFields.push(new editAcademicPerformanceField(this));
				});
				
				$("#editAcademicsModal").modal("show");
			}else{
				new PNotify({
					title: 'Warning!',
					text: 'No Academic Performance Records Found!',
					type: 'warning',
					buttons: {
						sticker: false
					}
				});
			}
		});
	};



	me.updateRecord = function(){
		var data = ko.toJS(me.academicPerformanceFields())
		x.post( _base + "academic-performance/update",{data}).done( function ( response ){
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
	w.RMS.VM.academicPerformanceVM = academicPerformanceVM;
}( window, ko));