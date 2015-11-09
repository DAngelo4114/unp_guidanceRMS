@extends('layout.admin.main')

@section('content')
<div id="page-wrapper">
@include('partials.admin.navBar')

<div style="padding-top: 90px !important;"></div>
<div class="row">
	<div class="panel panel-primary">
		<div class="panel-heading">Student Records</div>
		<div class="panel-body">
		<table id="studentRecordsTable" class="table table-striped table-responsive" cellspacing="0" width="100%">
		    <thead>
		        <tr>
		            <th class="text-center" >ID No.</th>
		            <th class="text-center" >Name</th>
		            <th class="text-center" >College</th>
		            <th class="text-center" >Course/Yr.&amp;Section</th>
		            <th class="text-center" >Gender</th>
		            <th class="text-center" >Actions</th>
		        </tr>
		    </thead>
		    <tfoot>
		        <tr>
		            <th class="text-center" >ID No.</th>
		            <th class="text-center" >Name</th>
		            <th class="text-center" >College</th>
		            <th class="text-center" >Course/Yr.&amp;Section</th>
		            <th class="text-center" >Gender</th>
		            <th class="text-center" >Actions</th>
		        </tr>
		    </tfoot>
		    <tbody data-bind = "with: studentRecordsVM">
		    @foreach($students as $student)
		    	<tr>
		    		<td class="text-center"><strong class = "text-primary">{{ $student->school_id }}</strong></td>
		    		<td class="align-left"><a data-bind = "click: function(){ getFullInfo({{ $student->id }}) }" href="#"><strong class = "text-primary">{{ $student->lname}}</strong>, {{ $student->fname.' '.$student->mname }}</a></td>
		    		<td class="text-center">{{ $student->college->name }}</td>
		    		<td class="text-center">{{ $student->course->name.' '.$student->year_level[0].'-'.$student->section }}</td>
		    		<td class="text-center">{{ $student->sex }}</td>
		    		<td class="text-center">
		    		
					    <div class="btn-group col-md-6">
					      <a href="#" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					        <i class="fa fa-ellipsis-h"></i>
					        <span class="caret"></span>
					      </a>
					      <ul class="dropdown-menu">
					        <li><a data-bind = "click: function(){ getFullInfo({{ $student->id }}) }" href="#">Full Info.</a></li>
					        @if(Auth::user()->role == 'admin')
					        <li><a data-bind = "click: function(){ edit({{ $student->id }})}" href="#">Edit</a></li>
					        <li><a data-bind = "click: function(){ archive({{ $student->id }})}" href="#">Archive</a></li>
					        @endif
					       </ul>
					    </div>
		    		</td>
		    	</tr>
		    @endforeach
		    </tbody>
	    </table>
		</div>
	</div>
</div>
</div>
@include('partials.admin.studentModals')
@stop