@extends('admin/adminFacultyOperation/nav2')

@section('index')
    <title>Confirmation</title>
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
                        <th scope="col" class="border-0" style="color: DodgerBlue;">Criterion</th>
                        <th scope="col" class="border-0" style="color: DodgerBlue;">Information</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td>Faculty ID</td>
                        <td>{{$faculty_id}}</td>
                      </tr>

                      <tr>
                        <td>First Name</td>
                        <td>{{$faculty_fname}}</td>
                      </tr>

                      <tr>
                        <td>Last Name</td>
                        <td>{{$faculty_lname}}</td>
                      </tr>

                      <tr>
                        <td>Email</td>
                        <td>{{$faculty_email}}</td>
                      </tr>

                      <tr>
                        <td>Phone</td>
                        <td>{{$faculty_contact}}</td>
                      </tr>

                      <tr>
                        <td>Department</td>
                        <td>{{$faculty_dept}}</td>
                      </tr>

                      <tr>
                        <td>Account Status</td>
                    @if($status == 1)
                        <td style="color: green;">Active</td>
                    @else
                        <td style="color: red;">Inactive</td>
                    @endif
                    <form method="POST">
                    {{csrf_field()}}
                        <td><input type="text" name="id" hidden value="{{$faculty_id}}"></td>
                      </tr>

                      <tr>
                        <td colspan="2"><h3 style="color: red;">Are you sure to delete?</h3></td>
                      </tr>

                      <tr>
                        <td colspan="2">
                        	<input type="submit" name="submit" value="Delete">
                        	&emsp;&emsp;&emsp;&emsp;
                        	<a href="{{route('adminHome.index')}}"><input type="button" name="cancel" value="Cancel"></a>
                        </td>
                      </tr>
                  </form>
                    </tbody>
                  </table>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
            
          </footer>

@endsection