 @extends('student/ParentLayout/header')

@section('home')
<div class="page-header row no-gutters py-4" style="margin-left: 10px;">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                    <span class="text-uppercase page-subtitle">Overview</span>
                    <h3 class="page-title">Available Topics</h3>
                  </div>
                </div>
      <!-- <%if(user==null){%> -->
          <div class="container">
             <div class="row justify-content-lg-center justify-content-md-center justify-content-sm-center">  
                    <div class="wrap-login100">
                    <form class="login100-form validate-form"  style="padding-bottom: 25px" method="POST">
                      <!-- if(.......) -->
                      <div class="alert alert-danger" role="alert" style="width: 100%;"> 
                          <div class="panel-body">
                              <div class="row justify-content-sm-center justify-content-lg-center justify-content-md-center">
                                  <div class=" col-sm-auto col-lg-auto col-md-auto" style="text-align: center">
                                      <strong>Invalid Request</strong>
                                  </div>
                              </div>
                           </div>
                      </div>
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

                      <div class="form-group validate-input m-b-26" data-validate="This Field is Required" style="width: 100%">
                        <input class="input100 form-control" type="password" name="oldPass" placeholder="Enter Current Password">

                        <span class="focus-input100"></span>
                      </div>

                      <div class="form-group validate-input m-b-18" data-validate="This Field is Required" style="width: 100%">

                        <input class="input100 form-control" type="password" name="newPass" placeholder="Enter New Password" value="">
                        <span class="focus-input100"></span>
                      </div>

                      <div class="form-group validate-input m-b-18" data-validate="This Field is Required" style="width: 100%">

                        <input class="input100 form-control" type="password" name="conPass" placeholder="Confirm New Password" value="">
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