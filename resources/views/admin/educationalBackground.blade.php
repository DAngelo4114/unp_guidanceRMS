@extends('layout.admin.main')

@section('content')
<div id="page-wrapper">
@include('partials.admin.navBar')
<div style="padding-top: 7% !important;"></div>
	<div data-bind = "with: educationalBackgroundVM" class="row">
		<form data-bind = "submit: saveRecord" id = "educational-background" action="" class="form-horizontal">
			<div class="panel panel-primary">
				<div class="panel-heading">II. Educational Background Form</div>
				<div class="panel-body">
					<div class="form-group">
						<div class="col-md-6">
							<label for="" class="text-primary">Select Student</label>
							<select data-bind = "options: $root.datas.students, 
								optionsText: studentFullname, optionsValue: 'id',
									optionsCaption:'Select Student',value: student_id" class="form-control">
							</select>
						</div>
					</div>
					<div data-bind = "style: {display: student_id() ? 'block' : 'none'}">
						<div data-bind = "foreach: fields">
							<div class="well">						
								<div class="form-group">
									<div class="col-md-3">
										<label for="" class="text-primary">Level</label>
										<select data-bind = "options: $root.datas.educationalLevel, optionsCaption: 'Select Level', value: level" class="form-control" required></select>
									</div>
									<div class="col-md-6">
										<label for="" class="text-primary">Name of School &amp; Address</label>
										<input data-bind = "textInput: school_name_address" type="text" class="form-control" required>
									</div>
									<div data-bind = "style: {display: level() == 'College' || level() == 'Transferee/Shifter' ? 'block' : 'none'}" class="col-md-3">
										<label for="" class="text-primary">Degree Course</label>
										<select data-bind = "options: $root.datas.courses, optionsCaption: 'Select Degree/Course',optionsText: 'name', optionsValue: 'id', value: degree_course" class="form-control"></select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-2">
										<label for="" class="text-primary">Year Graduated</label>
										<input data-bind = "dateTimePicker: year_graduated, dateTimePickerOptions: {format: 'YYYY', maxDate: moment()}" type="text" class="form-control" required>
									</div>
									<div class="col-md-7">
										<label for="" class="col-md-12 text-primary">Inclusive Dates of Attendance</label>
										<div class="col-md-4">
											<input data-bind = "dateTimePicker: date_from, dateTimePickerOptions: {format: 'YYYY'}" type="text" class="form-control" placeholder = "From" required>
										</div>
										<div class="col-md-4">
											<input data-bind ="dateTimePicker: date_to, dateTimePickerOptions: {format: 'YYYY', maxDate: moment()}" type="text" class="form-control" placeholder = "To" required>
										</div>
									</div>
									<div class="col-md-3">
										<label for="" class="text-primary">General Average</label>
										<input data-bind = "textInput: general_average" type="number" min = "1" step = ".5" class="form-control text-center" required>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-11">
										<label for="" class="text-primary">Awards Received</label>
										<textarea data-bind = "textInput: awards" style="resize:none" name="" id="" cols="20" rows="2" class="form-control"  placeholder = "e.g. Valledictorian, Cum Laude, etc."></textarea>
									</div>
									<div class="col-md-1">
										<label for=""></label><br />
										<button data-bind = "enable: $parent.canRemoveField, click: $parent.removeField" class="btn btn-danger btn-xs">Remove</button>
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-1">
								<label for=""></label>
								<button data-bind = "enable: canAddField, click: addField" type="button" class="btn btn-primary btn-sm">Add Educational Background Field</button>
							</div>
						</div>
					
			
					
	
					<div class="form-group">
						<div class="col-md-12">
							<label for="" class=""></label>
								<button type="submit" class="btn btn-primary btn-block">Save Record for - <span data-bind="text: selectedStudent" ></span></button>
						</div>
					</div>

				</div>
			</div>
		</form>
	</div>
</div>

@stop