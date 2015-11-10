;
(function(w, ko) {
	"use strict";

	function field(_id, _level) {
		var level = _level || '',
			obj = {
				student_id: _id,
				level: ko.observable(level),
				school_name_address: ko.observable(),
				degree_course: ko.observable(),
				year_graduated: ko.observable(),
				date_from: ko.observable(),
				date_to: ko.observable(),
				general_average: ko.observable(),
				awards: ko.observable(),
			}
		return obj;
	}

	function editField(d) {
		var obj = {
			id: d.id,
			level: d.level,
			school_name_address: d.school_name_address,
			degree_course: d.degree,
			year_graduated: d.year_graduated,
			date_from: d.date_from,
			date_to: d.date_to,
			general_average: d.general_average,
			awards: d.awards,
		}
		return obj;
	}

	var x = w.RMS.XHR,
		_base = w.RMS.baseUrl,
		educationalBackgroundVM = {
			student_id: ko.observable(),
			level: ko.observable(),
			degree_course: ko.observable(),
			school_name_address: ko.observable(),
			year_graduated: ko.observable(),
			attendance_date_from: ko.observable(),
			attendance_date_to: ko.observable(),
			general_average: ko.observable(),
			awards: ko.observable(),
			course: ko.observable(),
			year: ko.observable(),
			section: ko.observable(),
			unp_cat_rating: ko.observable(),
			scholarship: ko.observable(),
			isCollege: ko.observable(),

			fields: ko.observableArray([]),
		},
		me = educationalBackgroundVM,
		success, warning, error;
	me.hasSelectedStudent = ko.pureComputed(function() {
		if (me.student_id()) {
			return true;
		} else {
			return false;
		}
	});
	me.student_id.subscribe(function() {
		if (me.student_id()) {
			me.fields([new field(me.student_id())]);
		}
		// localStorage['lastStudentAdded'] = ko.toJSON(me.student_id());
	});

	me.studentFullname = function(s) {
		return s.lname + ', ' + s.fname + ' ' + s.mname;
	};
	me.isCollege = ko.computed(function() {
		if (me.level() === "College" || me.level() === "If Transferee/Shifter") {
			return true;
		} else {
			return false;
		}
	});

	me.level.subscribe(function() {
		if (me.level() !== "College" || me.level() !== "If Transferee/Shifter") {
			me.degree_course("None");
		}
	});
	me.addField = function() {
		me.fields.push(new field(me.student_id()));
	};
	me.removeField = function(thisField) {
		me.fields.remove(thisField);
	}
	me.canAddField = ko.pureComputed(function() {
		if (me.fields().length < 5) {
			return true;
		} else {
			return false;
		}
	});
	me.canRemoveField = ko.pureComputed(function() {
		if (me.fields().length === 1) {
			return false;
		} else {
			return true;
		}
	});


	me.removeFieldFromDB = function(field) {
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
			x.post(_base + "educational-background/delete/" + field.id).done(function(response) {
				if (response > 0) {
					me.fields.remove(field);
					if (me.fields().length == 0) {
						$("#editEducationalModal").modal("hide");
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
		}).on('pnotify.cancel', function() {

		});

	};


	me.selectedStudent = ko.pureComputed(function() {
		var s = me.student_id();
		if (me.student_id()) {
			var student = ko.utils.arrayFilter(w.RMS.VM.datas.students(), function(student) {
				return student.id == me.student_id();
			});
			student = student[0];
			return student.lname + ", " + student.fname + " " + student.mname;
		} else {
			return "(No Student Selected)"
		}
	});
	me.canSaveRecord = ko.pureComputed(function() {
		if (me.student_id() && me.level() && me.school_name_address() &&
			me.attendance_date_from() && me.attendance_date_to()) {
			return true;

		} else {
			return false;
		}
	});
	me.saveRecord = function() {
		var data = ko.toJS(me.fields());
		console.log(data);
		x.post(_base + "educational-background/store", {
			data
		}).done(function(res) {
			if (typeof success !== "undefined") {
				success.remove();
			}

			if (res == "OK") {
				me.fields([]);
				me.student_id(undefined);
				success = new PNotify({
					title: 'Success!',
					text: 'New Educational Background Record Added!',
					type: 'success',
					buttons: {
						sticker: false
					}
				});
				if (parseInt(localStorage['lastStudentAdded']) > 0) {
					w.location.href = 'add-family-background';
				}
			}

		}).fail(function() {
			if (typeof error !== "undefined") {
				error.remove();
			}
			error = new PNotify({
				title: 'Whoops!',
				text: 'Something Went Wrong!',
				type: 'error',
				buttons: {
					sticker: false
				}
			});
		});
	}

	me.edit = function() {
		me.fields([]);
		var id = w.RMS.VM.studentRecordsVM.targetID();

		x.get(_base + "educational-background/record/" + id).done(function(response) {
			if (response.length) {
				$.each(response, function() {
					me.fields.push(new editField(this));
				});

				$("#editEducationalModal").modal("show");


				//me.updateID( res.id );

			} else {
				new PNotify({
					title: 'Warning!',
					text: 'No Educational Background Records Found!',
					type: 'warning',
					buttons: {
						sticker: false
					}
				});
			}
		});
	};

	me.updateRecord = function() {
		var data = ko.toJS(me.fields());
		x.post(_base + "educational-background/update", {
			data
		}).done(function(response) {
			if (response > 0) {
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
	};
	$(window).load(function() {
		setTimeout(function() {
			var id = parseInt(localStorage['lastStudentAdded']);
			me.student_id(id);
			me.fields([
				new field(me.student_id(), 'Elementary'),
				new field(me.student_id(), 'Secondary')
			]);
		}, 600);
	});
	w.RMS.VM.educationalBackgroundVM = me;
}(window, ko));