;
(function(w, ko) {
	"use strict";

	function familyInfoField() {
		var obj = {
			member: ko.observable(),
			name: ko.observable(),
			address: ko.observable(),
			occupation: ko.observable(),
			educational_attainment: ko.observable(),
			contact_number: ko.observable(),
		}
		return obj;
	}

	function editFamilyInfoField(d) {
		var obj = {
			id: d.id,
			member: ko.observable(d.member),
			name: ko.observable(d.name),
			address: ko.observable(d.address),
			occupation: ko.observable(d.occupation),
			educational_attainment: ko.observable(d.educational_attainment),
			contact_number: ko.observable(d.contact_number),
		}
		return obj;
	}
	var x = w.RMS.XHR,
		_base = w.RMS.baseUrl,
		familyBackgroundVM = {
			student_id: ko.observable(),
			familyInfoFields: ko.observableArray([new familyInfoField()]),
			birth_order: ko.observable(),
			number_of_brothers: ko.observable(),
			number_of_sisters: ko.observable(),
			parent_marital_status: ko.observable(),
			others: ko.observable(),
			type_of_living: ko.observable(),
			family_income: ko.observable(),

			updateID: ko.observable(),
		},
		me = familyBackgroundVM,
		url = w.location.pathname,
		warning,
		lastSlash = url.lastIndexOf("/"),
		urlLen = url.length,
		targetID = parseInt(url.substr(lastSlash + 1, urlLen + 1)),
		hasValidID = false;

	w.onload = setTimeout(function() {
		var targetStudent = ko.utils.arrayFilter(w.RMS.VM.datas.students(), function(student) {
			return targetID == student.id;
		});

		if (targetStudent.length) {
			w.hasValidID = true;
		}

	}, 1100);

	// if( ! isNaN( targetID ) ){
	// 	setTimeout(function(){
	// 		var targetStudent = ko.utils.arrayFilter(w.RMS.VM.datas.students(), function( student ){
	// 		return student.id == targetID;
	// 	});

	// 	if( targetStudent.length ){
	// 		me.student_id( targetStudent );
	// 		console.log(me.student_id());
	// 	}
	// 	console.log( me.student_id() );
	// 	console.log( targetStudent );
	// 	me.student_id( targetStudent );
	// 	},1200)

	// }
	// console.log(targetStudent)
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

	me.addFamilyInfoField = function() {
		me.familyInfoFields.push(new familyInfoField());
	};

	me.removeField = function(thisField) {
		me.familyInfoFields.remove(thisField);
	}

	me.canAddField = ko.pureComputed(function() {
		if (me.familyInfoFields().length < 5) {
			return true;
		} else {
			return false;
		}
	});

	me.canRemoveField = ko.pureComputed(function() {
		if (me.familyInfoFields().length === 1) {
			return false;
		} else {
			return true;
		}
	});

	me.checkDuplicate = function(current) {
		if (me.familyInfoFields().length > 1 && current.member().length > 0) {
			var k = ko.utils.arrayFilter(me.familyInfoFields(), function(field) {
				return field.member() == current.member();
			});
			if (k.length > 1) {
				//alert("Can't add duplicate record for " + current.member() );
				if (typeof warning !== "undefined") {
					warning.remove();
				}

				if (!current.name()) {
					// console.log(3)
					me.familyInfoFields.remove(current);
				} else {
					$.each(k, function() {
						if (!this.name()) {
							me.familyInfoFields.remove(this);
							// console.log(1)
						} else if (this.name() == current.name()) {
							me.familyInfoFields.remove(this);
							// console.log(2)
						}
					});
				}

				warning = new PNotify({
					title: 'Warning!',
					text: "Can't add duplicate record for " + current.member(),
					type: 'warning',
					buttons: {
						sticker: false
					}
				});

			}
		}
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
			x.post(_base + "family-background/delete/" + field.id).done(function(response) {
				if (response > 0) {
					me.familyInfoFields.remove(field);
					if (me.familyInfoFields().length == 0) {
						$("#editFamilyInfoModal").modal("hide");
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

	}; //END 


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
		if (me.student_id() && me.birth_order() && me.parent_marital_status() && me.type_of_living()) {
			return true;

		} else {
			return false;
		}
	});

	me.saveRecord = function() {
		/*me.year_graduated = $("#year_graduated").val();
		me.attendance_date_from = $("#attendance_date_from").val();
		me.attendance_date_to = $("#attendance_date_to").val();*/
		var data = {
			student_id: me.student_id(),
			members: ko.toJS(me.familyInfoFields()),
			birth_order: me.birth_order(),
			number_of_brothers: me.number_of_brothers(),
			number_of_sisters: me.number_of_sisters(),
			parent_status: me.parent_marital_status(),
			others: me.others(),
			type_of_living: me.type_of_living(),
			family_income: me.family_income(),
		}

		x.post(_base + "family-background/store", {
			data
		}).done(function(res) {
			if (res) {
				new PNotify({
					title: 'Success!',
					text: 'Family Background Saved!',
					type: 'success',
					buttons: {
						sticker: false
					}
				});
				if (parseInt(localStorage['lastStudentAdded']) > 0) {
					w.location.href = 'add-academic-performance';
				}
			}

		});
	}
	me.edit = function() {
		// var i = new PNotify({
		// 	title : 'Processing...',
		// 	text : 'Getting required information.',
		// 	type : 'info',
		// 	buttons : {
		// 		sticker: false
		// 	}
		// });

		me.familyInfoFields([]);
		var id = w.RMS.VM.studentRecordsVM.targetID();

		x.get(_base + "family-background/record/" + id).done(function(response) {
			if (response.length) {
				if (response[0].members.length) {
					$.each(response[0].members, function() {
						me.familyInfoFields.push(new editFamilyInfoField(this));
					});
				} else {
					me.familyInfoFields([]);
				}

				var res = response[0];
				me.birth_order(res.birth_order);
				me.number_of_brothers(res.number_of_brothers);
				me.number_of_sisters(res.number_of_sisters);
				me.parent_marital_status(res.parent_status);
				me.others(res.others);
				me.type_of_living(res.type_of_living);
				me.family_income(res.family_income);

				me.updateID(res.id);
				//i.remove();
				$("#editFamilyInfoModal").modal("show");
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
		var data = {
			members: ko.toJSON(me.familyInfoFields()),
			birth_order: me.birth_order(),
			number_of_brothers: me.number_of_brothers(),
			number_of_sisters: me.number_of_sisters(),
			parent_status: me.parent_marital_status(),
			others: me.others(),
			type_of_living: me.type_of_living(),
			family_income: me.family_income(),
		};
		x.post(_base + "family-background/update/" + me.updateID(), {
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

	$("#editFamilyInfoModal").on("hide.bs.modal", function() {
		$(this).find(".modal-body").scrollTop(0);
	})

	$(window).load(function() {
		setTimeout(function() {
			var id = parseInt(localStorage['lastStudentAdded']);
			me.student_id(id);
		}, 600);
	});
	w.RMS.VM.familyBackgroundVM = me;
}(window, ko));