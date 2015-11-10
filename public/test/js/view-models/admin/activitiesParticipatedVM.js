;
(function(w, ko) {
	"use strict";

	var x = w.RMS.XHR,
		_base = w.RMS.baseUrl,
		activitiesParticipatedVM = {
			student_id: ko.observable(''),
			activityFields: ko.observableArray([])
		},
		me = activitiesParticipatedVM,
		success, error;

	function activityField(id) {
		var obj = {
			student_id: id,
			year_level: ko.observable(),
			activity_date: ko.observable(),
			activity: ko.observable(),
			sponsor: ko.observable(),
		}
		return obj;
	}

	function editAactivityField(data) {
		var d = data,
			obj = {
				id: d.id,
				year_level: ko.observable(d.year_level),
				activity_date: ko.observable(moment(d.activity_date).format('YYYY-MM-DD')),
				activity: ko.observable(d.activity),
				sponsor: ko.observable(d.sponsor),
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
	me.hasSelectedStudent = ko.pureComputed(function() {
		if (me.student_id()) {
			return true;
		} else {
			return false;
		}
	});

	me.student_id.subscribe(function() {
		if (me.student_id()) {
			if (me.activityFields().length < 1) {
				me.activityFields([new activityField(me.student_id())]);
			} else {
				ko.utils.arrayForEach(me.activityFields(), function(field) {
					field.student_id = me.student_id();
				});
			}
		} else {
			me.activityFields([]);
		}
	});

	me.canAddField = ko.pureComputed(function() {
		if (me.activityFields().length < 5) {
			return true;
		} else {
			return false;
		}
	});
	me.addField = function() {
		me.activityFields.push(new activityField(me.student_id()));
	};

	me.canRemoveField = ko.pureComputed(function() {
		if (me.activityFields().length !== 1) {
			return true;
		} else {
			return false;
		}
	});
	me.removeField = function(field) {
		me.activityFields.remove(field);
	}


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
			x.post(_base + "activity/delete/" + field.id).done(function(response) {
				if (response > 0) {
					me.activityFields.remove(field);
					if (me.activityFields().length == 0) {
						$("#editActivityModal").modal("hide");
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
	me.canSaveRecord = true;
	me.saveRecord = function() {
		var data = ko.toJS(me.activityFields());

		x.post(_base + "activity/store", {
			data
		}).done(function(response) {
			if (response == "OK") {
				new PNotify({
					title: 'Success!',
					text: 'Activity saved!',
					type: 'success',
					buttons: {
						sticker: false
					}
				});
				if (parseInt(localStorage['lastStudentAdded']) > 0) {
					w.location.href = 'add-counselling-record';
				}
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
		me.activityFields([]);
		var id = w.RMS.VM.studentRecordsVM.targetID();

		x.get(_base + "activity/record/" + id).done(function(response) {
			if (response.length) {
				$.each(response, function() {
					me.activityFields.push(new editAactivityField(this));
				});

				$("#editActivityModal").modal("show");
			} else {
				new PNotify({
					title: 'Warning!',
					text: 'No Activity Participated Records Found!',
					type: 'warning',
					buttons: {
						sticker: false
					}
				});
			}
		});
	};

	me.updateRecord = function() {
		var data = ko.toJS(me.activityFields())
		x.post(_base + "activity/update", {
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
	w.RMS.VM.activitiesParticipatedVM = me;
}(window, ko));