@extends('layout.admin')

@section('content')
<br></br>
                <br>
                <br>
	<div class="container">
        <div>
            <img class="img-responsive" height="20%" width="20%" src="img/c.png" align="left"/>
            <img class="img-responsive" height="15%" width="15%" src="img/avatar.jpg" align="right"/>
        </div>
        <center>
        	<h5>Republic of the Philippines</h5>
			<h4><b>UNIVERSITY OF NORTHERN PHILIPPINES</b></h4>
			<h5>Vigan City</h5>
			<h4><b>OFFICE OF STUDENT AFFAIRS</b></h4>
			<h5><b>Student Welfare Programs</b></h5>
			<h4><b>GUIDANCE AND COUNSELING SERVICES</b></h4>
			<br>
			<h2><b>CUMULATIVE RECORD</b></h2>
        </center>      
    </div>     
		<ul class="nav nav-tabs">
		    <li class="active"><a data-toggle="tab" href="#form1">Student Information</a></li>
		    <li><a data-toggle="tab" href="#form2">Educational/Family/Academic</a></li>
		    <li><a data-toggle="tab" href="#form3">Organizational/Psyhcological tests/Activies</a></li>
		    <li><a data-toggle="tab" href="#form4">Counseling/Absences</a></li>
		</ul>
		<br>
		<div class="tab-content" style="padding-left: 1% !important;padding-right: 1% !important;">
			 <div id="form1" class="tab-pane fade in active">
				
				@include('partials.admin.studentInfo')

			 </div>


			 <div id="form2" class="tab-pane fade in">
			 	
				@include('partials.admin.educationalFamilyAcademic')

			 </div>
		</div>
	
@stop