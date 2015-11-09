;( function ( w, d, $, ko){
	"use strict";

	function closeModal( id ){
		$( id ).modal('hide');
	}

	var x = w.RMS.XHR, _base = w.RMS.baseUrl,
		scholarshipVM = {
			name : ko.observable(),
			addMultiple : ko.observable(),
			updateID: ko.observable(),
		}, me = scholarshipVM, success, warning, error;

	me.prevent = function(){
		return false;
	}

	me.addScholarship = function(){
		x.post( _base + "scholarship/store",{
			name : me.name()
		}).done( function ( response ){
			w.RMS.VM.datas.scholarships.push(response);
			if( response != 0 ){
				if( !me.addMultiple() ){
					me.name( undefined );
					closeModal( "#addScholarshipModal" );
				}
				// me.current_college( undefined );
				me.name( undefined );
				if( typeof success !== "undefined"){
					success.remove();
				}
				success = new PNotify({
				    title: 'Success!',
				    text: 'New Scholarship added!',
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
				    text: 'Scholarship already exist!',
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
		x.get( _base + "scholarship/record/" + id ).done( function ( response ){
			me.name( response.name );
			me.updateID( response.id );
			$("#editScholarshipModal").modal("show");
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

	me.update = function(){
		var data = {
			name: me.name()
		}
		x.post( _base + "scholarship/update/" + me.updateID(),{data} ).done( function ( response ){
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

	$("#addScholarshipModal").on("hide.bs.modal", function(){
		me.name( undefined );
		me.addMultiple( undefined );
	});
	w.RMS.VM.scholarshipVM = me;
}( window, document, $, ko ));