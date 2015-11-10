;
(function(w, d, $, ko) {
	"use strict";

	function presentAddressField() {
		var obj = {
			year_level: ko.observable(),
			address: ko.observable(),
		}
		return obj;
	}

	function dormField() {
		var obj = {
			year_level: ko.observable(),
			address: ko.observable(),
		}
		return obj;
	}

	var x = w.RMS.XHR,
		_base = w.RMS.baseUrl,
		studentInfoVM = {
			school_id: ko.observable(),
			unp_cat_rating: ko.observable(),
			college: ko.observable(),
			course_id: ko.observable(),
			year_level: ko.observable(),
			section: ko.observable(),
			scholarship_id: ko.observable(),
			lname: ko.observable(),
			fname: ko.observable(),
			mname: ko.observable(),
			birthdate: ko.observable(),
			age: ko.observable(),
			place_of_birth: ko.observable(),
			citizenship: ko.observable(),
			sex: ko.observable(),
			civil_status: ko.observable('Single'),
			date_of_marriage: ko.observable(),
			height: ko.observable(),
			weight: ko.observable(),
			bloodtype: ko.observable(),
			contact_number: ko.observable(),
			email: ko.observable(),
			illness: ko.observable(),
			religion: ko.observable(),
			ethnic: ko.observable(),
			disability: ko.observable(),
			home_address: ko.observable(),

			dorms: ko.observableArray([]),
			present_addresses: ko.observableArray([new presentAddressField()]),
			canSave: ko.observable(),
			currentRecord: ko.observableArray([]),
			editCollege: ko.observable(),
			editCourse: ko.observable(),

			updateRecord: ko.observable(),
			updateID: ko.observable(),
		},
		success, warning, error,
		me = studentInfoVM;
	me.hasSelectedStudent = ko.pureComputed(function() {
		if (me.student_id()) {
			return true;
		} else {
			return false;
		}
	});
	me.checkSchoolID = function() {

		setTimeout(function() {
			x.post(_base + "personal-info/test", {
				school_id: me.school_id()
			}).done(function(response) {
				if (response == 1) { //means has existing record 
					if (typeof warning !== "undefined") {
						warning.remove();
					}
					warning = new PNotify({
						title: 'Warning!',
						text: me.school_id() + ' School ID already exist!',
						type: 'warning',
						buttons: {
							sticker: false
						}
					});
					me.canSave(false);
				} else {
					me.canSave(true);
				}
			}).fail(function() {
				if (typeof error !== "undefined") {
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
		}, 300);
	}

	me.selectedCollegeCourses = ko.pureComputed(function() {
		if (me.college()) {
			var courses = ko.utils.arrayFilter(w.RMS.VM.datas.courses(), function(course) {
				return me.college().id == course.college_id;
			});

			var collegeName = me.college().name.length > 5 ? me.college().name.substr(0, 5) + "..." : me.college().name;
			if (courses.length) {
				return courses;
			} else {
				if (typeof error !== "undefined") {
					error.remove();
				}
				error = new PNotify({
					title: 'Whoops!',
					text: 'No courses available!',
					confirm: {
						confirm: true,

						buttons: [{
							text: 'Add course to ' + collegeName,
							addClass: 'btn-default',
							addAttribute: 'fuck',
							click: function(notice) {
								notice.remove();

								$("#addCourseModal").modal('show');

							}
						}]
					},
					buttons: {
						sticker: false
					},
					type: 'error'
				});
				return;
			}
		}
	});

	me.editCourses = ko.pureComputed(function() {
		if (me.editCollege()) {
			var courses = ko.utils.arrayFilter(w.RMS.VM.datas.courses(), function(course) {
				return me.editCollege() == course.college_id;
			});
			return courses;
		}
	});

	me.addPresentAddressField = function() {
		this.present_addresses.push(new presentAddressField());
	}

	me.removePresentAddressField = function(field) {
		me.present_addresses.remove(field);
	}

	me.canAddPresentAddressField = ko.computed(function() {
		if (me.present_addresses().length < 4) {
			return true;
		} else {
			return false;
		}
	});

	me.canRemovePresentAddressField = ko.computed(function() {
		if (me.present_addresses().length > 1) {
			return true;
		} else {
			return false;
		}
	});


	me.birthdate.subscribe(function() {
		if (typeof me.birthdate() !== "undefined") {
			me.age(moment().diff(me.birthdate(), 'years'));
		}
	});

	me.canAddDateOfMarriage = ko.computed(function() {

		if (me.civil_status() !== "Single") {
			return true;
		}

		return;

	});

	me.civil_status.subscribe(function() {
		if (me.civil_status() === "Single") {
			me.date_of_marriage(null);
		}
	});
	/***********************************************************/
	me.addDormField = function() {
		this.dorms.push(new dormField());
	}

	me.removeDormField = function(field) {
		me.dorms.remove(field);
	}

	me.canAddDormField = ko.computed(function() {
		if (me.dorms().length < 4) {
			return true;
		} else {
			return false;
		}
	});

	me.canRemoveDormField = ko.computed(function() {
		// if(me.dorms().length > 1){
		// 	return true;
		// }else{
		// 	return false;
		// }
		return true;
	});
	me.fullName = ko.pureComputed(function() {
		var s = me;
		if (s.lname() && s.fname()) {
			if (s.mname()) {
				return s.lname() + ", " + s.fname() + " " + s.mname();
			} else {
				return s.lname() + ", " + s.fname();
			}
		} else {
			return ""
		}
	});

	me.test = function(e) {

		var data = {
			school_id: me.school_id(),
			unp_cat_rating: me.unp_cat_rating(),
			college_id: me.college().id,
			course_id: me.course_id(),
			year_level: me.year_level(),
			section: me.section(),
			scholarship_id: me.scholarship_id(),
			lname: me.lname(),
			fname: me.fname(),
			mname: me.mname(),
			birthdate: me.birthdate(),
			age: me.age(),
			place_of_birth: me.place_of_birth(),
			citizenship: me.citizenship(),
			sex: me.sex(),
			civil_status: me.civil_status(),
			date_of_marriage: me.date_of_marriage(),
			height: me.height(),
			weight: me.weight(),
			bloodtype: me.bloodtype(),
			contact_number: me.contact_number(),
			email: me.email(),
			illness: me.illness(),
			religion: me.religion(),
			ethnic: me.ethnic(),
			disability: me.disability(),
			home_address: me.home_address(),

			dorms: ko.toJS(me.dorms()),
			present_addresses: ko.toJS(me.present_addresses()),
		};
		x.post(_base + "personal-info/store", data).done(function(insertID) {

			me.school_id(undefined);
			me.unp_cat_rating(undefined);
			me.college(undefined);
			me.course_id(undefined);
			me.year_level(undefined);
			me.section(undefined);
			me.scholarship_id(undefined);
			me.lname(undefined);
			me.fname(undefined);
			me.mname(undefined);
			me.birthdate(undefined);
			me.age(undefined);
			me.place_of_birth(undefined);
			me.citizenship(undefined);
			me.sex(undefined);
			me.civil_status(undefined);
			me.date_of_marriage(undefined);
			me.height(undefined);
			me.weight(undefined);
			me.bloodtype(undefined);
			me.contact_number(undefined);
			me.email(undefined);
			me.illness(undefined);
			me.religion(undefined);
			me.ethnic(undefined);
			me.disability(undefined);
			me.home_address(undefined);
			me.present_addresses([new presentAddressField()]);
			me.dorms([]);

			//If PNotify success exist, remove it to avoid duplicate
			if (typeof success !== "undefined") {
				success.remove();
			}
			success = new PNotify({
				title: 'Success!',
				text: 'New Student Record Added!',
				type: 'success',
				buttons: {
					sticker: false
				}
			});

			localStorage['lastStudentAdded'] = insertID;
			w.location.href = 'add-educational-background';
		}).fail(function() {
			if (typeof error !== "undefined") {
				error.remove();
			}
			error = new PNotify({
				title: 'Whoops!',
				text: 'Something terrible happened!',
				type: 'error',
				buttons: {
					sticker: false
				}
			});
		});
	}



	me.edit = function() {
		var i = new PNotify({
			title: 'Processing...',
			text: 'Getting required information.',
			type: 'info',
			buttons: {
				sticker: false
			}
		});
		var id = w.RMS.VM.studentRecordsVM.targetID();

		x.get(_base + "personal-info/record/" + id).done(function(r) {

			me.school_id(r.school_id);
			me.unp_cat_rating(r.unp_cat_rating);
			me.scholarship_id(r.scholarship_id);
			me.editCollege(r.college_id);
			me.editCourse(r.course_id);
			me.year_level(r.year_level);
			me.section(r.section);

			me.lname(r.lname);
			me.fname(r.fname);
			me.mname(r.mname);

			me.birthdate(r.birthdate);
			me.place_of_birth(r.place_of_birth);

			me.sex(r.sex);
			me.civil_status(r.civil_status);
			me.citizenship(me.citizenship);

			me.date_of_marriage(r.date_of_marriage);

			me.height(r.height);
			me.weight(r.weight);
			me.bloodtype(r.bloodtype);

			me.contact_number(r.contact_number);
			me.email(r.email);
			me.illness(r.illness);

			me.religion(r.religion);
			me.ethnic(r.ethnic);
			me.disability(r.disability);

			me.home_address(r.home_address);

			var pAdd = !r.present_addresses ? [new presentAddressField()] : r.present_addresses,
				dorms = !r.dorms ? [] : r.dorms;
			me.present_addresses(pAdd);

			me.dorms(dorms);

			me.updateID(r.id);
			i.remove();
			$("#editPersonalModal").modal("show");

		});
	};

	me.updateRecord = function() {

		var data = {
			school_id: me.school_id(),
			unp_cat_rating: me.unp_cat_rating(),
			college_id: me.editCollege(),
			course_id: me.editCourse(),
			year_level: me.year_level(),
			section: me.section(),
			scholarship_id: me.scholarship_id(),
			lname: me.lname(),
			fname: me.fname(),
			mname: me.mname(),
			birthdate: me.birthdate(),
			age: me.age(),
			place_of_birth: me.place_of_birth(),
			citizenship: me.citizenship(),
			sex: me.sex(),
			civil_status: me.civil_status(),
			date_of_marriage: me.date_of_marriage(),
			height: me.height(),
			weight: me.weight(),
			bloodtype: me.bloodtype(),
			contact_number: me.contact_number(),
			email: me.email(),
			illness: me.illness(),
			religion: me.religion(),
			ethnic: me.ethnic(),
			disability: me.disability(),
			home_address: me.home_address(),

			present_addresses: ko.toJSON(me.present_addresses()),
			dorms: ko.toJSON(me.dorms()),

		};
		var info = new PNotify({
			title: 'Updating...',
			text: 'Please wait.',
			type: 'info',
			buttons: {
				sticker: false
			}
		});
		x.post(_base + "personal-info/update/" + me.updateID(), data).done(function(response) {
			if (response) {
				info.remove();
				new PNotify({
					title: 'Success!',
					text: 'Updated!',
					type: 'success',
					buttons: {
						sticker: false
					}
				});
			}
		}).fail(function() {
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

	var d = w.RMS.VM.datas;

	w.RMS.VM.studentInfoVM = me;

}(window, document, $, ko));