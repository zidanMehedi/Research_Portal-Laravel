@extends('generalLogin/index')

@section('content')
<div class="login100-form-title" style="background-image: url(/images/unnamed.jpg);">
    <span class="login100-form-title-1">
        {{__('REGISTER')}}
    </span>
</div>

<form class="login101-form validate-form" method="post" enctype="multipart/form-data">
    {{ csrf_field()}}

    <div class="form-group validate-input m-b-18" data-validate="This Field is Required" style="width: 100%">
        <input class="input100 form-control @error('userid') is-invalid @enderror" type="text" name="userid" placeholder="Academic ID" value="{{$errors->has('userid') ? '' : old('userid')}}">
        <span class="focus-input100"></span>
        @error('userid')
        <span id="emailHelp" class="invalid-feedback">
            <strong style="font-size: 12px;">** {{$message}}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group validate-input m-b-18" data-validate="This Field is Required" style="width: 100%">
        <input class="input100 form-control @error('fname') is-invalid @enderror" type="text" name="fname" placeholder="Enter First Name" value="{{$errors->has('fname') ? '' : old('fname')}}">
        <span class="focus-input100"></span>
        @error('fname')
        <span id="emailHelp" class="invalid-feedback">
            <strong style="font-size: 12px;">** {{$message}}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group validate-input m-b-18" data-validate="This Field is Required" style="width: 100%">
        <input class="input100 form-control @error('lname') is-invalid @enderror" type="text" name="lname" placeholder="Enter Last Name" value="{{$errors->has('lname') ? '' : old('lname')}}">
        <span class="focus-input100"></span>
        @error('lname')
        <span id="emailHelp" class="invalid-feedback">
            <strong style="font-size: 12px;">** {{$message}}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group validate-input m-b-18" data-validate="This Field is Required" style="width: 100%">
        <input class="input100 form-control @error('email') is-invalid @enderror" type="text" name="email" placeholder="Enter Valid Email" value="{{$errors->has('email') ? '' : old('email')}}">
        <span class="focus-input100"></span>
        @error('email')
        <span id="emailHelp" class="invalid-feedback">
            <strong style="font-size: 12px;">** {{$message}}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group validate-input m-b-18" data-validate="This Field is Required" style="width: 100%">
        <input class="input100 form-control @error('contact') is-invalid @enderror" type="text" name="contact" placeholder="Contact Number" value="{{$errors->has('contact') ? '' : old('contact')}}">
        <span class="focus-input100"></span>
        @error('contact')
        <span id="emailHelp" class="invalid-feedback">
            <strong style="font-size: 12px;">** {{$message}}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group validate-input m-b-18" data-validate="This Field is Required" style="width: 100%">
        <input class="input100 form-control @error('cgpa') is-invalid @enderror" type="text" name="cgpa" placeholder="Enter CGPA" value="{{$errors->has('cgpa') ? '' : old('cgpa')}}">
        <span class="focus-input100"></span>
        @error('cgpa')
        <span id="emailHelp" class="invalid-feedback">
            <strong style="font-size: 12px;">** {{$message}}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group validate-input m-b-18" data-validate="This Field is Required" style="width: 100%">
        <input class="input100 form-control @error('dept') is-invalid @enderror" type="text" name="dept" placeholder="Enter Department" value="{{$errors->has('dept') ? '' : old('dept')}}">
        <span class="focus-input100"></span>
        @error('dept')
        <span id="emailHelp" class="invalid-feedback">
            <strong style="font-size: 12px;">** {{$message}}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group validate-input m-b-18" data-validate="This Field is Required" style="width: 100%">
        <input class="input100 form-control @error('credit') is-invalid @enderror" type="text" name="credit" placeholder="Credit Completed (After This Semester)" value="{{$errors->has('credit') ? '' : old('credit')}}">
        <span class="focus-input100"></span>
        @error('credit')
        <span id="emailHelp" class="invalid-feedback">
            <strong style="font-size: 12px;">** {{$message}}</strong>
        </span>
        @enderror
    </div>

    <div class="panel panel-info" style="width: 100%">
        <div class="panel-body">

            <div class="form-group">
                <label for="file" class="col-md-3 control-label">Upload Document</label>
                <div class="col-md-9">
                    <input type="file" class="form-control" name="myFile" style="padding-bottom: 32px">
                </div>
            </div>
        </div>
    </div>
    @if($errors->has('myFile'))
    <small class="form-text" style="color: red">** {{$errors->first('myFile')}}</small>
    @endif
    <div class="alert  mt-5" role="alert" style="width: 100%;padding-top:2px; padding-bottom:0px;">
        <div class="row justify-content-sm-center justify-content-lg-center justify-content-md-center">
            <div class=" col-sm-auto col-lg-auto col-md-auto" style="text-align: center">
                <input type="submit" class="btn btn-primary" id="onHover" value="Sign Up" style="width: 200px;">
            </div>
        </div>
    </div>

    <div class="alert" role="alert" style="width: 100%;padding-top:0px; padding-bottom:0px;">
        <div class="row justify-content-sm-center justify-content-lg-center justify-content-md-center">
            <div class=" col-sm-auto col-lg-auto col-md-auto" style="text-align: center">
                <a href="{{route('login')}}" class="txt1">Already Registered?</a>
            </div>
        </div>
    </div>
</form>
@endsection

@section('title')
{{__('Registration')}}
@endsection
