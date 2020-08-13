@extends('admin/adminPendingStudentList/nav3')

@section('profile')
  <title>Student Profile</title>
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
            <td>Student ID</td>
            <td>{{$student_id}}</td>
          </tr>

          <tr>
            <td>First Name</td>
            <td>{{$student_fname}}</td>
          </tr>

          <tr>
            <td>Last Name</td>
            <td>{{$student_lname}}</td>
          </tr>

          <tr>
            <td>Email</td>
            <td>{{$student_email}}</td>
          </tr>

          <tr>
            <td>Phone</td>
            <td>{{$student_contact}}</td>
          </tr>

          <tr>
            <td>Department</td>
            <td>{{$student_dept}}</td>
          </tr>

          <tr>
            <td>Credit</td>
            <td>{{$student_credit}}</td>
          </tr>

          <tr>
            <td>CGPA</td>
            <td>{{$student_cgpa}}</td>
          </tr>

          <tr>
            <td>Account Status</td>
        @if($status == 1)
            <td style="color: green;">Active</td>
        @else
            <td style="color: red;">Inactive</td>
        @endif
          </tr>

          <tr>
            <td colspan="2"><a href="{{route('approveStudentList.index')}}"><input type="button" name="cancel" value="Back"></a></td>
          </tr>
          
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