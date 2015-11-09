@extends('layout.admin.main')

@section('content')
<div id="page-wrapper">
@include('partials.admin.navBar')

<div style="padding-top: 90px !important;"></div>
<div class="row">
	<div class="panel panel-primary">
		<div class="panel-heading">Users</div>
		<div class="panel-body">
		<table id="studentRecordsTable" class="table table-striped table-responsive dt" cellspacing="0" width="100%">
		    <thead>
		        <tr>
		            <th class="text-center" >User Name</th>
		            <th class="text-center" >Role</th>
		            <th class="text-center" >Actions</th>
		        </tr>
		    </thead>
		    <tfoot>
		        <tr>
		            <th class="text-center" >User Name</th>
		            <th class="text-center" >Role</th>
		            <th></th>
		        </tr>
		    </tfoot>
		    <tbody data-bind = "with: userVM">
		    @foreach($users as $user)
		    	<tr id="tr_{{ $user->id }}">
		    		<td class="text-center"><strong class = "text-primary">{{ $user->username }}</strong></td>
		    		<td class="text-center">{{ $user->role}}</td>
		    		<td class="text-center">
		    		<div class="btn-group">
		    			<button data-bind = "click: function(){  edit({{ $user->id }})  }" type="button" class="btn btn-primary btn-sm">Edit</button>	
		    			<button data-bind = "click: function(){  deleteUser({{ $user->id }})  }" type="button" class="btn btn-danger btn-sm">&times;</button>	
		    		</div>
						
		    		</td>
		    	</tr>
		    @endforeach
		    </tbody>
	    </table>
		</div>
	</div>
</div>
@stop