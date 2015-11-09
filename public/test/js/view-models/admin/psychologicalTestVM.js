;( function (w, ko){
	"use strict";

	var x = w.RMS.XHR, _base = w.RMS.baseUrl,
	 psychologicalTestVM = {
		student_id : ko.observable(''),
		psychologicalTestFields : ko.observableArray([])
	}, me = psychologicalTestVM;

	function psychologicalTestField(id){
		var obj = {
			student_id: id,
			date_taken : ko.observable(),
			name : ko.observable(),
			percentile : ko.observable(),
			remarks : ko.observable(),
		}
		return obj;
	}


	function editPsychologicalTestField(data){
		var d=data,obj = {
			id: d.id,
			date_taken :ko.observable(moment(d.absent_date).format('YYYY-MM-DD')),
			name : ko.observable(d.name),
			percentile : ko.observable(d.percentile),
			remarks : ko.observable(d.remarks),
		}
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
			if(me.psychologicalTestFields().length < 1){
				me.psychologicalTestFields([new psychologicalTestField(me.student_id().id)]);
			}else{
				ko.utils.arrayForEach(me.psychologicalTestFields(), function(field) {
					field.student_id = me.student_id().id;
				});
			}
		}else{
			me.psychologicalTestFields([]); 
		}
	});

	me.canAddField = ko.pureComputed( function() {
		if( me.psychologicalTestFields().length < 5){
			return true;
		}else{
			return false;
		}
	});
	me.addField = function(){
		me.psychologicalTestFields.push( new psychologicalTestField(me.student_id().id) );
	};

	me.canRemoveField = ko.pureComputed( function() {
		if( me.psychologicalTestFields().length !== 1){
			return true;
		}else{
			return false;
		}
	});
	me.removeField = function( field ){
		me.psychologicalTestFields.remove( field );
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
		    x.post( _base + "psycho-test/delete/"+ field.id).done( function ( response ){
				if( response > 0 ){
					me.psychologicalTestFields.remove( field );
					if( me.psychologicalTestFields().length == 0 ){
						$("#editPsychologicalTestModal").modal("hide");
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
		var data = ko.toJS(me.psychologicalTestFields());
		x.post( _base + "psycho-test/store", {
			data
		}).done( function ( response ){
			new PNotify({
				title: 'Success!',
				text: 'Psychological Test saved!',
				type: 'success',
				buttons: {
					sticker: false
				}
			});
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
		me.psychologicalTestFields([]);
		var id = w.RMS.VM.studentRecordsVM.targetID();

		x.get( _base + "psycho-test/record/" + id ).done( function ( response ){
			if( response.length ){
				$.each( response, function(){
					me.psychologicalTestFields.push(new editPsychologicalTestField(this));
				});
				
				$("#editPsychologicalTestModal").modal("show");
			}else{
				new PNotify({
					title: 'Warning!',
					text: 'No Psychological Test Records Found!',
					type: 'warning',
					buttons: {
						sticker: false
					}
				});
			}
		});
	};


	me.updateRecord = function(){
		var data = ko.toJS(me.psychologicalTestFields())
		x.post( _base + "psycho-test/update",{data}).done( function ( response ){
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
	w.RMS.VM.psychologicalTestVM = me;
}( window, ko ));