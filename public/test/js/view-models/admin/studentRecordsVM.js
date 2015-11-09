;( function ( w, d, $, ko){
	"use strict";

	function closeModal( id ){
		$( id ).modal('hide');
	}

	var x = w.RMS.XHR, _base = w.RMS.baseUrl,
		studentRecordsVM = {
			studentFullInfo : ko.observableArray([]),
			targetID : ko.observable(),
			targetName: ko.observable(),
		}, me = studentRecordsVM, info, success;

	me.getFullInfo = function( id ){
		if( typeof info !== "undefined"){
			info.remove();
		}

		x.get( _base + "ajax-source/student/" + id ).done( function ( response ){
			me.studentFullInfo( response );
			me.targetID( id );
			$("#studentFullInfoModal").modal("show");
			
			
			// console.log( response );
		});

		
	};


	me.edit = function( id ) {
		var data = ko.utils.arrayFilter( w.RMS.VM.datas.students(), function( student ){
			return student.id == id;
		}), fullName = data[0].lname + ', ' + data[0].fname + ' ' + data[0].mname || '';

		me.targetID( id );
		me.targetName( fullName );
		$("#editMenuModal").modal("show");
	}

	me.studentFullname = ko.pureComputed( function() {
		var student =  me.studentFullInfo()[0];
		if( student ){
			var mname = student.mname || '';
			return student.lname + ', ' + student.fname + ' ' + mname;
		}
	});
	$("#studentFullInfoModal").on("hide.bs.modal", function(){
		$( this ).find(".modal-body").scrollTop(0);
	});

	me.archive = function( id ){

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
			    x.post( _base + "personal-info/update/" + id,{archived: 1}).done( function (response){
			if( response ){
				new PNotify({
					title: 'Success!',
					text: 'Record Archived!',
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



























		
	}
	w.RMS.VM.studentRecordsVM = me;

}( window, document, jQuery, ko ));