@extends('faculty/topicAdd/index')

@section('content')

		<div class="container-login100" style="width:900px;margin-left: 110px">
			<div class="wrap-login101" class="text-center">
				<div class="login100-form-title" style="background-image: url(/images/unnamed.jpg);">
					<span class="login100-form-title-1">
						Offer Research / Software Project Topic
					</span>
				</div>

				<form class="login101-form validate-form" method="POST">
					@csrf
					<div class="wrap-input100 validate-input m-b-26" data-validate="Academic Id is required">
						<input class="input100" type="text" name="topicName" placeholder="Enter Topic NAME">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18" data-validate = "">
            <select id="feInputState" class="form-control" name="type">
                <option selected value="">Select Type</option>
                @for($i=0; $i< count($type); $i++)
                <option value="{{$type[$i]['type_id']}}">{{$type[$i]['type_name']}}</option>
                @endfor
            </select>
            <br>
						<span class="focus-input100"></span>
					</div>

          <div class="wrap-input100 validate-input m-b-26" data-validate="Academic Id is required">
            <select id="feInputState" class="form-control" name="domain">
                <option selected value="">Select Domain</option>
                 @for($i=0; $i< count($domain); $i++)
                  <option value="{{$domain[$i]['dom_id']}}">{{$domain[$i]['dom_name']}}</option>
                 @endfor
              </select>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-18">
            <select id="feInputState" class="form-control" name="supervisor" readonly>
                <option selected value="{{$faculty['fid']}}"><b>{{$faculty['faculty_fname']}} {{$faculty['faculty_lname']}}</b></option>

            </select>
            <br>
            <span class="focus-input100"></span>
          </div>


					<div class="wrap-input100 validate-input m-b-18" data-validate = "Description is required">
						<textarea class="input100" type="text" name="topicDes" placeholder="Enter Research or Software Project Details"></textarea>
						<span class="focus-input100"></span>
					</div>

					<div id="login100-form-Btn">
						<button class="login101-form-btn">
							Add Topic
						</button>
					</div>
				</form>
			</div>
		</div>



@if($errors->any())
            <script>alert`{!! implode('', $errors->all(':message')) !!}`</script>
          @endif

@endsection