@extends('generalLogin/index')

@section('content')
<div class="login100-form-title" style="background-image: url(/images/unnamed.jpg);">
				<span class="login100-form-title-1">
					Sign In
				</span>
			</div>
			
			<form class="login100-form validate-form"  style="padding-bottom: 25px" method="POST">
				@if(session()->has('success'))
			 	<div class="alert alert-success" role="alert" style="width: 100%;padding-top:2px; padding-bottom:2px;"> 
                    <div class="panel-body">
                        <div class="row justify-content-sm-center justify-content-lg-center justify-content-md-center">
                            <div class=" col-sm-auto col-lg-auto col-md-auto" style="text-align: center">
                                <strong>{{session('success')}}</strong>
                            </div>
                        </div>
                     </div>
                </div>
                @endif
                
				@if(session()->has('msg'))
			 	<div class="alert alert-warning" role="alert" style="width: 100%;padding-top:2px; padding-bottom:2px;"> 
                    <div class="panel-body">
                        <div class="row justify-content-sm-center justify-content-lg-center justify-content-md-center">
                            <div class=" col-sm-auto col-lg-auto col-md-auto" style="text-align: center">
                                <strong>{{session('msg')}}</strong>
                            </div>
                        </div>
                     </div>
                </div>
                @endif
				<!-- else if(.......) -->
				<!-- <div class="panel panel-info" style="width: 100%"> 
				    <div class="panel-body" >
				             
				            <div class="form-group" >
				                <div class="col-md-9" >
				                    <center>
				                    	<span style="color: red; padding-left: 95px;">Inactive Account</span>
				                    </center>
				                </div>
				            </div>
				     </div>
				</div> -->
				 <!-- else -->
				 <!-- <div></div> -->
				 <!-- end -->
				{{ csrf_field()}}
				<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
					<input class="input100" type="text" name="uname" placeholder="Enter UserId">

					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">

					<input class="input100" type="password" name="password" placeholder="Enter Password" value="">
					<span class="focus-input100"></span>
				</div>

				<div class="alert  mt-5" role="alert" style="width: 100%;padding-top:2px; padding-bottom:0px;">           
                    <div class="row justify-content-sm-center justify-content-lg-center justify-content-md-center">
                        <div class=" col-sm-auto col-lg-auto col-md-auto" style="text-align: center">
                            <input type="submit" class="btn btn-primary" id="onHover" value="Login" style="width: 200px;">
                        </div>
                    </div> 
                </div>

                <div class="alert" role="alert" style="width: 100%;padding-top:0px; padding-bottom:0px;">   
                    <div class="row justify-content-sm-center justify-content-lg-center justify-content-md-center">
                        <div class=" col-sm-auto col-lg-auto col-md-auto" style="text-align: center">
                            <a href="{{route('studentReg')}}" class="txt1">Not Registered Yet?</a>
                        </div>
                    </div>    
                </div>
			</form>
		</div>
@endsection

@section('title')
{{__('Login')}}
@endsection