;
(function(w, ko) {
	"use strict";

	var x = w.RMS.XHR,
		_base = w.RMS.baseUrl,
		absencesRecordVM = {
			student_id: ko.observable(),
			absencesRecordFields: ko.observableArray([])
		},
		me = absencesRecordVM,
		error, success;

	function absencesRecordField(id) {
		var obj = {
			student_id: id,
			year_level: ko.observable(),
			absent_date: ko.observable(),
			subject: ko.observable(),
			reason: ko.observable(),
		}
		return obj;
	}

	function editAbsencesRecordField(data) {
		var d = data,
			obj = {
				id: d.id,
				year_level: ko.observable(d.year_level),
				absent_date: ko.observable(moment(d.absent_date).format('YYYY-MM-DD')),
				subject: ko.observable(d.subject),
				reason: ko.observable(d.reason),
			};

		return obj;
	}
	me.hasSelectedStudent = ko.pureComputed(function() {
		if (me.student_id()) {
			return true;
		} else {
			return false;
		}
	});
	me.studentFullName = function(s) {
		return s.lname + ', ' + s.fname + ' ' + s.mname;
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

	me.student_id.subscribe(function() {
		if (me.student_id()) {
			if (me.absencesRecordFields().length < 1) {
				me.absencesRecordFields([new absencesRecordField(me.student_id())]);
			} else {
				ko.utils.arrayForEach(me.absencesRecordFields(), function(field) {
					field.student_id = me.student_id();
				});
			}
		} else {
			me.absencesRecordFields([]);
		}
	});

	me.canAddField = ko.pureComputed(function() {
		if (me.absencesRecordFields().length < 5) {
			return true;
		} else {
			return false;
		}
	});
	me.addField = function() {
		me.absencesRecordFields.push(new absencesRecordField(me.student_id()));
	};

	me.canRemoveField = ko.pureComputed(function() {
		if (me.absencesRecordFields().length !== 1) {
			return true;
		} else {
			return false;
		}
	});
	me.removeField = function(field) {
		me.absencesRecordFields.remove(field);
	};
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
			x.post(_base + "absent/delete/" + field.id).done(function(response) {
				if (response > 0) {
					me.absencesRecordFields.remove(field);
					if (me.absencesRecordFields().length == 0) {
						$("#editAbsencesModal").modal("hide");
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


	me.canSaveRecord = true;
	me.saveRecord = function() {
		var data = ko.toJS(me.absencesRecordFields());

		x.post(_base + "absent/store", {
			data
		}).done(function(response) {
			if (response == "OK") {
				new PNotify({
					title: 'Success!',
					text: 'Absent Record saved!',
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



	me.edit = function() {
		me.absencesRecordFields([]);
		var id = w.RMS.VM.studentRecordsVM.targetID();

		x.get(_base + "absent/record/" + id).done(function(response) {
			if (response.length) {
				$.each(response, function() {
					me.absencesRecordFields.push(new editAbsencesRecordField(this));
				});

				$("#editAbsencesModal").modal("show");
			} else {
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



	me.updateRecord = function() {
		var data = ko.toJS(me.absencesRecordFields())
		x.post(_base + "absent/update", {
			data
		}).done(function(response) {
			if (response == "OK") {
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
		}, 600);
	});
	w.RMS.VM.absencesRecordVM = me;
}(window, ko));