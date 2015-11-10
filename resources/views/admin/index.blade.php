@extends('layout.admin.main')

@section('content')
<div id="page-wrapper" class="bg-primary">
	@include('partials.admin.navBar')
	<div class="row-fluid" style="padding-top:80px;">
		<h2>Welcome <strong>{{ Auth::user()->username }}</strong></h2>
		<hr>
		<div class="col-md-4">
			<img src="{{ asset('img/unpv2.PNG') }}" width="350" height="260" alt="">
		</div>
		<div class="col-md-8">
			<h1>GUIDANCE AND COUNSELING SERVICES</h1>  
			<h1>RECORD MANAGEMENT SYSTEM</h1>
		</div>
	</div>
</div>

@stop