;(function( $ , ko){
	ko.bindingHandlers.dateTimePicker = {
    init: function (element, valueAccessor, allBindingsAccessor) {
        //initialize datepicker with some optional options
        var options = allBindingsAccessor().dateTimePickerOptions || {};
        $(element).datetimepicker(options);

        //when a user changes the date, update the view model
        ko.utils.registerEventHandler(element, "dp.change", function (event) {
            var value = valueAccessor();
            if (ko.isObservable(value)) {
                if (moment(event.date).isValid()) {
                   value(event.date.format(options.format));
                } else {
                    value(null);
                }
            }
        });



        ko.utils.domNodeDisposal.addDisposeCallback(element, function () {
            var picker = $(element).data("DateTimePicker");
            if (picker) {
                picker.destroy();
            }
        });
    },
    update: function (element, valueAccessor, allBindings, viewModel, bindingContext) {

        var picker = $(element).data("DateTimePicker");
        //when the view model is updated, update the widget
        if (picker) {
            var koDate = ko.utils.unwrapObservable(valueAccessor()) || null;
            
            //in case return from server datetime i am get in this form for example /Date(93989393)/ then fomat this
            //koDate = (typeof (koDate) !== 'object') ? null : koDate;

            picker.date(koDate);
        }
    }
};


}( jQuery, ko));