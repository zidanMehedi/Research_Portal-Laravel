@extends('admin/adminActiveFacultyList/nav')

@section('index')

<title>Active Faculty List</title>

            <div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <!-- <div class="card-header border-bottom">
                    <h6 class="m-0">Active Users</h6>
                  </div> -->
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">Faculty ID</th>
                          <th scope="col" class="border-0">First Name</th>
                          <th scope="col" class="border-0">Last Name</th>
                          <th scope="col" class="border-0">Email</th>
                          <th scope="col" class="border-0">Phone</th>
                          <th scope="col" class="border-0">Department</th>
                          <th scope="col" class="border-0">Register Date</th>
                          <th scope="col" class="border-0">Account Status</th>
                          <th scope="col" class="border-0" colspan="3">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <div id="faculty">
                            @foreach ($faculty as $key)
                        
          				        <tr>
          				        	<td>{{$key['faculty_id']}}</td>
      				              	<td>{{$key['faculty_fname']}}</td>
      					            <td>{{$key['faculty_lname']}}</td>
      					            <td>{{$key['faculty_email']}}</td>
      					            <td>{{$key['faculty_contact']}}</td>
      					            <td>{{$key['faculty_dept']}}</td>
      					            <td>{{$key['faculty_regDate']}}</td>
      					            <td style="color: green;">Active</td>
                            
      					            <td>
      									<a style="background-color: AliceBlue;color: DodgerBlue;font-weight: bold;padding: 2px 3px;text-align: center;text-decoration: none;display: inline-block;border: 1px solid DodgerBlue;" href="{{route('adminUpdateFaculty.index', $key['faculty_id'])}}">Update</a> 
      								</td> 
      								<td>
                                        <a style="background-color: AliceBlue;color: DodgerBlue;font-weight: bold;padding: 2px 3px;text-align: center;text-decoration: none;display: inline-block;border: 1px solid DodgerBlue;" href="{{route('adminBlockFaculty', $key['fid'])}}">Block</a> 
      						        </td>
                                    <td>
                                        <a style="background-color: AliceBlue;color: DodgerBlue;font-weight: bold;padding: 2px 3px;text-align: center;text-decoration: none;display: inline-block;border: 1px solid DodgerBlue;" href="{{route('adminDeleteFaculty.index', $key['faculty_id'])}}">Delete</a> 
                                    </td>
      						    </tr>
    					    @endforeach
                          </tbody>
                      </div>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
            
          </footer>
@endsection