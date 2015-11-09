@extends('layout.admin.main')

@section('content')
<div id="page-wrapper">
@include('partials.admin.navBar')
<div style="padding-top: 7% !important;"></div>
	<div data-bind = "with: familyBackgroundVM" class="row">
		<form data-bind = "submit: saveRecord" id = "family-background"  action="" class="form-horizontal">
			<div class="panel panel-primary">
				<div class="panel-heading">III. Family Background Form</div>
				<div class="panel-body">
					<div class="form-group">
						<div class="col-md-6">
							<label for="" class="text-primary">Select Student</label>
							<select data-bind = "options: $root.datas.students, optionsText: function(s){ return s.lname + ', ' + s.fname + ' ' +s.mname; }, optionsCaption:'Select Student',value: student_id" class="form-control">
							</select>
						</div>
					</div>
					<div data-bind = "foreach: familyInfoFields">
						<div class="form-group">
							<div class="col-md-5">
								<label for=""  class="text-primary">Member</label>
								<select data-bind = "value:member, event:  { change: $parent.checkDuplicate }" name="" id="" class="form-control">
									<option value="">Select Family Member</option>
									<option value="Mother">Mother</option>
									<option value="Father">Father</option>
									<option value="Guardian">Guardian</option>
									<option value="Spouse">Spouse (If married)</option>
									<option value="Children">Children (If any)</option>
								</select>
							</div>
							<div class="col-md-7">
								<label for="" class="text-primary">Name</label>
								<input data-bind = "textInput: name"type="text" class="form-control"placeholder = "Juan Dela Cruz">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-5">
								<label for="" class="text-primary">Address</label>
								<input data-bind = "textInput: address" type="text" class="form-control" placeholder = "Province/City/Town/Brgy">
							</div>
							<div class="col-md-2">
								<label for="" class="text-primary">Occupation</label>
								<input data-bind = "textInput: occupation" type="text" class="form-control"placeholder = "Teacher">
							</div>
							<div class="col-md-2">
								<label for="" class="text-primary">Educational Attainment</label>
								<input data-bind = "textInput: educational_attainment" type="text" class="form-control"placerholder = "College Graduate">
							</div>
							<div class="col-md-2">
								<label for="" class="text-primary">Contact Number</label>
								<input data-bind = "textInput: contact_number" type="text" class="form-control phone"placeholder = "XXX-XXXX-XXXX">
							</div>
							<div class="col-md-1">
								<label for=""></label>
								<button data-bind = "enable: $parent.canRemoveField, click: $parent.removeField" type="button" class="btn btn-danger btn-xs">Remove</button>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-1">
							<label for=""></label>
							<button data-bind = "enable: canAddField, click: addFamilyInfoField" type="button" class="btn btn-primary btn-sm">Add Family Info. Field</button>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-4">
							<label for="" class="text-primary">Birth Order</label>
							<div class="radio">
							  	<label>
							    <input data-bind = "checked: birth_order" type="radio" name="birth_oder" id="" value="Eldest">
							   		Eldest
							  	</label>
							  	<label>
							    <input data-bind = "checked: birth_order" type="radio" name="birth_oder" id="" value="Middle">
							   		Middle
							  	</label>
							  	<label>
							    <input data-bind = "checked: birth_order" type="radio" name="birth_oder" id="" value="Youngest">
							   		Youngest
							  	</label>
							  	<label>
							    <input data-bind = "checked: birth_order" type="radio" name="birth_oder" id="" value="Only Child">
							   		Only Child
							  	</label>
							</div>
						</div>
						<div class="col-md-4">
							<label for="" class="text-primary">No. of Brother/s</label>
							<input data-bind = "textInput: number_of_brothers" type="number"min = "0" value = "0" class="form-control">
						</div>
						<div class="col-md-4">
							<label for="" class="text-primary">No. of Sister/s</label>
							<input data-bind = "textInput: number_of_sisters" type="number" min = "0" value="0" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<label for="" class="text-primary">Parent Marital Status</label>
							<div class="radio">
							  	<label>
							    <input data-bind = "checked: parent_marital_status" type="radio" name="parent_marital_status" id="" value="Legally Married">
							   		Legally Married
							  	</label>
							  	<label>
							    <input data-bind = "checked: parent_marital_status" type="radio" name="parent_marital_status" id="" value="Legally Separated">
							   		Legally Separated
							  	</label>
							  	<label>
							    <input data-bind = "checked: parent_marital_status" type="radio" name="parent_marital_status" id="" value="Single Parent">
							   		Single Parent
							  	</label>
							  	<label>
							    <input data-bind = "checked: parent_marital_status" type="radio" name="parent_marital_status" id="" value="Living together but not married">
							   		Living together but not married
							  	</label>
							  	<label>
							    <input data-bind = "checked: parent_marital_status" type="radio" name="parent_marital_status" id="" value="Married but not living">
							   		Married but not living
							  	</label>
							  	<label>
							    <input data-bind = "checked: parent_marital_status" type="radio" name="others" id="" value="Others">
							   		Others
							  	</label>
							</div>
							<input data-bind = "style: {display : parent_marital_status() == 'Others' ? 'block' :'none'}, textInput: others" type="text" class="form-control" placeholder = "Others, please specify">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-8">
							<label for="" class="text-primary">Type of Living Arrangement</label>
							<div class="radio">
							  	<label>
							    <input data-bind = "checked: type_of_living" type="radio" name="type_of_living" id="" value="Living w/ parents">
							   		Living w/ parents
							  	</label>
							  	<label>
							    <input data-bind = "checked: type_of_living" type="radio" name="type_of_living" id="" value="Living w/ relative">
							   		Living w/ relative
							  	</label>
							  	<label>
							    <input data-bind = "checked: type_of_living" type="radio" name="type_of_living" id="" value="One/both parents is/are OFW">
							   		One/both parents is/are OFW
							  	</label>
							  	<label>
							    <input data-bind = "checked: type_of_living" type="radio" name="type_of_living" id="" value="One/both parents is/are dead">
							   		One/both parents is/are dead
							  	</label>
							</div>
						</div>
						<div class="col-md-4">
							<label for="" class="text-primary">Combined Monthly Family Income</label>
							<input data-bind = "textInput: family_income" type="number" class="form-control">
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
		</form>
	</div>
</div>
@stop