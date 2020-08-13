@extends('admin/adminAddFaculty/nav')

@section('index')
	<title>Offer Topic</title>
		<div class="container-login100" style="width:900px;margin-left: 100px">
			<div class="wrap-login101" class="text-center">
				<div class="login100-form-title" style="background-image: url(/images/unnamed.jpg);">
					<span class="login100-form-title-1">
						Offer Thesis / Software Project Topic
					</span>
				</div>

				<form method="POST" class="login101-form validate-form">
                    {{csrf_field()}}
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Topic name is required">
						<textarea class="input100" type="text" name="name" placeholder="Enter Research or Software Project Name" rows="6"></textarea>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Description is required">
						<textarea class="input100" type="text" name="description" placeholder="Enter Research or Software Project Details" rows="10"></textarea>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Domain is required">
						<select class="input100" name="domain">
              				<option value="">Select Domain</option>
              			@foreach($domain as $key1)
                            <option value="{{$key1['dom_id']}}">{{$key1['dom_name']}}</option>
                        @endforeach
            			</select>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Supervisor is required">
						<select class="input100" name="supervisor">
              				<option value="">Select Supervisor</option>
              			@foreach($teacher as $key2)
                            <option value="{{$key2['fid']}}">{{$key2['faculty_fname'].' '.$key2['faculty_lname']}}</option>
                        @endforeach
            			</select>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Type is required">
						<select class="input100" name="type">
                            <option value="">Select Type</option>
                        @foreach($type as $key3)
                            <option value="{{$key3['type_id']}}">{{$key3['type_name']}}</option>
                        @endforeach
                        </select>
						<span class="focus-input100"></span>
					</div>

					<div id="login100-form-Btn">
						<button type="submit" class="login101-form-btn">
							Add Topic
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
    </footer>

@endsection