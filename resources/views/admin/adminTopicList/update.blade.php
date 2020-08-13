@extends('admin/adminAddFaculty/nav')

@section('index')
  <title>Update Topic</title>
		<div class="container-login100" style="width:900px;margin-left: 100px">
			<div class="wrap-login101" class="text-center">
				<div class="login100-form-title" style="background-image: url(/images/unnamed.jpg);">
					<span class="login100-form-title-1">
						Update Thesis / Software Project Topic
					</span>
				</div>

				<form method="POST" class="login101-form validate-form">
                    {{csrf_field()}}
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Topic name is required">
						<textarea class="input100" type="text" name="name" placeholder="Enter Research or Software Project Name" rows="6">{{$topic['subDom_name']}}</textarea>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Description is required">
						<textarea class="input100" type="text" name="description" placeholder="Enter Research or Software Project Details" rows="10">{{$topic['subDom_desc']}}</textarea>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Domain is required">
						<select class="input100" name="domain">
              				<option value="">Select Domain</option>
                        @foreach($domain as $key)
                            <option value="{{$key['dom_id']}}" {{ ( $key['dom_name'] == $onedomain['dom_name']) ? 'selected' : '' }}>{{$key['dom_name']}}</option>
                        @endforeach
            			</select>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Supervisor is required">
						<select class="input100" name="supervisor">
              				<option value="">Select Supervisor</option>
                        @foreach($teacher as $key)
                            <option value="{{$key['fid']}}" {{ ( $key['fid'] == $onefaculty['fid']) ? 'selected' : '' }}>{{$key['faculty_fname'].' '.$key['faculty_lname']}}</option>
                        @endforeach
            			</select>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Type is required">
						<select class="input100" name="type">
              				<option value="">Select Type</option>
              			@foreach($type as $key)
                            <option value="{{$key['type_id']}}" {{ ( $key['type_name'] == $onetype['type_name']) ? 'selected' : '' }}>{{$key['type_name']}}</option>
                        @endforeach
            			</select>
						<span class="focus-input100"></span>
					</div>

					<div id="login100-form-Btn">
						<button type="submit" class="login101-form-btn">
							Update Topic
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
    </footer>
		
@endsection