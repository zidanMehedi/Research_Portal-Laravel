@extends('admin/adminActiveStudentList/nav')

@section('index')
    <title>Active Student List</title>
    
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
                          <th scope="col" class="border-0">ID</th>
                          <th scope="col" class="border-0">First Name</th>
                          <th scope="col" class="border-0">Last Name</th>
                          <th scope="col" class="border-0">Email</th>
                          <th scope="col" class="border-0">Phone</th>
                          <th scope="col" class="border-0">Department</th>
                          <th scope="col" class="border-0">Complete Credit</th>
                          <th scope="col" class="border-0">CGPA</th>
                          <th scope="col" class="border-0">Register Date</th>
                          <th scope="col" class="border-0">Account Status</th>
                          <th scope="col" class="border-0" colspan="2">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <div id="student">
                            @foreach ($student as $key)
                        
          				        <tr>
          				        	<td>{{$key['student_id']}}</td>
      				              	<td>{{$key['student_fname']}}</td>
      					            <td>{{$key['student_lname']}}</td>
      					            <td>{{$key['student_email']}}</td>
      					            <td>{{$key['student_contact']}}</td>
      					            <td>{{$key['student_dept']}}</td>
                                    <td>{{$key['student_credit']}}</td>
                                    <td>{{$key['student_cgpa']}}</td>
      					            <td>{{$key['student_regDate']}}</td>
      					            <td style="color: green;">Active</td>
                            
      					            <td colspan="2">
      									<a style="background-color: AliceBlue;color: DodgerBlue;font-weight: bold;padding: 2px 3px;text-align: center;text-decoration: none;display: inline-block;border: 1px solid DodgerBlue;" href="{{route('adminUpdateStudent', $key['student_id'])}}">Update</a><br><br>
      								
      								
                                        <a style="background-color: AliceBlue;color: DodgerBlue;font-weight: bold;padding: 2px 3px;text-align: center;text-decoration: none;display: inline-block;border: 1px solid DodgerBlue;" href="{{route('adminBlockStudent', $key['sid'])}}">Block</a><br><br>
      						        
                                    
                                        <a style="background-color: AliceBlue;color: DodgerBlue;font-weight: bold;padding: 2px 3px;text-align: center;text-decoration: none;display: inline-block;border: 1px solid DodgerBlue;" href="{{route('adminDeleteStudent', $key['student_id'])}}">Delete</a> 
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