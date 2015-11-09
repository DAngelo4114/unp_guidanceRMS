@extends('layout.admin')

@section('content')
	<header>
        <div class="container">
            <div class="row">
                <div class="col-lg-13">
                    <img class="img-responsive pull-left" src="{{ asset('img/unp_header.png') }}" alt="">
                    <div class="intro-text">
                        <span class="name"><h1>Guidance and Counselling Record Management System</h1></span>
                        <hr class="star-light">
                        <span class="skills">University of Northern Philippines</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
	<section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Menu</h3>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
			
                <div class="col-sm-4 portfolio-item">
                    <a href="{{ url('add-record') }}" class="portfolio-link" >
                        <div class="caption">
                            <div class="caption-content">
                               <h3>Add Record</h3>
                            </div>
                        </div>
                        <img src="{{ asset('img/portfolio/cabin.png') }}" class="img-responsive" alt="">
                    </a>
                </div>
				
                <div class="col-sm-4 portfolio-item">
                    <a href="{{ url('update-record') }}" class="portfolio-link" >
                        <div class="caption">
                            <div class="caption-content">
                               <h3>Update Record<h3>
                            </div>
                        </div>
                        <img src="{{ asset('img/portfolio/cake.png') }}" class="img-responsive" alt="">
                    </a>
                </div>
				
				
                <div class="col-sm-4 portfolio-item">
                    <a href="{{ url('view-record') }}" class="portfolio-link" >
                        <div class="caption">
                            <div class="caption-content">
                               <h3>View Record</h3>
							 
                            </div>
                        </div>
                        <img src="{{ asset('img/portfolio/circus.png') }}" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="{{ url('statistics') }}" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                              <h3>Statistics</h3>
                            </div>
                        </div>
                        <img src="{{ asset('img/portfolio/game.png') }}" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="{{ url('archive') }}" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <h3>Archive</h3>
                            </div>
                        </div>
                        <img src="{{ asset('img/portfolio/safe.png') }}" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="{{ url('help') }}" class="portfolio-link" >
                        <div class="caption">
                            <div class="caption-content">
                                   <h3>Help</h3>
                            </div>
                        </div>
                        <img src="{{ asset('img/portfolio/submarine.png') }}" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
@stop