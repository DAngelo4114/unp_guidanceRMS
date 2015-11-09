@extends('layout.admin.main')

@section('content')
<div id="page-wrapper">
@include('partials.admin.navBar')
<br>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Add Record</h1>
    </div>
</div>
<div class="row">
	<form data-bind = "with: studentInfoVM" id = "student-info" action="" class="form-horizontal">
		<div class="panel panel-primary">
			<div class="panel-heading">I. Personal Information Form</div>
			<div class="panel-body">
				<div class="form-group">
					<div class="col-md-2">
						<label for="" class="text-primary">School ID</label>
						<input data-bind = "textInput: school_id" type="text" class="form-control " placeholder = "XX-XXXXX">
					</div>

					<div class="col-md-4">
						<label for="" class="text-primary">College</label>
							<select data-bind = "options: $root.datas.colleges, optionsText: 'name',optionsValue: 'id', value: college_id" class="form-control "></select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-4">
						<label for="" class="text-primary">Last Name</label>
						<input data-bind = "textInput: lname" type="text" class="form-control " placeholder = "Dela Cruz">
					</div>

					<div class="col-md-4">
					<label for="" class="text-primary">First Name</label>
						<input data-bind = "textInput: fname" type="text" class="form-control " placeholder = "Juan">
					</div>

					
					<div class="col-md-4">
					<label for="" class="text-primary">Middle Name</label>
						<input data-bind = "textInput: mname" type="text" class="form-control " placeholder = "Luna">
					</div>
				</div>
				<div class="form-group">
					
					<div class="col-md-3">
						<label for="" class="text-primary">Birth Date</label>
						<input data-bind = "dateTimePicker: birthdate, dateTimePickerOptions: {format: 'MM/DD/YYYY'}" type="text" class="form-control " placeholder = "Dela Cruz">
					</div>

					
					<div class="col-md-1">
					<label for="" class="text-primary">Age</label>
						<input data-bind = "textInput: age" type="number" class="form-control " placeholder = "12" readonly="">
					</div>

					
					<div class="col-md-5">
					<label for="" class="text-primary">Place of Birth</label>
						<input data-bind = "textInput: place_of_birth" type="text" class="form-control " placeholder = "Luna">
					</div>
					<div class="col-md-3">
					<label for="" class="text-primary">Citizenship</label>
						<select data-bind = "value: citizenship" class="form-control ">
							<option value="afghan">Afghan</option>
							<option value="albanian">Albanian</option>
							<option value="algerian">Algerian</option>
							<option value="american">American</option>
							<option value="andorran">Andorran</option>
							<option value="angolan">Angolan</option>
							<option value="antiguans">Antiguans</option>
							<option value="argentinean">Argentinean</option>
							<option value="armenian">Armenian</option>
							<option value="australian">Australian</option>
							<option value="austrian">Austrian</option>
							<option value="azerbaijani">Azerbaijani</option>
							<option value="bahamian">Bahamian</option>
							<option value="bahraini">Bahraini</option>
							<option value="bangladeshi">Bangladeshi</option>
							<option value="barbadian">Barbadian</option>
							<option value="barbudans">Barbudans</option>
							<option value="batswana">Batswana</option>
							<option value="belarusian">Belarusian</option>
							<option value="belgian">Belgian</option>
							<option value="belizean">Belizean</option>
							<option value="beninese">Beninese</option>
							<option value="bhutanese">Bhutanese</option>
							<option value="bolivian">Bolivian</option>
							<option value="bosnian">Bosnian</option>
							<option value="brazilian">Brazilian</option>
							<option value="british">British</option>
							<option value="bruneian">Bruneian</option>
							<option value="bulgarian">Bulgarian</option>
							<option value="burkinabe">Burkinabe</option>
							<option value="burmese">Burmese</option>
							<option value="burundian">Burundian</option>
							<option value="cambodian">Cambodian</option>
							<option value="cameroonian">Cameroonian</option>
							<option value="canadian">Canadian</option>
							<option value="cape verdean">Cape Verdean</option>
							<option value="central african">Central African</option>
							<option value="chadian">Chadian</option>
							<option value="chilean">Chilean</option>
							<option value="chinese">Chinese</option>
							<option value="colombian">Colombian</option>
							<option value="comoran">Comoran</option>
							<option value="congolese">Congolese</option>
							<option value="costa rican">Costa Rican</option>
							<option value="croatian">Croatian</option>
							<option value="cuban">Cuban</option>
							<option value="cypriot">Cypriot</option>
							<option value="czech">Czech</option>
							<option value="danish">Danish</option>
							<option value="djibouti">Djibouti</option>
							<option value="dominican">Dominican</option>
							<option value="dutch">Dutch</option>
							<option value="east timorese">East Timorese</option>
							<option value="ecuadorean">Ecuadorean</option>
							<option value="egyptian">Egyptian</option>
							<option value="emirian">Emirian</option>
							<option value="equatorial guinean">Equatorial Guinean</option>
							<option value="eritrean">Eritrean</option>
							<option value="estonian">Estonian</option>
							<option value="ethiopian">Ethiopian</option>
							<option value="fijian">Fijian</option>
							<option value="filipino" selected="">Filipino</option>
							<option value="finnish">Finnish</option>
							<option value="french">French</option>
							<option value="gabonese">Gabonese</option>
							<option value="gambian">Gambian</option>
							<option value="georgian">Georgian</option>
							<option value="german">German</option>
							<option value="ghanaian">Ghanaian</option>
							<option value="greek">Greek</option>
							<option value="grenadian">Grenadian</option>
							<option value="guatemalan">Guatemalan</option>
							<option value="guinea-bissauan">Guinea-Bissauan</option>
							<option value="guinean">Guinean</option>
							<option value="guyanese">Guyanese</option>
							<option value="haitian">Haitian</option>
							<option value="herzegovinian">Herzegovinian</option>
							<option value="honduran">Honduran</option>
							<option value="hungarian">Hungarian</option>
							<option value="icelander">Icelander</option>
							<option value="indian">Indian</option>
							<option value="indonesian">Indonesian</option>
							<option value="iranian">Iranian</option>
							<option value="iraqi">Iraqi</option>
							<option value="irish">Irish</option>
							<option value="israeli">Israeli</option>
							<option value="italian">Italian</option>
							<option value="ivorian">Ivorian</option>
							<option value="jamaican">Jamaican</option>
							<option value="japanese">Japanese</option>
							<option value="jordanian">Jordanian</option>
							<option value="kazakhstani">Kazakhstani</option>
							<option value="kenyan">Kenyan</option>
							<option value="kittian and nevisian">Kittian and Nevisian</option>
							<option value="kuwaiti">Kuwaiti</option>
							<option value="kyrgyz">Kyrgyz</option>
							<option value="laotian">Laotian</option>
							<option value="latvian">Latvian</option>
							<option value="lebanese">Lebanese</option>
							<option value="liberian">Liberian</option>
							<option value="libyan">Libyan</option>
							<option value="liechtensteiner">Liechtensteiner</option>
							<option value="lithuanian">Lithuanian</option>
							<option value="luxembourger">Luxembourger</option>
							<option value="macedonian">Macedonian</option>
							<option value="malagasy">Malagasy</option>
							<option value="malawian">Malawian</option>
							<option value="malaysian">Malaysian</option>
							<option value="maldivan">Maldivan</option>
							<option value="malian">Malian</option>
							<option value="maltese">Maltese</option>
							<option value="marshallese">Marshallese</option>
							<option value="mauritanian">Mauritanian</option>
							<option value="mauritian">Mauritian</option>
							<option value="mexican">Mexican</option>
							<option value="micronesian">Micronesian</option>
							<option value="moldovan">Moldovan</option>
							<option value="monacan">Monacan</option>
							<option value="mongolian">Mongolian</option>
							<option value="moroccan">Moroccan</option>
							<option value="mosotho">Mosotho</option>
							<option value="motswana">Motswana</option>
							<option value="mozambican">Mozambican</option>
							<option value="namibian">Namibian</option>
							<option value="nauruan">Nauruan</option>
							<option value="nepalese">Nepalese</option>
							<option value="new zealander">New Zealander</option>
							<option value="ni-vanuatu">Ni-Vanuatu</option>
							<option value="nicaraguan">Nicaraguan</option>
							<option value="nigerien">Nigerien</option>
							<option value="north korean">North Korean</option>
							<option value="northern irish">Northern Irish</option>
							<option value="norwegian">Norwegian</option>
							<option value="omani">Omani</option>
							<option value="pakistani">Pakistani</option>
							<option value="palauan">Palauan</option>
							<option value="panamanian">Panamanian</option>
							<option value="papua new guinean">Papua New Guinean</option>
							<option value="paraguayan">Paraguayan</option>
							<option value="peruvian">Peruvian</option>
							<option value="polish">Polish</option>
							<option value="portuguese">Portuguese</option>
							<option value="qatari">Qatari</option>
							<option value="romanian">Romanian</option>
							<option value="russian">Russian</option>
							<option value="rwandan">Rwandan</option>
							<option value="saint lucian">Saint Lucian</option>
							<option value="salvadoran">Salvadoran</option>
							<option value="samoan">Samoan</option>
							<option value="san marinese">San Marinese</option>
							<option value="sao tomean">Sao Tomean</option>
							<option value="saudi">Saudi</option>
							<option value="scottish">Scottish</option>
							<option value="senegalese">Senegalese</option>
							<option value="serbian">Serbian</option>
							<option value="seychellois">Seychellois</option>
							<option value="sierra leonean">Sierra Leonean</option>
							<option value="singaporean">Singaporean</option>
							<option value="slovakian">Slovakian</option>
							<option value="slovenian">Slovenian</option>
							<option value="solomon islander">Solomon Islander</option>
							<option value="somali">Somali</option>
							<option value="south african">South African</option>
							<option value="south korean">South Korean</option>
							<option value="spanish">Spanish</option>
							<option value="sri lankan">Sri Lankan</option>
							<option value="sudanese">Sudanese</option>
							<option value="surinamer">Surinamer</option>
							<option value="swazi">Swazi</option>
							<option value="swedish">Swedish</option>
							<option value="swiss">Swiss</option>
							<option value="syrian">Syrian</option>
							<option value="taiwanese">Taiwanese</option>
							<option value="tajik">Tajik</option>
							<option value="tanzanian">Tanzanian</option>
							<option value="thai">Thai</option>
							<option value="togolese">Togolese</option>
							<option value="tongan">Tongan</option>
							<option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
							<option value="tunisian">Tunisian</option>
							<option value="turkish">Turkish</option>
							<option value="tuvaluan">Tuvaluan</option>
							<option value="ugandan">Ugandan</option>
							<option value="ukrainian">Ukrainian</option>
							<option value="uruguayan">Uruguayan</option>
							<option value="uzbekistani">Uzbekistani</option>
							<option value="venezuelan">Venezuelan</option>
							<option value="vietnamese">Vietnamese</option>
							<option value="welsh">Welsh</option>
							<option value="yemenite">Yemenite</option>
							<option value="zambian">Zambian</option>
							<option value="zimbabwean">Zimbabwean</option>
						</select>
					</div>
				</div>
			
				<div class="form-group">
					<div class="col-md-6">
						<label for="" class="text-primary">Sex</label>
						<div class="radio">
						  	<label>
							    <input data-bind = "checked: sex" type="radio" name="sex" id="" value="Male">
							   		Male
								</label>
						  	<label>
						    <input data-bind = "checked: sex" type="radio" name="sex" id="" value="Female">
						   		Female
						  	</label>
						  	<label>
						    <input data-bind = "checked: sex" type="radio" name="sex" id="" value="Gay">
						   		Gay
						  	</label>
						  	<label>
						    <input data-bind = "checked: sex" type="radio" name="sex" id="" value="Lesbian">
						   		Lesbian
						  	</label>
						  	<label>
						    <input data-bind = "checked: sex" type="radio" name="sex" id="" value="Bisexual">
						   		Bisexual
						  	</label>
						  	<label>
						    <input data-bind = "checked: sex" type="radio" name="sex" id="" value="Transgender">
						   		Transgender
						  	</label>
						</div>
					</div>
					<div class="col-md-3">
						<label for="" class="text-primary">Civil Status</label>
						<div class="radio">
						  	<label>
						    <input type="radio" data-bind = "checked: civil_status"  name="civilStatus" value="Single" checked>
						   		Single
						  	</label>
						  	<label>
						    <input data-bind = "checked: civil_status" type="radio" name="civilStatus" value="Married">
						   		Married
						  	</label>
						  	<label>
						    <input data-bind = "checked: civil_status" type="radio" name="civilStatus" value="Widow/Widower">
						   		Widow/Widower
						  	</label>
						</div>
					</div>
					<div class="col-md-3">
						<label for="" class="text-primary">Date of Marriage</label>
						<input data-bind = "enable: canAddDateOfMarriage, dateTimePicker: date_of_marriage, dateTimePickerOptions: {format: 'MM/DD/YYYY'}" type="text" class="form-control ">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-4">
						<label for="" class="text-primary">Height</label>
						<input data-bind = "textInput: height" type="text" class="form-control " placeholder = "Luna">
					</div>
					<div class="col-md-4">
						<label for="" class="text-primary">Weight</label>
						<input data-bind = "weight" type="text" class="form-control " placeholder = "Luna">
					</div>
					<div class="col-md-4">
						<label for="" class="text-primary">Bloodtype</label>
						<select data-bind = "value: bloodtype" class="form-control ">
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value="AB+">AB+</option>
							<option value="AB-">AB-</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-4">
						<label for="" class="text-primary">Cell / Tel Number</label>
						<input data-bind = "textInput: cell_number" type="text" class="form-control " placeholder = "XXXX-XXX-XXX">
					</div>
					<div class="col-md-4">
						<label for="" class="text-primary">E-mail Address</label>
						<input data-bind = "textInput: email" type="text" class="form-control " placeholder = "juan@example.com">
					</div>
					<div class="col-md-4">
						<label for="" class="text-primary">Illness</label>
						<input data-bind = "textInput: illness" type="text" class="form-control " placeholder = "Asthma">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-4">
						<label for="" class="text-primary">Religion or Relligious Affil.</label>
						<input data-bind = "textInput: religion" type="text" class="form-control ">
					</div>
					<div class="col-md-4">
						<label for="" class="text-primary">Ethnic/Tribal Affilation</label>
						<input data-bind = "textInput: ethnic" type="text" class="form-control " placeholder = "e.g. Bago, Tribe">
					</div>
					<div class="col-md-4">
						<label for="" class="text-primary">Disability</label>
						<input data-bind = "textInput: disability" type="text" class="form-control " placeholder = "e.g. speech defect, physical deformities">
					</div>
				</div>


				
				<div class="form-group">
					<div class="col-md-12">
						<label for="" class="text-primary">Home / Permanent Address</label>
						<input data-bind = "textInput: home_address" type="text" class="form-control " placeholder = "Brgy/Town/City/Province">
					</div>
				</div>


				<div data-bind = "foreach: present_addresses">
					<div class="form-group">
						<div class="col-md-12">
							<label for="" class="text-primary">Present Address</label>
						</div>
						<div class="col-md-2">
							<select data-bind = "options: $root.datas.yearLevels, optionsCaption: 'Year Level',value: year_level" class="form-control ">
							</select>
						</div>
						<div class="col-md-8">
							<input data-bind = "textInput: address" type="text" class="form-control " placeholder = "Brgy/Town/City/Province">
						</div>
						<div class="col-md-2">
							<label for=""></label>
							<button data-bind = "click: $parent.removePresentAddressField, enable: $parent.canRemovePresentAddressField" type="button" class="btn btn-danger btn-xs">Remove</button>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-12">
						<label for=""></label>
						<button data-bind = "click: addPresentAddressField, enable: canAddPresentAddressField" type="button" class="btn btn-primary btn-sm">Add Present Address Field</button>
					</div>
				</div>
				<div data-bind = "foreach: dorms">
					<div class="form-group">
						<div class="col-md-12">
							<label for="" class="text-primary">Name &amp; Address of Boarding House/Dormitory(if applicable)</label>
						</div>
						<div class="col-md-2">
							<select data-bind = "options: $root.datas.yearLevels,, optionsCaption: 'Year Level', value: year_level" class="form-control "></select>
						</div>
						<div class="col-md-8">
							<input data-bind = "textInput: address" type="text" class="form-control " placeholder = "Brgy/Town/City/Province">
						</div>
						<div class="col-md-2">
							<label for=""></label>
							<button data-bind = "click: $parent.removeDormField, enable: $parent.canRemoveDormField" type="button" class="btn btn-danger btn-xs">Remove</button>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<label for=""></label>
						<button data-bind = "click: addDormField, enable: canAddDormField" type="button" class="btn btn-primary btn-sm">Add Dorm Field</button>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<label for=""></label>
						<button data-bind = "click: test" type="button"  class="btn btn-primary">Save test</button>
					</div>
				</div>
			</div>
		</div>
	</form>

	<form data-bind = "with: educationalBackgroundVM" id = "educational-background" action="" class="form-horizontal">
		<div class="panel panel-primary">
			<div class="panel-heading">II. Educational Background Form</div>
			<div class="panel-body">
				<div class="form-group">
					<div class="col-md-2">
						<label for="" class="text-primary">Year Level</label>
						<select data-bind = "options: $root.datas.yearLevels, value: year_level" class="form-control"></select>
					</div>
					<div class="col-md-6">
						<label for="" class="text-primary">Degree Course</label>
						<select data-bind = "options: $root.datas.courses, value: degree_course" class="form-control"></select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-5">
						<label for="" class="text-primary">School Name</label>
						<input data-bind = "textInput: school_name" type="text" class="form-control">
					</div>
					<div class="col-md-5">
						<label for="" class="text-primary">School Address</label>
						<input data-bind = "textInput: school_address" type="text" class="form-control">
					</div>
					<div class="col-md-2">
						<label for="" class="text-primary">Year Graduated</label>
						<input id="year_graduated" type="text" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-md-12 text-primary">Inclusive Date of Attendance</label>
					<div class="col-md-3">
						<input id = "attendance_date_from" type="text" class="form-control" placeholder = "From">
					</div>
					<div class="col-md-3">
						<input id = "attendance_date_to" type="text" class="form-control" placeholder = "To">
					</div>
					
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<label for="" class="text-primary">Awards Received</label>
						<textarea data-bind = "textInput: awards" style="resize:none" name="" id="" cols="20" rows="2" class="form-control"  placeholder = "List all student awards"></textarea>
					</div>
				</div>
				<hr>

				<div class="form-group">
					<div class="col-md-3">
						<label for="" class="text-primary">Course</label>
						<select data-bind = "options: $root.datas.courses, value: course" name="" id="" class="form-control"></select>
					</div>
					<div class="col-md-3">
						<label for="" class="text-primary">Year Level</label>
						<select data-bind = "options: $root.datas.yearLevels, value: year_level" name="" id="" class="form-control"></select>
					</div>
					<div class="col-md-3">
						<label for="" class="text-primary">Section</label>
						<input data-bind = "textInput: section" class="form-control">
					</div>
					<div class="col-md-3">
						<label for="" class="text-primary">Scholarship</label>
						<select data-bind = "options: $root.datas.scholarships, value: scholarship" class="form-control"></select>
					</div>
				</div>
				<div class="form-group">
					<button data-bind = "click: test" type="button" class="btn btn-warning">test</button>
				</div>
			</div>
		</div>
	</form>


	<form id = "family-background"  action="" class="form-horizontal">
		<div class="panel panel-primary">
			<div class="panel-heading">III. Family Background Form</div>
			<div class="panel-body">
				<div class="form-group">
					<div class="col-md-2">
						<label for=""  class="text-primary">Member</label>
						<select name="" id="" class="form-control"></select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-5">
						<label for="" class="text-primary">Address</label>
						<input type="text" class="form-control">
					</div>
					<div class="col-md-2">
						<label for="" class="text-primary">Occupation</label>
						<input type="text" class="form-control">
					</div>
					<div class="col-md-2">
						<label for="" class="text-primary">Educational Attainment</label>
						<input type="text" class="form-control">
					</div>
					<div class="col-md-2">
						<label for="" class="text-primary">Contact Number</label>
						<input type="text" class="form-control">
					</div>
					<div class="col-md-1">
						<label for=""></label>
						<button class="btn btn-danger btn-xs">Remove</button>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-1">
						<label for=""></label>
						<button class="btn btn-primary btn-sm">Add Family Info. Field</button>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-4">
						<label for="" class="text-primary">Birth Order</label>
						<div class="radio">
						  	<label>
						    <input type="radio" name="birth_oder" id="" value="option1">
						   		Eldest
						  	</label>
						  	<label>
						    <input type="radio" name="birth_oder" id="" value="option1">
						   		Middle
						  	</label>
						  	<label>
						    <input type="radio" name="birth_oder" id="" value="option1">
						   		Youngest
						  	</label>
						  	<label>
						    <input type="radio" name="birth_oder" id="" value="option1">
						   		Only Child
						  	</label>
						</div>
					</div>
					<div class="col-md-4">
						<label for="" class="text-primary">No. of Brother/s</label>
						<input type="text" class="form-control">
					</div>
					<div class="col-md-4">
						<label for="" class="text-primary">No. of Sister/s</label>
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<label for="" class="text-primary">Parent Marital Status</label>
						<div class="radio">
						  	<label>
						    <input type="radio" name="birth_oder" id="" value="option1">
						   		Legally Married
						  	</label>
						  	<label>
						    <input type="radio" name="birth_oder" id="" value="option1">
						   		Legally Separated
						  	</label>
						  	<label>
						    <input type="radio" name="birth_oder" id="" value="option1">
						   		Single Parent
						  	</label>
						  	<label>
						    <input type="radio" name="birth_oder" id="" value="option1">
						   		Living together but not married
						  	</label>
						  	<label>
						    <input type="radio" name="birth_oder" id="" value="option1">
						   		Married but not living
						  	</label>
						</div>
						<input type="text" class="form-control" placeholder = "Others, please specify">
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-8">
						<label for="" class="text-primary">Type of Living Arrangement</label>
						<div class="radio">
						  	<label>
						    <input type="radio" name="birth_oder" id="" value="option1">
						   		Living w/ parents
						  	</label>
						  	<label>
						    <input type="radio" name="birth_oder" id="" value="option1">
						   		Living w/ relative
						  	</label>
						  	<label>
						    <input type="radio" name="birth_oder" id="" value="option1">
						   		One/both parents is/are OFW
						  	</label>
						  	<label>
						    <input type="radio" name="birth_oder" id="" value="option1">
						   		One/both parents is/are dead
						  	</label>
						</div>
					</div>
					<div class="col-md-4">
						<label for="" class="text-primary">Combined Monthly Family Income</label>
						<input type="number" class="form-control">
					</div>
				</div>

			</div>
		</div>
	</form>
	

	<form id = "academic-performance"  action="" class="form-horizontal">
		<div class="panel panel-primary">
			<div class="panel-heading">IV.Academic Performance Form</div>
			<div class="panel-body">
				<div class="form-group">
					<div class="col-md-2">
						<label for="" class="text-primary">Year</label>
						<select name="" id="" class="form-control"></select>
					</div>
					<div class="col-md-2">
						<label for="" class="text-primary">Sem</label>
						<select name="" id="" class="form-control"></select>
					</div>
					<div class="col-md-2">
						<label for="" class="text-primary">Remarks</label>
						<select name="" id="" class="form-control"></select>
					</div>
					<div class="col-md-6">
						<label for="" class="text-primary">Subject</label>
						<input name="" id="" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<label for=""></label>
						<button class="btn btn-primary btn-sm">Add Academic Performance Field</button>
					</div>
				</div>
			</div>
		</div>
	</form>

	<form id = "organizational-affilation"  action="" class="form-horizontal">
		<div class="panel panel-primary">
			<div class="panel-heading">IV. Organizational Affilation Form</div>
			<div class="panel-body">
				<div class="form-group">
					<div class="col-md-2">
						<label for="" class="text-primary">Year Level</label>
						<select name="" id="" class="form-control"></select>
					</div>
					<div class="col-md-4">
						<label for="" class="text-primary">Name of Organization</label>
						<select name="" id="" class="form-control"></select>
					</div>
					<div class="col-md-4">
						<label for="" class="text-primary">Position</label>
						<select name="" id="" class="form-control"></select>
					</div>
					<div class="col-md-2">
						<label for="" class="text-primary">School Year</label>
						<input name="" id="" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<label for=""></label>
						<button class="btn btn-primary btn-sm">Add Organizational Affilation Field</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	
	<form id = "psychology-test"  action="" class="form-horizontal">
		<div class="panel panel-primary">
			<div class="panel-heading">IV. Psychology Test Taken Form</div>
			<div class="panel-body">
				<div class="form-group">
					<div class="col-md-2">
						<label for="" class="text-primary">Date</label>
						<select name="" id="" class="form-control"></select>
					</div>
					<div class="col-md-6">
						<label for="" class="text-primary">Test Name</label>
						<select name="" id="" class="form-control"></select>
					</div>
					<div class="col-md-2">
						<label for="" class="text-primary">Percentile</label>
						<select name="" id="" class="form-control"></select>
					</div>
					<div class="col-md-2">
						<label for="" class="text-primary">Remarks</label>
						<input name="" id="" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<label for=""></label>
						<button class="btn btn-primary btn-sm">Add Psychology Test Field</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<form id = "activities-participted"  action="" class="form-horizontal">
		<div class="panel panel-primary">
			<div class="panel-heading">IV. Activities Participated Form</div>
			<div class="panel-body">
				<div class="form-group">
					<div class="col-md-2">
						<label for="" class="text-primary">Year Level</label>
						<select name="" id="" class="form-control"></select>
					</div>
					<div class="col-md-6">
						<label for="" class="text-primary">Activity</label>
						<input name="" id="" class="form-control" placeholder = "e.g. Seminar, Training,Workshop,Contest">
					</div>
					<div class="col-md-4">
						<label for="" class="text-primary">Sponsor</label>
						<select name="" id="" class="form-control"></select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<label for=""></label>
						<button class="btn btn-primary btn-sm">Add Activities Participated Field</button>
					</div>
				</div>
			</div>
		</div>
	</form>

	<form id = "counselling-record"  action="" class="form-horizontal">
		<div class="panel panel-primary">
			<div class="panel-heading">IV. Counselling Record Form</div>
			<div class="panel-body">
				<div class="form-group">
					<div class="col-md-2">
						<label for="" class="text-primary">Year Level</label>
						<select name="" id="" class="form-control"></select>
					</div>
					<div class="col-md-2">
						<label for="" class="text-primary">Date</label>
						<input name="" id="" class="form-control" placeholder = "e.g. Seminar, Training,Workshop,Contest">
					</div>
					<div class="col-md-4">
						<label for="" class="text-primary">Nature of Probem</label>
						<select name="" id="" class="form-control"></select>
					</div>
					<div class="col-md-4">
						<label for="" class="text-primary">Action Taken</label>
						<select name="" id="" class="form-control"></select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<label for=""></label>
						<button class="btn btn-primary btn-sm">Add Counselling Record Field</button>
					</div>
				</div>
			</div>
		</div>
	</form>

	<form id = "absences-record"  action="" class="form-horizontal">
		<div class="panel panel-primary">
			<div class="panel-heading">IV. Absences Record Form</div>
			<div class="panel-body">
				<div class="form-group">
					<div class="col-md-2">
						<label for="" class="text-primary">Year Level</label>
						<select name="" id="" class="form-control"></select>
					</div>
					<div class="col-md-2">
						<label for="" class="text-primary">Date</label>
						<input name="" id="" class="form-control" placeholder = "e.g. Seminar, Training,Workshop,Contest">
					</div>
					<div class="col-md-4">
						<label for="" class="text-primary">Subject </label>
						<select name="" id="" class="form-control"></select>
					</div>
					<div class="col-md-4">
						<label for="" class="text-primary">Reason</label>
						<select name="" id="" class="form-control"></select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<label for=""></label>
						<button class="btn btn-primary btn-sm">Add Absences Record Field</button>
					</div>
				</div>
			</div>
		</div>
	</form>
</div><!-- / .row -->
</div>


@stop