@extends('admin/adminAddFaculty/nav')

@section('index')
        <title>Add Faculty</title>
		<div class="container-login100" style="width:900px;margin-left: 100px">
			<div class="wrap-login101" class="text-center">
				<div class="login100-form-title" style="background-image: url(/images/unnamed.jpg);">
					<span class="login100-form-title-1">
						Add Faculty
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
						<input class="input100" type="text" name="userid" placeholder="Enter Faculty ID">
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
						<input class="input100" type="text" name="contact" placeholder="Enter Contact Number">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Department Name is required">
						<input class="input100" type="text" name="dept" placeholder="Enter Department" value="CS" readonly>
						<span class="focus-input100"></span>
					</div>

					<div id="login100-form-Btn">
						<button type="submit" class="login101-form-btn">
							Register
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
    </footer>
	
@endsection