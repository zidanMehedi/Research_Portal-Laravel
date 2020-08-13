@extends('admin/adminAddStudent/nav')

@section('index')
    <title>Update Student</title>
        <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
              <div class="limiter">
                <div style="margin-left: 161%;height: 20%">
        <ul>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              <img class="user-avatar rounded-circle mr-2" src="/images/avatars/Admin.jpg" alt="User Avatar">
              <span class="d-none d-md-inline-block">Admin</span>
              </a>
              <div class="dropdown-menu dropdown-menu-small">
                  
                      <a class="dropdown-item" href="{{route('adminChangePassword.index')}}">
                      <i class="material-icons">&#xE7FD;</i> Change Password</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item text-danger" href="/logout">
                      <i class="material-icons text-danger">&#xE879;</i> Logout </a>
              </div>
            </li>
        </ul>
      </div>
    <div class="container-login100" style="width:150%; margin-left:40%;">
      <div class="wrap-login101">
        <div class="login100-form-title" style="background-image: url(/images/unnamed.jpg);">
          <span class="login100-form-title-1">
            Update Student
          </span>
        </div>

        <form method="POST" class="login101-form validate-form">
            {{ csrf_field() }}
            <center>
                <table align="center">
                    @foreach($errors->all() as $error)
                        
                        <tr>
                            <td><b style="color: red;">{{$error}}</b></td>
                        </tr>
                        
                    @endforeach
                </table>
            </center>
          <div class="wrap-input100 validate-input m-b-26" data-validate="Academic Id is required">
            <input class="input100" type="text" name="userid" placeholder="Enter Academic ID" value="{{$student_id}}">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-18" data-validate = "First Name is required">
            <input class="input100" type="text" name="fname" placeholder="Enter First Name" value="{{$student_fname}}">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-26" data-validate="Last Name is required">
            <input class="input100" type="text" name="lname" placeholder="Enter Last Name" value="{{$student_lname}}">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-18" data-validate = "Email is required">
            <input class="input100" type="text" name="email" placeholder="Enter Valid Email" value="{{$student_email}}">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-18" data-validate = "Contact No. is required">
            <input class="input100" type="text" name="contact" placeholder="Enter Contact Number" value="{{$student_contact}}">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-18" data-validate = "Department is required">
            <input class="input100" type="text" name="dept" placeholder="Enter Department" value="{{$student_dept}}">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-26" data-validate="Credit is required">
            <input class="input100" type="text" name="credit" placeholder="Credit Completed (After This Semester)" value="{{$student_credit}}">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-26" data-validate="CGPA is required">
            <input class="input100" type="text" name="cgpa" placeholder="Enter CGPA" value="{{$student_cgpa}}">
            <span class="focus-input100"></span>
          </div>

          <div id="login100-form-Btn">
            <button type="submit" class="login101-form-btn">
              Update
            </button>
          </div>
        </form>
          </div>
      </div>
    </div>
  </div>
    </footer>
  </div>
	
	
@endsection