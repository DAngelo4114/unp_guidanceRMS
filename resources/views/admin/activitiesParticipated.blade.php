@extends('layout.admin.main')

@section('content')
<div id="page-wrapper">
@include('partials.admin.navBar')
<div style="padding-top: 7% !important;"></div>
<div data-bind = "with: activitiesParticipatedVM" class="row">
		<form data-bind = "submit: saveRecord" id = "activities-participted"  action="" class="form-horizontal">
			<div class="panel panel-primary">
				<div class="panel-heading">IV. Activities Participated Form</div>
				<div class="panel-body">
					<div class="form-group">
						<div class="col-md-6">
							<label for="" class="text-primary">Select Student</label>
							<select data-bind = "options: $root.datas.students, optionsText: function(s){ return s.lname + ', ' + s.fname + ' ' +s.mname; }, optionsCaption:'Select Student',value: student_id" class="form-control">
							</select>
						</div>
					</div>
					<div data-bind = "style :{display : !student_id() ? 'none' : 'block'}">
						<ol data-bind="foreach: activityFields" >
							<li class="form-group">
								
								<div class="col-md-2">
									<label for="" class="text-primary">Year</label>
									<select data-bind = "options: $root.datas.yearLevels, optionsCaption: 'Select Year', value: year_level" class="form-control"></select>
								</div>
								<div class="col-md-2">
									<label for="" class="text-primary">Date</label>
									<input data-bind = "dateTimePicker: activity_date, dateTimePickerOptions:{format:'YYYY-MM-DD', maxDate: moment()}" class="form-control">
								</div>
								<div class="col-md-5">
									<label for="" class="text-primary">Activity</label>
									<input data-bind="textInput: activity" type="text" class="form-control"placeholder ="e.g. Seminar, Training, Workshop, Contest">
								</div>
								<div class="col-md-2">
									<label for="" class="text-primary">Sponsor</label>
									<input data-bind="textInput: sponsor" type="text" class="form-control">
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
								<button data-bind = "enable: canAddField, click: addField" class="btn btn-primary btn-sm" type="button">Add Activity Field</button>
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