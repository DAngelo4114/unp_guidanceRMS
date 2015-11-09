@extends('layout.admin.main')

@section('content')
<div id="page-wrapper">
@include('partials.admin.navBar')

<div style="padding-top: 90px !important;"></div>
<div class="row">
	<div class="panel panel-primary">
		<div class="panel-heading">Courses</div>
		<div class="panel-body">
		<table id="studentRecordsTable" class="table table-striped table-responsive dt" cellspacing="0" width="100%">
		    <thead>
		        <tr>
		        	<th class="text-center" >College</th>
		            <th class="text-center" >Course</th>
		            <th class="text-center" >Added</th>
		            <th class="text-center" >Updated</th>
		            <th class="text-center" >Edit</th>
		        </tr>
		    </thead>
		    <tfoot>
		        <tr>
		        	<th class="text-center" >College</th>
		            <th class="text-center" >Course</th>
		            <th class="text-center" >Added</th>
		            <th class="text-center" >Updated</th>
		            <th class="text-center" >Edit</th>
		        </tr>
		    </tfoot>
		    <tbody data-bind = "with: courseVM">
		    @foreach($courses as $course)
		    	<tr>
		    		<td class="text-center">{{ $course->college->name }}</td>
		    		<td class="text-center"><strong class = "text-primary">{{ $course->name }}</strong></td>
		    		<td class="text-center">{{ $course->created_at->toFormattedDateString()}}</td>
		    		<td class="text-center">{{ $course->updated_at->toFormattedDateString() }}</td>
		    		<td class="text-center">
						@if(Auth::user()->role == 'admin')
						<button data-bind = "click: function(){  edit({{ $course->id }})  }" type="button" class="btn btn-primary btn-sm">Edit</button>
			    		@else
			    			<strong>Not allowed</strong>
			    		@endif
		    		</td>
		    	</tr>
		    @endforeach
		    </tbody>
	    </table>
		</div>
	</div>
</div>
@stop