;( function ( w, d, $, ko){
	"use strict";

	function closeModal( id ){
		$( id ).modal('hide');
	}

	var x = w.RMS.XHR, _base = w.RMS.baseUrl,
		courseVM = {
			current_college : ko.observable(),
			name : ko.observable(),
			addMultiple : ko.observable(),
			current_modal : ko.observable(),
			updateID:ko.observable(),
			colleges: ko.observableArray([]),

			editCollege: ko.observable(),
			editName: ko.observable(),
		}, me = courseVM, success, warning, error;

	$("#addCourseModal").on("show.bs.modal", function(){
		me.current_college( w.RMS.VM.studentInfoVM.college() );
		me.current_modal("#addCourseModal");
	});
	$("#mainAddCourseModal").on("show.bs.modal", function(){
		me.current_college( undefined );
		me.current_modal("#mainAddCourseModal");
	});

	me.prevent = function(){
		return false;
	}

	me.addCourse = function(){
		x.post( _base + "course/store",{
			college_id :  me.current_college().id,
			name : me.name()
		}).done( function ( response ){
			w.RMS.VM.datas.courses.push(response);
			if( response != 0 ){
				if( !me.addMultiple() ){
					//w.RMS.VM.studentInfoVM.college(undefined);
					me.current_college( undefined );
					me.name( undefined );
					closeModal( me.current_modal() );
				}
				// me.current_college( undefined );
				me.name( undefined );
				if( typeof success !== "undefined"){
					success.remove();
				}
				success = new PNotify({
				    title: 'Success!',
				    text: 'New Course added!',
				    type: 'success',
				    buttons: {
				    	sticker: false
				    }
				});
			}else{
				if( typeof warning !== "undefined"){
					warning.remove();
				}
				warning = new PNotify({
				    title: 'Warning!',
				    text: 'Course already exist!',
				    type: 'warning',
				    buttons: {
				    	sticker: false
				    }
				});
			}
		}).fail( function ( ){
			if( typeof error !== "undefined"){
				error.remove();
			}
			error = new PNotify({
				    title: 'Whoops!',
				    text: 'Something went wrong!',
				    type: 'error',
				    buttons: {
				    	sticker: false
				    }
				});
		});
	}

	me.edit = function( id ){
		x.get( _base + "course/record/" + id ).done( function ( response ){
			me.updateID( response.id );
			
			me.editName( response.name );

			// me.colleges( w.RMS.VM.datas.colleges() );
			me.editCollege( response.college_id );
			$("#editCourseModal").modal("show");
		}).fail( function() {
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

	me.update = function(){
		var data = {
			college_id: me.editCollege(),
			name: me.editName()
		};
		x.post( _base + "course/update/" + me.updateID(), {
			data
		}).done( function ( response ){
			if( response ){
				new PNotify({
					title: 'Success!',
					text: 'Updated!',
					type: 'success',
					buttons: {
						sticker: false
					}
				});
			}
		}).fail( function() {
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
	$("#addCourseModal").on("hide.bs.modal", function(){
		//w.RMS.VM.studentInfoVM.college(undefined);
	});
	w.RMS.VM.courseVM = me;

}( window, document, jQuery, ko ));