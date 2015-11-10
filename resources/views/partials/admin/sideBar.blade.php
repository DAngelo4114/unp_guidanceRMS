<?php $isAdmin = Auth::user()->role == 'admin' ? TRUE : FALSE; ?>

<div class="navbar-default sidebar" role="navigation" style="margin-top: 64px; min-height: 600px !important; overflow-y: scroll;">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            @if( $isAdmin )
            <li>
                <a href="javascript:void(0);"><i class="fa fa-users"></i> Users<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                
                    <li>
                        <a href="#" data-toggle = "modal" data-target = "#addUserModal">Add</a>
                    </li>
                
                    <li>
                        <a href="{{ url('admin/users') }}">View/Update</a>
                    </li>
                </ul>
            </li>
            @endif
            <li>
                <a href="{{ url('admin/colleges') }}"><i class="fa fa-folder"></i> Colleges<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                
                    <li>
                        <a href="javascript:void(0);" data-toggle = "modal" data-target = "#addCollegeModal">Add</a>
                    </li>
               
                    <li>
                        <a href="{{ url('admin/colleges') }}">View/Update</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ url('admin/courses') }}"><i class="fa fa-book"></i>  Courses<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                
                    <li>
                        <a href="javascript:void(0);" data-toggle = "modal" data-target = "#mainAddCourseModal">Add</a>
                    </li>
                
                    <li>
                        <a href="{{ url('admin/courses') }}">View/Update</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ url('admin/scholarships') }}"><i class="fa fa-graduation-cap"></i> Scholarships<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                
                    <li>
                        <a href="javascript:void(0);" data-toggle = "modal" data-target = "#addScholarshipModal">Add</a>
                    </li>
                
                    <li>
                        <a href="{{ url('admin/scholarships') }}">View/Update</a>
                    </li>
                </ul>
            </li>
            
            <li>
                <a href="asdf"><i class="fa fa-files-o fa-fw"></i> Add Student Record<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('admin/add-personal-information') }}">Personal Information</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/add-educational-background') }}">Educational Background</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/add-family-background') }}">Family Background</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/add-academic-performance') }}">Academic Performance</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/add-organizational-affiliation') }}">Organizational Affiliation</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/add-psychological-test') }}">Pyschological Tests Taken</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/add-activities-participated') }}">Activities Participated</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/add-counselling-record') }}">Counsellings</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/add-absences-record') }}">Absences</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            
            <li>
                <a href="{{ url('admin/student-records') }}"><i class="fa fa-table fa-fw"></i> View/Update Student Records </a>
            </li>
            <li>
                <a href="{{ url('admin/statistics') }}"><i class="fa fa-bar-chart"></i> Statistics</a>
            </li>
            
            <li>
                <a href="{{ url('admin/archives') }}"><i class="fa fa-file-archive-o"></i> Archive</a>
            </li>
    
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>