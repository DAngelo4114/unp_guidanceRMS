@extends('layout.admin.main')

@section('content')
<div id="page-wrapper">
@include('partials.admin.navBar')
<div style="padding-top: 7% !important;"></div>
	<div data-bind = "with: academicPerformanceVM" class="row">
		<form data-bind = "submit: saveRecord" id = "academic-performance"  action="" class="form-horizontal">
			<div class="panel panel-primary">
				<div class="panel-heading">IV.Academic Performance Form</div>
				<div class="panel-body">
					<div class="form-group">
						<div class="col-md-6">
							<label for="" class="text-primary">Select Student</label>
							<select data-bind = "options: $root.datas.students, optionsText: studentFullName, optionsValue:'id',
								optionsCaption:'Select Student',value: student_id" class="form-control">
							</select>
						</div>
					</div>
						
					<ol data-bind="foreach: academicPerformanceFields" >
						<li class="form-group text-danger">
							<div class="col-md-2">
								<label for="" class="text-primary">Level</label>
								<select data-bind = "options: $root.datas.yearLevels, optionsCaption: 'Select Year', value: year_level" class="form-control" required></select>
							</div>
							<div class="col-md-2">
								<label for="" class="text-primary">Semester</label>
								<select data-bind = "options: $root.datas.semesters, optionsCaption: 'Select Semester', value: semester" class="form-control" required></select>
							</div>
							<div class="col-md-2">
								<label for="" class="text-primary">Remarks</label>
								<select data-bind = "options: $root.datas.remarks, optionsCaption: 'Select Remark', value: remark" class="form-control" required></select>
							</div>
							<div class="col-md-5">
								<label for="" class="text-primary">Subject</label>
								<input data-bind = "textInput: subject" name="" id="" class="form-control" placeholder = "List all subjects according to remarks" required>
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
							<button data-bind = "enable: canAddField, click: addField" type="button" class="btn btn-primary btn-sm">Add Academic Performance Field</button>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<label for="" class=""></label>
								<button data-bind = "enable: canSaveRecord" type="submit" class="btn btn-primary btn-block">Save Record for - <span data-bind="text: selectedStudent" ></span></button>
						</div>
					</div>`
				</div>
			</div>
		</form>
	</div>
</div>
@stop