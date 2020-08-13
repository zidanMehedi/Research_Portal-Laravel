 @extends('student/ParentLayout/header')

 @section('home')
 <div class="page-header row no-gutters py-4" style="margin-left: 10px;">
     <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
         <span class="text-uppercase page-subtitle">Overview</span>
         <h3 class="page-title">Change Password</h3>
     </div>
 </div>
 <!-- <%if(user==null){%> -->
 <div class="container">
     <div class="row justify-content-lg-center justify-content-md-center justify-content-sm-center">
         <div class="col-lg-6 mt-4" style="border:1px solid #D3D3D3; border-radius:5px; box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
             <div class=" mb-4 row justify-content-lg-center justify-content-md-center justify-content-sm-center">
                 <div style="width:100%; text-align:center; padding:10px; font-family:arial; font-size:25px; font-weight:bold; background-color:#D3D3D3">
                     <label for="title"><strong>Change Password</strong></label>
                 </div>
             </div>
             <form class="login100-form validate-form" style="padding-bottom: 25px" method="POST">
                 @csrf()
                 <!-- if(.......) -->
                 @if(session('old')!=null)
                 <div class="alert alert-danger mt-2 mb-2" role="alert" style="width: 100%;">
                     <div class="panel-body">
                         <div class="row justify-content-lg-center justify-content-md-center justify-content-sm-center">
                             <div class=" col-sm-auto col-lg-auto col-md-auto" style="text-align: center; font-size: 14px;">
                                 {{session('old')}}
                             </div>
                         </div>
                     </div>
                 </div>
                 @endif
                 @if($errors->any())
                 <div class="alert alert-danger mt-2 mb-2" role="alert" style="width: 100%;">
                     <div class="panel-body">
                         <div class="row">
                             <div class=" col-sm-auto col-lg-auto col-md-auto" style="font-size: 14px;">
                                 <ul style="margin:0">
                                     @foreach($errors->all() as $err)
                                     <li>{{$err}}</li>
                                     @endforeach
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
                 @endif

                 <div class="form-group validate-input m-b-26" data-validate="This Field is Required" style="width: 100%">
                     <input class="input100 form-control" type="password" name="oldPass" placeholder="Enter Current Password">
                     <span class="focus-input100"></span>
                 </div>

                 <div class="form-group validate-input m-b-18" data-validate="This Field is Required" style="width: 100%">

                     <input class="input100 form-control" type="password" name="newPass" placeholder="Enter New Password">
                     <span class="focus-input100"></span>
                 </div>

                 <div class="form-group validate-input m-b-18" data-validate="This Field is Required" style="width: 100%">

                     <input class="input100 form-control" type="password" name="newPass_confirmation" placeholder="Confirm New Password">
                     <span class="focus-input100"></span>
                 </div>

                 <div class="alert  mt-5" role="alert" style="width: 100%;padding-top:2px; padding-bottom:0px;">
                     <div class="row justify-content-sm-center justify-content-lg-center justify-content-md-center">
                         <div class=" col-sm-auto col-lg-auto col-md-auto" style="text-align: center">
                             <input type="submit" class="btn btn-primary" id="onHover" value="Save" style="width: 200px;">
                         </div>
                     </div>
                 </div>
             </form>
         </div>
     </div>
 </div>
 </div>
 </div>
 @endsection
