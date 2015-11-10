
{{-- COURSE MODAL BELOW --}}
<div data-bind ="with: studentInfoVM" class="modal fade" id="addCourseModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">
                    Add Course for <span data-bind = "text: college() ? college().name : ''"></span>
                </h4>
            </div>
            <form data-bind = "with: $parent.courseVM, submit: $parent.courseVM.addCourse" class="form-horizontal">
            <div class="modal-body">
    					<div class="form-group">
    						<div class="col-md-12">
    							<label for="name" class="text-primary">Course Name</label>
    							<input data-bind = "textInput: name" id="name" type="text" class="form-control" placeholder = "Course Name">
    						</div>
    					</div>
    					<div class="form-group">
    						<div class="col-md-12">
    							<div class="checkbox">
    								<label for="add-multiple" class="text-primary">
    									<input data-bind = "checked: addMultiple" id="add-multiple" type="checkbox">
    									Add multiple
    								</label>
    							</div>
    						</div>
    					</div>
            </div>
            <div data-bind = "with: $parent.courseVM" class="modal-footer">
             	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" >Add</button>
            </div>
          </form>
        </div>
    </div>
</div>

<div data-bind ="with: courseVM" class="modal fade" id="mainAddCourseModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">
                    Add Course for <span data-bind = "text: current_college() ? current_college().name : ''"></span>
                </h4>
            </div>
            <form data-bind = "submit: addCourse" class="form-horizontal">
            <div class="modal-body">
          		<div class="form-group">
          			<div class="col-md-12">
          				<label for="college_id" class="text-primary">College</label>
					         <select id="college_id" data-bind = "options: $root.datas.colleges, optionsText: 'name', optionsCaption:'Select College',value: current_college" class="form-control" name="college_id" required></select>
          			</div>
          		</div>
    					<div class="form-group">
    						<div class="col-md-12">
    							<label for="course-name" class="text-primary">Course Name</label>
    							<input data-bind = "textInput: name" id="course-name" type="text" class="form-control" placeholder = "Course Name" required>
    						</div>
    					</div>
    					<div class="form-group">
    						<div class="col-md-12">
    							<div class="checkbox">
    								<label for="add-multiple-course" class="text-primary">
    									<input data-bind = "checked: addMultiple" id="add-multiple-course" type="checkbox">
    									Add multiple
    								</label>
    							</div>
    						</div>
    					</div>
            </div>
            <div data-bind = "with: $parent.courseVM" class="modal-footer">
             	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" >Add</button>
            </div>
          </form>
        </div>
    </div>
</div>


<div data-bind ="with: courseVM" class="modal fade" id="editCourseModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">
                    Edit Course
                </h4>
            </div>
            <form data-bind = "submit: update" class="form-horizontal">
            <div class="modal-body">
              <div class="form-group">
                <div class="col-md-12">
                  <label for="college_id" class="text-primary">College</label>
                   <select id="college_id" data-bind = "options: $root.datas.colleges, optionsText: 'name',optionsValue: 'id',optionsCaption:'Select College', value: editCollege" class="form-control" name="college_id" required></select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <label for="course-name" class="text-primary">Course Name</label>
                  <input data-bind = "textInput: editName" id="course-name" type="text" class="form-control" placeholder = "Course Name" required>
                </div>
              </div>

            </div>
            <div data-bind = "with: $parent.courseVM" class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" >Update</button>
            </div>
          </form>
        </div>
    </div>
</div>

{{-- COLLEGE MODAL --}}
<div data-bind ="with: collegeVM" class="modal fade" id="addCollegeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">
                    Add College <span data-bind = "text: name()"></span>
                </h4>
            </div>
            <form data-bind = "submit: addCollege" class="form-horizontal">
            <div class="modal-body">
    					<div class="form-group">
    						<div class="col-md-12">
    							<label for="college-name" class="text-primary">College Name</label>
    							<input data-bind = "textInput: name" id="college-name" type="text" class="form-control" placeholder = "College Name" required>
    						</div>
    					</div>

    					<div class="form-group">
    						<div class="col-md-12">
    							<div class="checkbox">
    								<label for="add-multiple-college" class="text-primary">
    									<input data-bind = "checked: addMultiple" id="add-multiple-college" type="checkbox">
    									Add multiple
    								</label>
    							</div>
    						</div>
    					</div>
            </div>
            <div class="modal-footer">
             	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" >Add</button>
            </div>
          </form>
        </div>
    </div>
</div>


<div data-bind ="with: collegeVM" class="modal fade" id="editCollegeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">
                    Edit College <span data-bind = "text: name"></span>
                </h4>
            </div>
            <form data-bind = "submit: updateCollege" class="form-horizontal">
            <div class="modal-body">
              <div class="form-group">
                <div class="col-md-12">
                  <label for="college-name" class="text-primary">College Name</label>
                  <input data-bind = "textInput: name" id="college-name" type="text" class="form-control" placeholder = "College Name" required>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" >Update</button>
            </div>
          </form>
        </div>
    </div>
</div>


{{-- SCHOLARSHIP MODAL --}}
<div data-bind ="with: scholarshipVM" class="modal fade" id="addScholarshipModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">
                    Add Scholarship <span data-bind = "text: name()"></span>
                </h4>
            </div>
          <form data-bind = "submit: addScholarship" class="form-horizontal">
          <div class="modal-body">
  					<div class="form-group">
  						<div class="col-md-12">
  							<label for="scholarship-name" class="text-primary">Sholarship Name</label>
  							<input data-bind = "textInput: name" id="scholarship-name" type="text" class="form-control" placeholder = "Scholarship Name" required>
  						</div>
  					</div>
  					<div class="form-group">
  						<div class="col-md-12">
  							<div class="checkbox">
  								<label for="add-multiple-scholarship" class="text-primary">
  									<input data-bind = "checked: addMultiple" id="add-multiple-scholarship" type="checkbox">
  									Add multiple
  								</label>
  							</div>
  						</div>
  					</div>
              	
            </div>
            <div class="modal-footer">
             	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" >Add</button>
            </div>
          </form>
        </div>
    </div>
</div>














<div data-bind ="with: scholarshipVM" class="modal fade" id="editScholarshipModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">
                    Edit Scholarship <span data-bind = "text: name()"></span>
                </h4>
            </div>
          <form data-bind = "submit: update" class="form-horizontal">
          <div class="modal-body">
            <div class="form-group">
              <div class="col-md-12">
                <label for="scholarship-name" class="text-primary">Sholarship Name</label>
                <input data-bind = "textInput: name" id="scholarship-name" type="text" class="form-control" placeholder = "Scholarship Name" required>
              </div>
            </div>

                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" >Update</button>
            </div>
          </form>
        </div>
    </div>
</div>








<div data-bind ="with: userVM" class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">
                    Add User <span data-bind = "text: name()"></span>
                </h4>
            </div>
          <form data-bind = "submit: add" class="form-horizontal">
          <div class="modal-body">

            <div class="form-group">
              <div class="col-md-12">
                <label for="scholarship-name" class="text-primary">Role</label>
                <select data-bind = "value: role" class="form-control" required>
                  <option value="admin">Admin</option>
                  <option value="user">User</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12">
                <label for="scholarship-name" class="text-primary">Name</label>
                <input data-bind = "textInput: name" type="text" class="form-control" placeholder = "UserName" required>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12">
                <label for="scholarship-name" class="text-primary">Password</label>
                <input data-bind = "textInput: password" type="password" class="form-control" placeholder = "Password" minLength = "6"
                maxlength="13" required>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12">
                <label for="scholarship-name" class="text-primary">Re-type Password</label>
                <input data-bind = "textInput: passwordRetype" type="password" class="form-control" placeholder = "Re-type Password" minLength = "6"
                maxlength="13" required>
              </div>
            </div>
    
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button data-bind="enable : canAdd" type="submit" class="btn btn-primary" >Add</button>
            </div>
          </form>
        </div>
    </div>
</div>

<div data-bind ="with: userVM" class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">
                    Edit User <span data-bind = "text: name()"></span>
                </h4>
            </div>
          <form data-bind = "submit: update" class="form-horizontal">
          <!-- ko if: userInfo().role -->
          <div data-bind = "with : userInfo" class="modal-body">

            <div class="form-group">
              <div class="col-md-12">
                <label for="scholarship-name" class="text-primary">Role</label>
                <select data-bind = "value: role" class="form-control" required>
                  <option value="admin">Admin</option>
                  <option value="user">User</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12">
                <label for="scholarship-name" class="text-primary">Userame</label>
                <input data-bind = "textInput: $data.username" type="text" class="form-control" placeholder = "UserName" required>
              </div>
            </div>
                
            </div>
            <!-- /ko -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" >Add</button>
            </div>
          </form>
        </div>
    </div>
</div>


















