@extends('layout.admin.main')

@section('content')
<div id="page-wrapper">
@include('partials.admin.navBar')
	<div style="padding-top: 90px !important;"></div>
		<div data-bind = "with: statisticsVM"  class="row">

		<div class="panel panel-primary">
		<div class="panel-heading">Population Per College</div>
			<div class="panel-body">
				<canvas id= "popPerCollege" width = "800" height = "250"></canvas>
				<div id="legend4"></div>
			</div>
		</div>
		<div class="panel panel-primary">
		<div class="panel-heading">Population Per Scholarship</div>
			<div class="panel-body">
				<canvas id= "popPerScholarship" width = "800" height = "250"></canvas>
			</div>
		</div>
		<div class="panel panel-primary">
		<div class="panel-heading">Gender Population Per College</div>
			<div class="panel-body">
				<canvas id= "genderPerCollege" width = "800" height = "250"></canvas>
				<div id="legend1"></div>
			</div>
		</div>

		
		<div class="panel panel-primary">
		<div class="panel-heading">Gender Population Whole University</div>
			<div class="panel-body">
				<canvas id= "genderWhole" width = "800" height = "250"></canvas>
				<div id="legend2"></div>
			</div>
		</div>

		<div class="panel panel-primary">
		<div class="panel-heading">Population by Civil Status</div>
			<div class="panel-body">
				<canvas id= "byStatus" width = "800" height = "250"></canvas>
				<div id="legend3"></div>
			</div>
		</div>
		
		</div>

</div>

@stop
