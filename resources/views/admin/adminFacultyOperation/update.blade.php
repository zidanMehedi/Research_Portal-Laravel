@extends('admin/adminAddFaculty/nav')

@section('index')
	<title>Update Faculty</title>
		<div class="container-login100" style="width:900px;margin-left: 100px">
			<div class="wrap-login101">
				<div class="login100-form-title" style="background-image: url(/images/unnamed.jpg);">
					<span class="login100-form-title-1">
						Update Faculty
					</span>
				</div>

				<form method="POST" class="login101-form validate-form">
                    {{csrf_field()}}
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
            <input class="input100" type="text" name="userid" placeholder="Enter Faculty ID" value="{{$faculty_id}}">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-18" data-validate = "First Name is required">
            <input class="input100" type="text" name="fname" placeholder="Enter First Name" value="{{$faculty_fname}}">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-26" data-validate="Last Name is required">
            <input class="input100" type="text" name="lname" placeholder="Enter Last Name" value="{{$faculty_lname}}">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-18" data-validate = "Email is required">
            <input class="input100" type="text" name="email" placeholder="Enter Valid Email" value="{{$faculty_email}}">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-18" data-validate = "Contact No. is required">
            <input class="input100" type="text" name="contact" placeholder="Enter Contact Number" value="{{$faculty_contact}}">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-18" data-validate = "Department Name is required">
            <input class="input100" type="text" name="dept" placeholder="Enter Department" value="{{$faculty_dept}}" readonly>
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
    </footer>
	
	
@endsection