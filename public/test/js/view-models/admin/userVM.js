(function(w, $, ko) {

	"use strict";

	var x = w.RMS.XHR,
		_base = w.RMS.baseUrl,
		userVM = {
			role: ko.observable(),
			name: ko.observable(),
			password: ko.observable(),
			passwordRetype: ko.observable(),
			userInfo: ko.observableArray(),
			updateID: ko.observable(),
		},
		me = userVM,
		success, warning, error;

	me.canAdd = ko.pureComputed(function() {
		if (me.password()) {
			if (me.password() == me.passwordRetype()) {
				return true;
			}

			return false;
		}

	});
	me.add = function() {
		var data = {
			role: me.role(),
			username: me.name(),
			password: me.password(),

		}

		x.post(_base + "user/store", {
			data
		}).done(function(response) {
			if (response) {
				me.role(undefined);
				me.name(undefined);
				me.password(undefined);
				new PNotify({
					title: 'Success!',
					text: 'User added!',
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
	me.edit = function(id) {
		x.get(_base + "user/info/" + id).done(function(res) {
			if (res) {

				me.userInfo(res[0]);
				$("#editUserModal").modal("show");
				me.updateID(id);
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

	me.update = function() {
		var data = me.userInfo();

		x.post(_base + "user/update/" + me.updateID(), data).done(function(res) {
			if (res) {
				new PNotify({
					title: 'Success!',
					text: 'User deleted!',
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

	me.deleteUser = function(id) {

		(new PNotify({
			title: 'Confirmation Needed',
			text: 'Delete user?',
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
			x.post(_base + "user/delete/" + id, {}).done(function(response) {
				if (response) {
					$("#tr_" + id).fadeOut();
					new PNotify({
						title: 'Success!',
						text: 'User deleted!',
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



	w.RMS.VM.userVM = me;

}(window, jQuery, ko));