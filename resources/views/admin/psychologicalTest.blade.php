@extends('layout.admin.main')

@section('content')
<div id="page-wrapper">
@include('partials.admin.navBar')
<div style="padding-top: 7% !important;"></div>
	<div data-bind = "with: psychologicalTestVM" class="row">		
		<form data-bind = "submit: saveRecord" id = "psychology-test"  action="" class="form-horizontal">
			<div class="panel panel-primary">
				<div class="panel-heading">IV. Psychology Test Taken Form</div>
				<div class="panel-body">
					<div class="form-group">
						<div class="col-md-6">
							<label for="" class="text-primary">Select Student</label>
							<select data-bind = "options: $root.datas.students, optionsText: function(s){ return s.lname + ', ' + s.fname + ' ' +s.mname; }, optionsCaption:'Select Student',value: student_id" class="form-control">
							</select>
						</div>
					</div>
					<div data-bind = "style :{display : !student_id() ? 'none' : 'block'}">
						<ol data-bind="foreach: psychologicalTestFields" >
							<li class="form-group">
								<div class="col-md-2">
									<label for="" class="text-primary">Date</label>
									<input data-bind = "dateTimePicker: date_taken, dateTimePickerOptions:{format:'YYYY-MM-DD', maxDate: moment()}" class="form-control" required>
								</div>
								<div class="col-md-4">
									<label for="" class="text-primary">Test</label>
									<input data-bind ="textInput: name" type="text" class="form-control" required>
								</div>
								<div class="col-md-2">
									<label for="" class="text-primary">Percentile</label>
									<input data-bind="textInput: percentile" type="number" min = "1" step = ".1" class="form-control text-center" required>
								</div>
								<div class="col-md-3">
									<label for="" class="text-primary">Remarks</label>
									<input data-bind="textInput: remarks" type="text" class="form-control" required>
								</div>
								<div class="col-md-1">
									<label for=""></label>
									<button data-bind = "enable: $parent.canRemoveField, click: $parent.removeField" type="button" class="btn btn-danger btn-xs">Remove</button>
								</div>
							</li>	
						</ol>
						<div class="form-group">
							<div class="col-md-12">
								<label for=""></label>
								<button data-bind = "enable: canAddField, click: addField" class="btn btn-primary btn-sm" type="button">Add Psychological Test Field</button>
							</div>
						</div>
					
						<div class="form-group">
							<div class="col-md-12">
								<label for="" class=""></label>
									<button data-bind = "enable: canSaveRecord" type="submit" class="btn btn-primary btn-block">Save Record for - <span data-bind="text: selectedStudent" ></span></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

@stop