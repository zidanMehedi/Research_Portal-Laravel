@extends('faculty/addStudent/index')

@section('content')

    <div class="container-login100" style="width:900px; margin-left:110px;">
      <div class="wrap-login101">
        <div class="login100-form-title" style="background-image: url(/images/unnamed.jpg);">
          <span class="login100-form-title-1">
            Add Student
          </span>
        </div>

        <form method="POST" class="login101-form validate-form">
        	@csrf
          <div class="wrap-input100 validate-input m-b-26" data-validate="Academic Id is required">
            <input class="input100" type="text" name="userId" placeholder="Enter Academic ID (XX-XXXXX-X)">
            <span class="focus-input100"></span>

          </div>

          <div class="wrap-input100 validate-input m-b-18" data-validate = "First Name is required">
            <input class="input100" type="text" name="fname" placeholder="Enter First Name">
            <span class="focus-input100"></span>

          </div>

          <div class="wrap-input100 validate-input m-b-26" data-validate="Last Name is required">
            <input class="input100" type="text" name="lname" placeholder="Enter Last Name">
            <span class="focus-input100"></span>

          </div>

          <div class="wrap-input100 validate-input m-b-18" data-validate = "Email is required">
            <input class="input100" type="text" name="email" placeholder="Enter Valid Email">
            <span class="focus-input100"></span>

          </div>

          <div class="wrap-input100 validate-input m-b-18" data-validate = "Contact No. is required">
            <input class="input100" type="text" name="phnNo" placeholder="Enter Contact Number">
            <span class="focus-input100"></span>

          </div>

          <div class="wrap-input100 validate-input m-b-26" data-validate="CGPA is required">
            <input class="input100" type="text" name="cgpa" placeholder="Enter CGPA">
            <span class="focus-input100"></span>

          </div>

          <div class="wrap-input100 validate-input m-b-18" data-validate = "Department is required">
            <input class="input100" type="text" name="dept" placeholder="Enter Department">
            <span class="focus-input100"></span>

          </div>

          <div class="wrap-input100 validate-input m-b-26" data-validate="Credit is required">
            <input class="input100" type="text" name="credit" placeholder="Credit Completed (After This Semester)">
            <span class="focus-input100"></span>

          </div>

          

          <div id="login100-form-Btn">
            <button class="login101-form-btn">
              Register
            </button>
          </div>

          </div>
        </form>
      </div>
    </div>
  </div>




 @if($errors->any())
            <script>alert`{!! implode('', $errors->all(':message')) !!}`</script>
          @endif

@endsection