@extends('faculty/passChange/index')

@section('content')

<div class="container-login100" style="width:900px;margin-left: 100px">
			<div class="wrap-login101" class="text-center">
				<div class="login100-form-title" style="background-image: url(/images/unnamed.jpg);">
					<span class="login100-form-title-1">
						Change Password
					</span>
				</div>

				<form class="login101-form validate-form" method="POST">
					@csrf
					<div class="wrap-input100 validate-input m-b-26" data-validate="Academic Id is required">
						<input class="input100" type="password" name="oldPass" placeholder="Enter Old Password">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Topic name is required">
						<input class="input100" type="password" name="newPass" placeholder="Enter New Password">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Description is required">
						<input class="input100" type="password" name="confirmNewPass" placeholder="Enter Confirm New Password">
						<span class="focus-input100"></span>
					</div>

					<div id="login100-form-Btn">
						<button class="login101-form-btn">
							Change
						</button>
					</div>
				</form>
			</div>
		</div>
	
          @if($errors->any())
            <script>alert`{!! implode('', $errors->all(':message')) !!}`</script>
          @endif

@endsection