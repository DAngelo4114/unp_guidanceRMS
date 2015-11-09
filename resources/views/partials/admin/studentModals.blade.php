

{{-- FULL STUDENT INFO MODAL --}}
<div data-bind ="with: studentRecordsVM" class="modal fade" id="studentFullInfoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" width = "100% readonly">
        <div class="modal-content">
            <div class="modal-header ">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">
                    <strong data-bind = "text: studentFullname"></strong> <br/>
                    
                </h4>
 
                <div class="btn-group">
                  <a href="#personal-info" class="btn btn-primary btn-xs">Personal</a>
                  <a href="#educational-info" class="btn btn-primary btn-xs">Educational</a>
                  <a href="#family-info" class="btn btn-primary btn-xs">Family</a>
                  <a href="#academic-info" class="btn btn-primary btn-xs">Academics</a>
                  <a href="#organizational-info" class="btn btn-primary btn-xs">Organizations</a>
                  <a href="#psychological-info" class="btn btn-primary btn-xs">Psychological Tests</a>
                  <a href="#activities-info" class="btn btn-primary btn-xs">Activities</a>
                  <a href="#counsellings-info" class="btn btn-primary btn-xs">Counsellings</a>
                  <a href="#absences-info" class="btn btn-primary btn-xs">Absences</a>
                </div>
                
            </div>
            <div data-bind = "foreach: studentFullInfo" class="modal-body" style="overflow-y: scroll;max-height:400px;scroll: top;">
            <div id="personal-info" class="panel panel-primary">
              <div class="panel-heading">I. Personal Information 
              @if(Auth::user()->role == 'admin')
                <button data-bind = "click: $root.studentInfoVM.edit" class="btn btn-default btn-xs pull-right">Edit</button>
              @endif
              </div>
                <div class="panel-body">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <div class="col-md-3">
                        <label for="unp_cat_rating" class="text-primary">UNP-CAT Rating</label>
                        <input data-bind = "value: unp_cat_rating" class="form-control text-center " readonly="">
                      </div>
                      <div class="col-md-4">
                        <label for="scholarship_id" class="text-primary">Scholarship</label>
                        <input data-bind = "value: scholarship ? scholarship.name : 'NONE'" class="form-control " readonly="">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-3">
                        <label for="" class="text-primary">Contact Number</label>
                        <input data-bind = "value: contact_number ? contact_number : 'NONE'" type="text" class="form-control " readonly="">
                      </div>
                      <div class="col-md-4">
                        <label for="" class="text-primary">E-mail</label>
                        <input data-bind = "value: email ? email :'NONE'" type="text" class="form-control " readonly="">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-md-3">
                        <label for="" class="text-primary">Birth Date</label>
                        <input data-bind = "value: moment(birthdate).format('MMMM DD, YYYY')" type="text" class="form-control " readonly="">
                      </div>

                      
                      <div class="col-md-1">
                      <label for="" class="text-primary">Age</label>
                        <input data-bind = "value: age" type="text" class="form-control "readonly="">
                      </div>

                      
                      <div class="col-md-8">
                      <label for="" class="text-primary">Place of Birth</label>
                        <input data-bind = "value: place_of_birth" type="text" class="form-control " readonly="">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-md-3">
                        <label for="" class="text-primary">Height(m.)</label>
                        <input data-bind = "value: height" type="text" class="form-control " readonly="">
                      </div>
                      <div class="col-md-3">
                        <label for="" class="text-primary">Weight(kg.)</label>
                        <input data-bind = "value: weight" type="text" class="form-control " readonly="">
                      </div>
                      <div class="col-md-3">
                        <label for="" class="text-primary">Bloodtype</label>
                        <input data-bind = "value: bloodtype" type="text" class="form-control " readonly="">
                      </div>
                      <div class="col-md-3">
                        <label for="" class="text-primary">Citizenship</label>
                        <input data-bind = "value: citizenship" type="text" class="form-control text-capitalize " readonly="">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-md-3">
                        <label for="" class="text-primary">Civil Status</label>
                        <input data-bind = "value: civil_status" type="text" class="form-control " readonly="">
                      </div>
                      <div class="col-md-3">
                        <label for="" class="text-primary">Marriage Date</label>
                        <input data-bind = "value: moment(date_of_marriage).isValid() ? moment(date_of_marriage).format('MMMM DD, YYYY') :'N/A'" type="text" class="form-control " readonly="">
                      </div>
                       <div class="col-md-3">
                        <label for="" class="text-primary">Illness</label>
                        <input data-bind = "value: illness ? illness : 'NONE'" type="text" class="form-control " readonly="">
                      </div>
                      <div class="col-md-3">
                        <label for="" class="text-primary">Disability</label>
                        <input data-bind = "value: disability ? disability :'NONE'" type="text" class="form-control " readonly="">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-md-6">
                        <label for="" class="text-primary">Religion or Religious Affiliation</label>
                        <input data-bind = "value: religion" type="text" class="form-control " readonly="">
                      </div>
                      <div class="col-md-6">
                        <label for="" class="text-primary">Ethnic or Tribal Affilation</label>
                        <input data-bind = "value: ethnic ? ethnic : 'NONE'" type="text" class="form-control " readonly="">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <label for="" class="text-primary">Home/Permanent Address</label>
                        <textarea data-bind = "value: home_address" cols="30" rows="2" class="form-control" readonly="" style="resize:none;"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                      <label for="" class="text-primary">Present Addreses</label>
                        <table class="table table-striped table-responsive" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="text-center" width="10%">Year</th>
                                <th class="text-center">Address</th>
                            </tr>
                        </thead>
                        <tbody>
                          <!--ko if: present_addresses-->
                          <!--ko foreach: present_addresses-->
                            <tr>
                              <td data-bind = "text: year_level" class="text-center"></td>
                              <td data-bind = "text: address" class="text-center"></td>
                            </tr>
                          <!--/ko-->
                        <!--/ko-->
                        <!--ko if: !present_addresses || !present_addresses.length-->
                            <tr>
                              <td class="text-center">No record</td>
                              <td class="text-center"></td>
                            </tr>
                        <!--/ko-->
                        </tbody>
                        </table>
                      </div>                 
                    </div>

                    <div class="form-group">
                      <div class="col-md-12">
                      <label for="" class="text-primary">Dorms</label>
                        <table class="table table-striped table-responsive" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="text-center" width="10%">Year</th>
                                <th class="text-center">Dorm Name &amp; Address</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!--ko if: dorms-->
                          <!--ko foreach: dorms-->
                            <tr>
                              <td data-bind = "text: year_level" class="text-center"></td>
                              <td data-bind = "text: address" class="text-center"></td>
                            </tr>
                          <!--/ko-->
                        <!--/ko-->
                        <!--ko if: !dorms || !dorms.length-->
                            <tr>
                              <td class="text-center">No record</td>
                              <td class="text-center"></td>
                            </tr>
                        <!--/ko-->
                        </tbody>
                        </table>
                      </div>                 
                    </div>
                  </form>
                </div>
              </div>
  

              <div id="educational-info" class="panel panel-primary">
              <div class="panel-heading">II. Educational Background 
              @if(Auth::user()->role == 'admin')
                <button data-bind = "click: $root.educationalBackgroundVM.edit" class="btn btn-default btn-xs pull-right">Edit</button>
              @endif
              </div>
                <div class="panel-body">
                  <form class="form-horizontal">
                  <!--ko ifnot: educational_background.length -->
                    <div class="form-group">
                      <div class="col-md-12 text-center">
                        <h6>No Educational Background Records found.</h6>
                         @if(Auth::user()->role == 'admin')
                        <a href="{{ url('admin/add-educational-background') }}" class="btn btn-primary btn-sm">Click to Add</a>
                        @endif
                      </div>
                          
                    </div>
                  <!--/ko-->
                  <!-- ko foreach: educational_background -->
                  <div class="well">
                    <div class="form-group">
                      <div class="col-md-3">
                        <label for="" class="text-primary">Level</label>
                        <input data-bind = "value: level" type="text" class="form-control" readonly=""/>

                      </div>
                      <div class="col-md-9">
                        <label for="" class="text-primary">Schoolname &amp; Address</label>
                        <input data-bind = "value: school_name_address" type="text" class="form-control" readonly=""/>

                      </div>
                    
                    </div>

                    <div class="form-group">
                      <div class="col-md-3">
                        <label for="" class="text-primary">Year Graduated</label>
                        <input data-bind="value: year_graduated ? year_graduated : 'N/A'" type="text" class="form-control" readonly=""/>

                      </div>
                      <div class="col-md-3">
                        <label for="" class="text-primary">From</label>
                        <input data-bind="value: date_from" type="text" class="form-control" readonly=""/>

                      </div>
                      <div class="col-md-3">
                        <label for="" class="text-primary">To</label>
                        <input data-bind="value: date_to" type="text" class="form-control" readonly=""/>

                      </div>
                      <div class="col-md-3">
                        <label for="" class="text-primary">General Average</label>
                        <input data-bind="value: general_average" type="text" class="form-control text-center" readonly="" />
                        
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-md-12">
                        <label for="" class="text-primary">Awards</label>
                        <input data-bind = "value: awards" type="text" class="form-control" readonly=""/>
                        
                      </div>
                    </div>
                    </div>
                    <!-- /ko -->
                  </form>
                </div>
              </div>
              
              <div id="family-info" class="panel panel-primary">
              <div class="panel-heading">III. Family Background 
              @if(Auth::user()->role == 'admin')
              <button data-bind = "click: $root.familyBackgroundVM.edit" class="btn btn-default btn-xs pull-right">Edit</button>
              @endif
              </div>
                <div class="panel-body">
                  <form class="form-horizontal">
                  <!--ko ifnot: family_background.length -->
                    <div class="form-group">
                      <div class="col-md-12 text-center">
                        <h6>No Family Background Records found.</h6>
                        @if(Auth::user()->role == 'admin')
                        <a href="{{ url('admin/add-family-background') }}" class="btn btn-primary btn-sm">Click to Add</a>
                        @endif
                      </div>
                          
                    </div>
                  <!--/ko-->
                  <!-- ko foreach: family_background -->
                    <!--ko foreach: members-->
                      <div class="well">
                        <div class="form-group">
                          <div class="col-md-3">
                            <label for="" class="text-primary">Member</label>
                            <input data-bind = "value: member" type="text" class="form-control" readonly=""/>

                          </div>
                          <div class="col-md-4">
                            <label for="" class="text-primary">Name</label>
                            <input data-bind = "value: name" type="text" class="form-control" readonly=""/>

                          </div>
                          <div class="col-md-5">
                            <label for="" class="text-primary">Address</label>
                            <input data-bind="value: address ? address : 'N/A'" type="text" class="form-control" readonly=""/>

                          </div>
                        </div>

                        <div class="form-group">

                          <div class="col-md-3">
                            <label for="" class="text-primary">Occupation</label>
                            <input data-bind="value: occupation ? occupation : 'N/A' " type="text" class="form-control" readonly=""/>

                          </div>
                          <div class="col-md-6">
                            <label for="" class="text-primary">Educational Attainment</label>
                            <input data-bind="value: educational_attainment" type="text" class="form-control" readonly=""/>

                          </div>
                          <div class="col-md-3">
                            <label for="" class="text-primary">Contact Number</label>
                            <input data-bind="value: contact_number" type="text" class="form-control text-center" readonly="" />
                            
                          </div>
                        </div>
                      </div>
                      <!-- /ko -->

                      <div class="form-group">
                        <div class="col-md-4">
                          <label for="" class="text-primary">Birth Order</label>
                          <input data-bind="value: birth_order" type="text" class="form-control" readonly/>
                          
                        </div>
                        <div class="col-md-4">
                          <label for="" class="text-primary">No. of Brothers</label>
                          <input data-bind="value: number_of_brothers ? number_of_brothers : 'N/A' " type="text" class="form-control text-center" readonly/>
                          
                        </div>
                        <div class="col-md-4">
                          <label for="" class="text-primary">No. of Sisters</label>
                          <input data-bind="value: number_of_sisters ? number_of_sisters : 'N/A' " type="text" class="form-control text-center" readonly/>

                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-md-6">
                          <label for="" class="text-primary">Parent Marital Status</label>
                          <input data-bind="value: parent_status != 'Others' ? parent_status : others" type="text" class="form-control" readonly/>
                          
                        </div>
                        
                      </div>

                      <div class="form-group">
                        <div class="col-md-6">
                          <label for="" class="text-primary">Type of Living</label>
                          <input data-bind="value: type_of_living" type="text" class="form-control"/>
                          
                        </div>
                        <div class="col-md-6">
                          <label for="" class="text-primary">Combined Family Income</label>
                          <input data-bind="value: family_income" type="text" class="form-control text-center" readonly/>
                          
                        </div>
                      </div>
                    <!-- /ko -->
                  </form>
                </div>
              </div>

              <div id="academic-info" class="panel panel-primary">
                <div class="panel-heading">IV. Academic Performance
                @if(Auth::user()->role == 'admin')
                <button data-bind = "click: $root.academicPerformanceVM.edit" class="btn btn-default btn-xs pull-right">Edit</button>
                @endif
                </div>
                  <div class="panel-body">
                    <form class="form-horizontal">
                      <!--ko ifnot: academic_performance.length-->
                        <div class="form-group">
                          <div class="col-md-12 text-center">
                            <h6>No Academic Performance Records found.</h6>
                            @if(Auth::user()->role == 'admin')
                            <a data-bind = "attr: {href :'{{ url('admin/add-family-background') }}/' + id}" class="btn btn-primary btn-sm">Click to Add</a>
                            @endif
                          </div>
                              
                        </div>
                      <!--/ko-->
                      <!-- ko if: academic_performance.length --> 
                      <div class="form-group">
                          <div class="col-md-2">
                            <label for="" class="text-primary">Year</label>
                          </div>
                          <div class="col-md-2">
                            <label for="" class="text-primary">Semester</label>
                          </div>
                          <div class="col-md-2">
                            <label for="" class="text-primary">Remark</label>
                          </div>
                          <div class="col-md-5">
                            <label for="" class="text-primary">Subject</label>
                          </div>
                        </div>
                        <!--ko foreach: academic_performance-->
                          <div class="form-group">
                            <div class="col-md-2">
                              
                              <input data-bind="value: year_level" type="text" class="form-control" readonly="" />
                              
                            </div>
                            <div class="col-md-2">
                              
                              <input data-bind="value: semester" type="text" class="form-control" readonly="" />
                              
                            </div>
                            <div class="col-md-2">
                              
                              <input data-bind="value: remark" type="text" class="form-control" readonly="" />
                              
                            </div>
                            <div class="col-md-6">
                              
                              <input data-bind="value: subject" type="text" class="form-control" readonly="" />
                              
                            </div>
                          </div>
                        <!-- /ko -->
                      <!-- /ko -->
                    </form>
                 </div>
              </div>
      
              <div id ="organizational-info" class="panel panel-primary">
                <div class="panel-heading">V. Organizational Affiliation 
                @if(Auth::user()->role == 'admin')
                <button data-bind = "click: $root.organizationalAffiliationVM.edit" class="btn btn-default btn-xs pull-right">Edit</button>
                @endif
                </div>
                  <div class="panel-body">
                    <form class="form-horizontal">
                      <!--ko ifnot: organizational_affiliation.length-->
                        <div class="form-group">
                          <div class="col-md-12 text-center">
                            <h6>No Organizational Affiliation Records found.</h6>
                            @if(Auth::user()->role == 'admin')
                            <a data-bind = "attr: {href :'{{ url('admin/add-organizational-affiliation') }}/' + id}" class="btn btn-primary btn-sm">Click to Add</a>
                            @endif
                          </div>
                              
                        </div>
                      <!--/ko-->
                      <!-- ko if: organizational_affiliation.length --> 
                      <div class="form-group text-center">
                          <div class="col-md-3">
                            <label for="" class="text-primary">Year</label>
                          </div>
                          <div class="col-md-3">
                            <label for="" class="text-primary">Organization Name</label>
                          </div>
                          <div class="col-md-3">
                            <label for="" class="text-primary">Position</label>
                          </div>
                          <div class="col-md-3">
                            <label for="" class="text-primary">School year</label>
                          </div>
                        </div>
                        <!--ko foreach: organizational_affiliation-->
                          <div class="form-group">
                            <div class="col-md-3">
                              
                              <input data-bind="value: year_level" type="text" class="form-control text-center" readonly="" />
                              
                            </div>
                            <div class="col-md-3">
                              
                              <input data-bind="value: name" type="text" class="form-control text-center" readonly="" />
                              
                            </div>
                            <div class="col-md-3">
                              
                              <input data-bind="value: position" type="text" class="form-control text-center" readonly="" />
                              
                            </div>
                            <div class="col-md-3">
                              
                              <input data-bind="value: school_year" type="text" class="form-control text-center" readonly="" />
                              
                            </div>
                          </div>
                        <!-- /ko -->
                      <!-- /ko -->
                    </form>
                 </div>
              </div>


              <div id ="psychological-info" class="panel panel-primary">
                <div class="panel-heading">VI. Psychological Tests 
                @if(Auth::user()->role == 'admin')
                <button data-bind = "click: $root.psychologicalTestVM.edit" class="btn btn-default btn-xs pull-right">Edit</button>
                @endif

                </div>
                  <div class="panel-body">
                    <form class="form-horizontal">
                      <!--ko ifnot: psychological_test.length-->
                        <div class="form-group">
                          <div class="col-md-12 text-center">
                            <h6>No Psychological Test Records found.</h6>
                            @if(Auth::user()->role == 'admin')
                            <a data-bind = "attr: {href :'{{ url('admin/add-psychological-test') }}/' + id}" class="btn btn-primary btn-sm">Click to Add</a>
                            @endif
                          </div>
                              
                        </div>
                      <!--/ko-->
                      <!-- ko if: psychological_test.length --> 
                      <div class="form-group text-center">
                          <div class="col-md-3">
                            <label for="" class="text-primary">Date Taken</label>
                          </div>
                          <div class="col-md-3">
                            <label for="" class="text-primary">Test</label>
                          </div>
                          <div class="col-md-3">
                            <label for="" class="text-primary">Percentile</label>
                          </div>
                          <div class="col-md-3">
                            <label for="" class="text-primary">Remark</label>
                          </div>
                        </div>
                        <!--ko foreach: psychological_test-->
                          <div class="form-group">
                            <div class="col-md-3">
                              
                              <input data-bind="value: date_taken" type="text" class="form-control text-center" readonly="" />
                              
                            </div>
                            <div class="col-md-3">
                              
                              <input data-bind="value: name" type="text" class="form-control text-center" readonly="" />
                              
                            </div>
                            <div class="col-md-3">
                              
                              <input data-bind="value: percentile" type="text" class="form-control text-center" readonly="" />
                              
                            </div>
                            <div class="col-md-3">
                              
                              <input data-bind="value: remarks" type="text" class="form-control text-center" readonly="" />
                              
                            </div>
                          </div>
                        <!-- /ko -->
                      <!-- /ko -->
                    </form>
                 </div>
              </div>




              <div id ="activities-info" class="panel panel-primary">
                <div class="panel-heading">VII. Activities Participated 
                @if(Auth::user()->role == 'admin')
                <button data-bind = "click: $root.activitiesParticipatedVM.edit" class="btn btn-default btn-xs pull-right">Edit</button>
                @endif
                </div>
                  <div class="panel-body">
                    <form class="form-horizontal">
                      <!--ko ifnot: activity_participated.length-->
                        <div class="form-group">
                          <div class="col-md-12 text-center">
                            <h6>No Activity Participated Records found.</h6>
                            @if(Auth::user()->role == 'admin')
                            <a data-bind = "attr: {href :'{{ url('admin/add-activities-participated') }}/' + id}" class="btn btn-primary btn-sm">Click to Add</a>
                            @endif
                          </div>
                              
                        </div>
                      <!--/ko-->
                      <!-- ko if: activity_participated.length --> 
                      <div class="form-group text-center">
                          <div class="col-md-3">
                            <label for="" class="text-primary">Year</label>
                          </div>
                          <div class="col-md-3">
                            <label for="" class="text-primary">Date</label>
                          </div>
                          <div class="col-md-3">
                            <label for="" class="text-primary">Activity</label>
                          </div>
                          <div class="col-md-3">
                            <label for="" class="text-primary">Sponsor</label>
                          </div>
                        </div>
                        <!--ko foreach: activity_participated-->
                          <div class="form-group">
                            <div class="col-md-3">
                              
                              <input data-bind="value: year_level" type="text" class="form-control text-center" readonly="" />
                              
                            </div>
                            <div class="col-md-3">
                              
                              <input data-bind="value: activity_date" type="text" class="form-control text-center" readonly="" />
                              
                            </div>
                            <div class="col-md-3">
                              
                              <input data-bind="value: activity" type="text" class="form-control text-center" readonly="" />
                              
                            </div>
                            <div class="col-md-3">
                              
                              <input data-bind="value: sponsor" type="text" class="form-control text-center" readonly="" />
                              
                            </div>
                          </div>
                        <!-- /ko -->
                      <!-- /ko -->
                    </form>
                 </div>
              </div>


              <div id ="counsellings-info" class="panel panel-primary">
                <div class="panel-heading">VIII. Counsellings Record 
                @if(Auth::user()->role == 'admin')
                <button data-bind = "click: $root.counsellingRecordVM.edit" class="btn btn-default btn-xs pull-right">Edit</button>
                @endif
                </div>
                  <div class="panel-body">
                    <form class="form-horizontal">
                      <!--ko ifnot: counselling_record.length-->
                        <div class="form-group">
                          <div class="col-md-12 text-center">
                            <h6>No Counselling Records found.</h6>
                            @if(Auth::user()->role == 'admin')
                            <a data-bind = "attr: {href :'{{ url('admin/add-counselling-record') }}/' + id}" class="btn btn-primary btn-sm">Click to Add</a>
                            @endif
                          </div>
                              
                        </div>
                      <!--/ko-->
                      <!-- ko if: counselling_record.length --> 
                      <div class="form-group text-center">
                          <div class="col-md-3">
                            <label for="" class="text-primary">Year</label>
                          </div>
                          <div class="col-md-3">
                            <label for="" class="text-primary">Date</label>
                          </div>
                          <div class="col-md-3">
                            <label for="" class="text-primary">Problem</label>
                          </div>
                          <div class="col-md-3">
                            <label for="" class="text-primary">Actionr</label>
                          </div>
                        </div>
                        <!--ko foreach: counselling_record-->
                          <div class="form-group">
                            <div class="col-md-3">
                              
                              <input data-bind="value: year_level" type="text" class="form-control text-center" readonly="" />
                              
                            </div>
                            <div class="col-md-3">
                              
                              <input data-bind="value: date" type="text" class="form-control text-center" readonly="" />
                              
                            </div>
                            <div class="col-md-3">
                              
                              <input data-bind="value: problem" type="text" class="form-control text-center" readonly="" />
                              
                            </div>
                            <div class="col-md-3">
                              
                              <input data-bind="value: action" type="text" class="form-control text-center" readonly="" />
                              
                            </div>
                          </div>
                        <!-- /ko -->
                      <!-- /ko -->
                    </form>
                 </div>
              </div>



              <div id ="absences-info" class="panel panel-primary">
                <div class="panel-heading">IX. Absences Record 
                @if(Auth::user()->role == 'admin')
                <button data-bind = "click: $root.absencesRecordVM.edit" class="btn btn-default btn-xs pull-right">Edit</button>
                @endif
                </div>
                  <div class="panel-body">
                    <form class="form-horizontal">
                      <!--ko ifnot: absent_record.length-->
                        <div class="form-group">
                          <div class="col-md-12 text-center">
                            <h6>No Absences Record found.</h6>
                            @if(Auth::user()->role == 'admin')
                            <a data-bind = "attr: {href :'{{ url('admin/add-absences-record') }}/' + id}" class="btn btn-primary btn-sm">Click to Add</a>
                            @endif
                          </div>
                              
                        </div>
                      <!--/ko-->
                      <!-- ko if: absent_record.length --> 
                      <div class="form-group text-center">
                          <div class="col-md-3">
                            <label for="" class="text-primary">Year</label>
                          </div>
                          <div class="col-md-3">
                            <label for="" class="text-primary">Date</label>
                          </div>
                          <div class="col-md-3">
                            <label for="" class="text-primary">Subject</label>
                          </div>
                          <div class="col-md-3">
                            <label for="" class="text-primary">Reason</label>
                          </div>
                        </div>
                        <!--ko foreach: absent_record-->
                          <div class="form-group">
                            <div class="col-md-3">
                              
                              <input data-bind="value: year_level" type="text" class="form-control text-center" readonly="" />
                              
                            </div>
                            <div class="col-md-3">
                              
                              <input data-bind="value: absent_date" type="text" class="form-control text-center" readonly="" />
                              
                            </div>
                            <div class="col-md-3">
                              
                              <input data-bind="value: subject" type="text" class="form-control text-center" readonly="" />
                              
                            </div>
                            <div class="col-md-3">
                              
                              <input data-bind="value: reason" type="text" class="form-control text-center" readonly="" />
                              
                            </div>
                          </div>
                        <!-- /ko -->
                      <!-- /ko -->
                    </form>
                 </div>
              </div>
    
    






    










            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>











<div data-bind ="with: studentRecordsVM" class="modal fade" id="editMenuModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h5 class="modal-title" id="myModalLabel">
                    Edit <strong><span data-bind = "text: targetName"></span></strong>
                </h5>
            </div>
            <div class="modal-body">
            <div class="row-fluid">             
                  <a data-bind = "click: $parent.studentInfoVM.edit" class="btn btn-primary btn-block">Personal Information</a>
                  <a data-bind = "click: $parent.educationalBackgroundVM.edit" class="btn btn-primary btn-block">Educational Background</a>
                  <a data-bind = "click: $parent.familyBackgroundVM.edit" class="btn btn-primary btn-block">Family Background</a>
                  <a data-bind = "click: $parent.academicPerformanceVM.edit" class="btn btn-primary btn-block">Academic Performance</a>
                  <a data-bind = "click: $parent.organizationalAffiliationVM.edit" class="btn btn-primary btn-block">Organizational Affiliation</a>
                  <a data-bind = "click: $parent.psychologicalTestVM.edit" class="btn btn-primary btn-block">Psychological Tests</a>
                  <a data-bind = "click: $parent.activitiesParticipatedVM.edit" class="btn btn-primary btn-block">Activities Participated</a>
                  <a data-bind = "click: $parent.counsellingRecordVM.edit" class="btn btn-primary btn-block">Counselling Records</a>
                  <a data-bind = "click: $parent.absencesRecordVM.edit" href="#" class="btn btn-primary btn-block">Absences Record</a>
                
            </div>
              
            </div>
            <div data-bind = "with: $parent.courseVM" class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>








<div data-bind ="with: absencesRecordVM" class="modal fade" id="editAbsencesModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 80%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">
                    Edit Absences
                </h4>
            </div>
            <div class="modal-body">
              <div class="row-fluid">
               <form data-bind = "submit: updateRecord" id = "absences-record"  action="" class="form-horizontal">
               <!-- ko if: absencesRecordFields-->
                <ol data-bind="foreach: absencesRecordFields">
                  <li class="form-group">
                    
                    {{-- <input data-type = "text: absentRecordID" type="hidden"> --}}
                    <div class="col-md-2">
                      <label for="" class="text-primary">Year</label>
                      <select data-bind = "options: $root.datas.yearLevels, optionsCaption: 'Select Year', value: year_level" class="form-control"></select>
                    </div>

                    <div class="col-md-2">
                      <label for="" class="text-primary">Date</label>
                      <input data-bind = "dateTimePicker: absent_date, dateTimePickerOptions:{format:'YYYY-MM-DD', maxDate: moment()}" class="form-control">
                    </div>

                    <div class="col-md-5">
                      <label for="" class="text-primary">Subject</label>
                      <input data-bind="textInput: subject" type="text" class="form-control">
                    </div>

                    <div class="col-md-2">
                      <label for="" class="text-primary">Reason</label>
                      <input data-bind="textInput: reason" type="text" class="form-control">
                    </div>

                    <div class="col-md-1">
                      <label for=""></label>
                      <button data-bind = "click: $parent.removeFieldFromDB" type="button" class="btn btn-danger btn-xs">Remove</button>
                    </div>

                  </li> 
                </ol>
                <!-- /ko -->

  
              </form>
            </div>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button data-bind = "click: updateRecord" type="button" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>



<div data-bind ="with: counsellingRecordVM" class="modal fade" id="editCounsellingsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 80%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">
                    Edit Counselling Records
                </h4>
            </div>
            <div class="modal-body">
              <div class="row-fluid">
               <form data-bind = "submit: updateRecord" id = "absences-record"  action="" class="form-horizontal">
               <!-- ko if: counsellingRecordFields-->
                <ol data-bind="foreach: counsellingRecordFields">
                  <li class="form-group">
                    
                    <div class="col-md-2">
                      <label for="" class="text-primary">Year</label>
                      <select data-bind = "options: $root.datas.yearLevels, optionsCaption: 'Select Year', value: year_level" class="form-control"></select>
                    </div>

                    <div class="col-md-2">
                      <label for="" class="text-primary">Date</label>
                      <input data-bind = "dateTimePicker: date, dateTimePickerOptions:{format:'YYYY-MM-DD', maxDate: moment()}" class="form-control">
                    </div>

                    <div class="col-md-5">
                      <label for="" class="text-primary">Problem</label>
                      <input data-bind="textInput: problem" type="text" class="form-control">
                    </div>

                    <div class="col-md-2">
                      <label for="" class="text-primary">Action</label>
                      <input data-bind="textInput: action" type="text" class="form-control">
                    </div>

                    <div class="col-md-1">
                      <label for=""></label>
                      <button data-bind = "click: $parent.removeFieldFromDB" type="button" class="btn btn-danger btn-xs">Remove</button>
                    </div>

                  </li> 
                </ol>
                <!-- /ko -->
              </form>
            </div>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button data-bind = "click: updateRecord" type="button" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>



<div data-bind ="with: activitiesParticipatedVM" class="modal fade" id="editActivityModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 80%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">
                    Edit Activity Participated
                </h4>
            </div>
            <div class="modal-body">
              <div class="row-fluid">
               <form data-bind = "submit: updateRecord" id = "absences-record"  action="" class="form-horizontal">
               <!-- ko if: activityFields-->
                <ol data-bind="foreach: activityFields">
                  <li class="form-group">
                    
                    <div class="col-md-2">
                      <label for="" class="text-primary">Year</label>
                      <select data-bind = "options: $root.datas.yearLevels, optionsCaption: 'Select Year', value: year_level" class="form-control"></select>
                    </div>

                    <div class="col-md-2">
                      <label for="" class="text-primary">Date</label>
                      <input data-bind = "dateTimePicker: activity_date, dateTimePickerOptions:{format:'YYYY-MM-DD', maxDate: moment()}" class="form-control">
                    </div>

                    <div class="col-md-5">
                      <label for="" class="text-primary">Activity</label>
                      <input data-bind="textInput: activity" type="text" class="form-control">
                    </div>

                    <div class="col-md-2">
                      <label for="" class="text-primary">Sponsor</label>
                      <input data-bind="textInput: sponsor" type="text" class="form-control">
                    </div>

                    <div class="col-md-1">
                      <label for=""></label>
                      <button data-bind = "click: $parent.removeFieldFromDB" type="button" class="btn btn-danger btn-xs">Remove</button>
                    </div>

                  </li> 
                </ol>
                <!-- /ko -->
              </form>
            </div>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button data-bind = "click: updateRecord" type="button" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>





<div data-bind ="with: psychologicalTestVM" class="modal fade" id="editPsychologicalTestModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 80%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">
                    Edit Psychological Test
                </h4>
            </div>
            <div class="modal-body">
              <div class="row-fluid">
               <form data-bind = "submit: updateRecord" id = "absences-record"  action="" class="form-horizontal">
               <!-- ko if: psychologicalTestFields-->
                <ol data-bind="foreach: psychologicalTestFields">
                  <li class="form-group">

                    <div class="col-md-2">
                      <label for="" class="text-primary">Date</label>
                      <input data-bind = "dateTimePicker: date_taken, dateTimePickerOptions:{format:'YYYY-MM-DD', maxDate: moment()}" class="form-control">
                    </div>

                    <div class="col-md-6">
                      <label for="" class="text-primary">Test</label>
                      <input data-bind="textInput: name" type="text" class="form-control">
                    </div>

                    <div class="col-md-3">
                      <label for="" class="text-primary">Remarks</label>
                      <input data-bind="textInput: remarks" type="text" class="form-control">
                    </div>

                    <div class="col-md-1">
                      <label for=""></label>
                      <button data-bind = "click: $parent.removeFieldFromDB" type="button" class="btn btn-danger btn-xs">Remove</button>
                    </div>

                  </li> 
                </ol>
                <!-- /ko -->
              </form>
            </div>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button data-bind = "click: updateRecord" type="button" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>

<div data-bind ="with: organizationalAffiliationVM" class="modal fade" id="editOrgAffiliationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 80%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">
                    Edit Organizational Affiliation
                </h4>
            </div>
            <div class="modal-body">
              <div class="row-fluid">
               <form data-bind = "submit: updateRecord" id = "absences-record"  action="" class="form-horizontal">
               <!-- ko if: organizationalAffiliationFields-->
                <ol data-bind="foreach: organizationalAffiliationFields">
                  <li class="form-group">

                    <div class="col-md-2">
                      <label for="" class="text-primary">Year</label>
                      <select data-bind = "options: $root.datas.yearLevels, optionsCaption: 'Select Year', value: year_level" class="form-control"></select>
                    </div>

                    <div class="col-md-4">
                      <label for="" class="text-primary">Organization Name</label>
                      <input data-bind="textInput: name" type="text" class="form-control">
                    </div>

                    <div class="col-md-3">
                      <label for="" class="text-primary">Position</label>
                      <input data-bind="textInput: position" type="text" class="form-control">
                    </div>

                    <div class="col-md-2">
                      <label for="" class="text-primary">School Year</label>
                      <input data-bind="textInput: school_year" type="text" class="form-control">
                    </div>

                    <div class="col-md-1">
                      <label for=""></label>
                      <button data-bind = "click: $parent.removeFieldFromDB" type="button" class="btn btn-danger btn-xs">Remove</button>
                    </div>

                  </li> 
                </ol>
                <!-- /ko -->
              </form>
            </div>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button data-bind = "click: updateRecord" type="button" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>



<div data-bind ="with: academicPerformanceVM" class="modal fade" id="editAcademicsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 80%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">
                    Edit Academic Performances
                </h4>
            </div>
            <div class="modal-body">
              <div class="row-fluid">
               <form data-bind = "submit: updateRecord" id = "absences-record"  action="" class="form-horizontal">
               <!-- ko if: academicPerformanceFields-->
                <ol data-bind="foreach: academicPerformanceFields">
                  <li class="form-group">

                    <div class="col-md-2">
                      <label for="" class="text-primary">Level</label>
                      <select data-bind = "options: $root.datas.yearLevels, optionsCaption: 'Select Year', value: year_level" class="form-control" required></select>
                    </div>
                    <div class="col-md-2">
                      <label for="" class="text-primary">Semester</label>
                      <select data-bind = "options: $root.datas.semesters, optionsCaption: 'Select Semester', value: semester" class="form-control" required></select>
                    </div>
                    <div class="col-md-2">
                      <label for="" class="text-primary">Remarks</label>
                      <select data-bind = "options: $root.datas.remarks, optionsCaption: 'Select Remark', value: remark" class="form-control" required></select>
                    </div>
                    <div class="col-md-5">
                      <label for="" class="text-primary">Subject</label>
                      <input data-bind = "textInput: subject" name="" id="" class="form-control" placeholder = "List all subjects according to remarks" required>
                    </div>

                    <div class="col-md-1">
                      <label for=""></label>
                      <button data-bind = "click: $parent.removeFieldFromDB" type="button" class="btn btn-danger btn-xs">Remove</button>
                    </div>

                  </li> 
                </ol>
                <!-- /ko -->
              </form>
            </div>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button data-bind = "click: updateRecord" type="button" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>


<div data-bind ="with: familyBackgroundVM" class="modal fade" id="editFamilyInfoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 80%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">
                    Edit Family Background
                </h4>
            </div>
            <div class="modal-body" style="overflow-y: scroll;max-height:400px;scroll: top;">
              <div class="row-fluid">
               <form data-bind = "submit: updateRecord" id = "absences-record"  action="" class="form-horizontal">
                <div data-bind = "foreach: familyInfoFields">
                <div class="well">
                  <div class="form-group">
                    <div class="col-md-5">
                      <label for=""  class="text-primary">Member</label>
                      <select data-bind = "options: $root.datas.familyMembers, optionsCaption: 'Select Member',value:member" name="" id="" class="form-control"></select>
                    </div>
                    <div class="col-md-7">
                      <label for="" class="text-primary">Name</label>
                      <input data-bind = "value: name"type="text" class="form-control"placeholder = "Juan Dela Cruz">
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
                      <button data-bind = "click: $parent.removeField" type="button" class="btn btn-danger btn-xs">Remove</button>
                    </div>
                  </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-4">
                    <label for="" class="text-primary">Birth Order</label>
                    <div class="radio">
                        <label>
                        <input data-bind = "checked: birth_order," type="radio" name="birth_oder" id="" value="Eldest">
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
                    <input data-bind = "textInput: number_of_brothers" type="number"min = "0" value = "0" class="form-control text-center">
                  </div>
                  <div class="col-md-4">
                    <label for="" class="text-primary">No. of Sister/s</label>
                    <input data-bind = "textInput: number_of_sisters" type="number" min = "0" value="0" class="form-control text-center">
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
                        <input data-bind = "checked: parent_marital_status" type="radio" name="parent_marital_status" id="" value="Others">
                          Others
                        </label>
                    </div>
                    <input data-bind = "if: parent_marital_status == 'Others', textInput: others" type="text" class="form-control" placeholder = "Others, please specify">
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
                    <input data-bind = "textInput: family_income" type="number" class="form-control text-center">
                  </div>
                </div>

  

              </form>
            </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button data-bind = "click: updateRecord" type="button" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>




<div data-bind = "with: educationalBackgroundVM" class="modal fade" id="editEducationalModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 80%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">
                    Edit Educational Background
                </h4>
            </div>
            <div class="modal-body" style="overflow-y: scroll;max-height:500px;scroll: top;">
              <div class="row-fluid">
               <form  id = "absences-record"  action="" class="form-horizontal">
                <div data-bind = "foreach: fields">
                  <div class="well">            
                    <div class="form-group">
                      <div class="col-md-4">
                        <label for="" class="text-primary">Level</label>
                        <select data-bind = "options: $root.datas.educationalLevel, optionsCaption: 'Select Level', value: level" class="form-control" required></select>
                      </div>
                      <div class="col-md-5">
                        <label for="" class="text-primary">Name of School &amp; Address</label>
                        <input data-bind = "textInput: school_name_address" type="text" class="form-control" required>
                      </div>
                      <div data-bind = "style: {display: level == 'College' || level == 'Transferee/Shifter' ? 'block' : 'none'}" class="col-md-3">
                        <label for="" class="text-primary">Degree Course</label>
                        <select data-bind = "options: $root.datas.courses, optionsCaption: 'Select Degree/Course',optionsText: 'name', optionsValue: 'id', value: degree_course" class="form-control"></select>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-2">
                        <label for="" class="text-primary">Year Graduated</label>
                        <input data-bind = "dateTimePicker: year_graduated, dateTimePickerOptions: {format: 'YYYY', maxDate: moment()}" type="text" class="form-control" required>
                      </div>
                      <div class="col-md-7">
                        <label for="" class="col-md-12 text-primary">Inclusive Dates of Attendance</label>
                        <div class="col-md-4">
                          <input data-bind = "dateTimePicker: date_from, dateTimePickerOptions: {format: 'YYYY'}" type="text" class="form-control" placeholder = "From" required>
                        </div>
                        <div class="col-md-4">
                          <input data-bind ="dateTimePicker: date_to, dateTimePickerOptions: {format: 'YYYY', maxDate: moment()}" type="text" class="form-control" placeholder = "To" required>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <label for="" class="text-primary">General Average</label>
                        <input data-bind = "textInput: general_average" type="number" min = "1" step = ".5" class="form-control text-center" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-md-11">
                        <label for="" class="text-primary">Awards Received</label>
                        <textarea data-bind = "textInput: awards" style="resize:none" name="" id="" cols="20" rows="2" class="form-control"  placeholder = "e.g. Valledictorian, Cum Laude, etc."></textarea>
                      </div>
                      <div class="col-md-1">
                        <label for=""></label><br />
                        <button data-bind = "click: $parent.removeFieldFromDB" class="btn btn-danger btn-xs">Remove</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button data-bind = "click: updateRecord" type="button" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>





<div data-bind = "with: studentInfoVM" class="modal fade" id="editPersonalModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 80%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">
                    Edit Personal Info
                </h4>
            </div>
            <div class="modal-body" style="overflow-y: scroll;max-height:500px;scroll: top;">
              <div class="row-fluid">
                <form class="form-horizontal">
                  <div class="form-group">
                    <div class="col-md-2">
                      <label for="school_id" class="text-primary">School ID</label>
                      <input id="school_id" data-bind = "textInput: school_id, event: {blur: checkSchoolID}" type="text" class="form-control input-" placeholder = "xx-xxxxx" name="school_id" required>
                    </div>
                    <div class="col-md-2">
                      <label for="unp_cat_rating" class="text-primary">UNP-CAT Rating</label>
                      <input id="unp_cat_rating" data-bind = "textInput: unp_cat_rating" type="number" min = "1" max = "100" step = ".1" class="form-control text-center" name="unp_cat_rating" required>
                    </div>
                    <div class="col-md-4">
                      <label for="scholarship_id" class="text-primary">Scholarship</label>
                      <select id="scholarship_id" data-bind = "options: $root.datas.scholarships,optionsText: 'name',optionsValue: 'id',optionsCaption: 'Select scholarship (if any)', value: scholarship_id" class="form-control" name="scholarship_id"></select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-4">
                      <label for="college_id" class="text-primary">College</label>
                      <select id="college_id" data-bind = "options: $root.datas.colleges, optionsText: 'name', optionsCaption:'Select College',optionsValue: 'id',value: editCollege" class="form-control" name="college_id" required></select>
                    </div>
                    <div class="col-md-4">
                      <label for="course_id" class="text-primary">Course</label>
                      <select id="course_id" data-bind = "enable : editCourses(),options: editCourses, optionsText: 'name',optionsValue: 'id',optionsCaption:'Selec Course',value: editCourse" class="form-control" name="course_id" required></select>
                    </div>
                    <div class="col-md-2">
                      <label for="year" class="text-primary">Year</label>
                      <select id="year" data-bind = "options: $root.datas.yearLevels, optionsCaption: 'Select Year', value: year_level" class="form-control" name="year" required></select>
                    </div>
                    <div class="col-md-2">
                      <label for="section" class="text-primary">Section</label>
                      <input id="section" data-bind = "enable: year_level(),textInput: section" type="text" class="form-control capitalize" name="section">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-4">
                      <label for="lname" class="text-primary">Last Name</label>
                      <input id="lname" data-bind = "textInput: lname" type="text" class="form-control capitalize" placeholder = "Dela Cruz" name="lname" required>
                    </div>

                    <div class="col-md-4">
                    <label for="fname" class="text-primary">First Name</label>
                      <input id="fname" data-bind = "textInput: fname" type="text" class="form-control capitalize" placeholder = "Juan" name="fname" required>
                    </div>

                    
                    <div class="col-md-4">
                    <label for="mname" class="text-primary">Middle Name</label>
                      <input id="mname" data-bind = "textInput: mname" type="text" class="form-control capitalize" placeholder = "Luna" name="mname">
                    </div>
                  </div>

                  <div class="form-group">
          
                    <div class="col-md-3">
                      <label for="" class="text-primary">Birth Date</label>
                      <input data-bind = "dateTimePicker: birthdate, dateTimePickerOptions: {format: 'YYYY-MM-DD'}" type="text" class="form-control date-input" placeholder = "YYYY-MM-DD" required>
                    </div>

                    
                    <div class="col-md-1">
                    <label for="" class="text-primary">Age</label>
                      <input data-bind = "textInput: age" type="number" class="form-control " value="0" placeholder = "0" readonly="">
                    </div>

                    
                    <div class="col-md-5">
                    <label for="" class="text-primary">Place of Birth</label>
                      <input data-bind = "textInput: place_of_birth" type="text" class="form-control capitalize" placeholder = "e.g. Gabriela Silang General Hospital" required>
                    </div>
                    <div class="col-md-3">
                    <label for="" class="text-primary">Citizenship</label>
                      <select data-bind = "value: citizenship" class="form-control " required>
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
                            <input data-bind = "checked: sex" type="radio" name="sex" id="" value="Male" required>
                              Male
                          </label>
                          <label>
                          <input data-bind = "checked: sex" type="radio" name="sex" id="" value="Female" required>
                            Female
                          </label>
                          <label>
                          <input data-bind = "checked: sex" type="radio" name="sex" id="" value="Gay" required>
                            Gay
                          </label>
                          <label>
                          <input data-bind = "checked: sex" type="radio" name="sex" id="" value="Lesbian" required>
                            Lesbian
                          </label>
                          <label>
                          <input data-bind = "checked: sex" type="radio" name="sex" id="" value="Bisexual" required>
                            Bisexual
                          </label>
                          <label>
                          <input data-bind = "checked: sex" type="radio" name="sex" id="" value="Transgender" required>
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
                      <input data-bind = "enable: canAddDateOfMarriage, dateTimePicker: date_of_marriage, dateTimePickerOptions: {format: 'YYYY-MM-DD'}" type="text" class="form-control date-input" placeholder = "YYYY-MM-DD">
                    </div>
                  </div>



                  <div class="form-group">
                    <div class="col-md-4">
                      <label for="" class="text-primary">Height</label>
                      <input data-bind = "textInput: height" type="number" min = "1" step = ".1" max = "5" class="form-control text-center" placeholder = "Metres">
                    </div>
                    <div class="col-md-4">
                      <label for="" class="text-primary">Weight</label>
                      <input data-bind = "textInput: weight" type="number" min = "1" step = ".1" max = "100" class="form-control text-center" placeholder = "Kilogram">
                    </div>
                    <div class="col-md-4">
                      <label for="" class="text-primary">Bloodtype</label>
                      <select data-bind = "value: bloodtype" class="form-control ">
                        <option value="">Select bloodtype</option>
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
                      <input data-bind = "textInput: contact_number" type="text" class="form-control phone" placeholder = "xxxx-xxxx-xxx">
                    </div>
                    <div class="col-md-4">
                      <label for="" class="text-primary">E-mail Address</label>
                      <input data-bind = "textInput: email" type="email" class="form-control " placeholder = "juan@example.com" >
                    </div>
                    <div class="col-md-4">
                      <label for="" class="text-primary">Illness</label>
                      <input data-bind = "textInput: illness" type="text" class="form-control capitalize" placeholder = "e.g.Asthma">
                    </div>
                  </div>


                  <div class="form-group">
                    <div class="col-md-4">
                      <label for="" class="text-primary">Religion or Relligious Affil.</label>
                      <input data-bind = "textInput: religion" type="text" class="form-control capitalize" required>
                    </div>
                    <div class="col-md-4">
                      <label for="" class="text-primary">Ethnic/Tribal Affilation</label>
                      <input data-bind = "textInput: ethnic" type="text" class="form-control capitalize" placeholder = "e.g. Bago, Tribe">
                    </div>
                    <div class="col-md-4">
                      <label for="" class="text-primary">Disability</label>
                      <input data-bind = "textInput: disability" type="text" class="form-control capitalize" placeholder = "e.g. speech defect, physical deformities">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-12">
                      <label for="" class="text-primary">Home / Permanent Address</label>
                      <input data-bind = "textInput: home_address" type="text" class="form-control capitalize" placeholder = "Brgy/Town/City/Province" required>
                    </div>
                  </div>


                  <div data-bind = "foreach: present_addresses">
                    <div class="form-group">
                      <div class="col-md-12">
                        <label for="" class="text-primary">Present Address</label>
                      </div>
                      <div class="col-md-2">
                        <select data-bind = "options: $root.datas.yearLevels, optionsCaption: 'Year Level',value: year_level" class="form-control capitalize" required>
                        </select>
                      </div>
                      <div class="col-md-8">
                        <input name="present_addresses" value="[]" data-bind = "textInput: address" type="text" class="form-control " placeholder = "Brgy/Town/City/Province" required>
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
                        <input data-bind = "textInput: address" type="text" class="form-control capitalize" placeholder = "Brgy/Town/City/Province">
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

  














                </form>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button data-bind = "click: updateRecord" type="button" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>