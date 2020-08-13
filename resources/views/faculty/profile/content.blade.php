
@extends('faculty/profile/index')



@section('content')
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">User Profile</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col-lg-4">
                <div class="card card-small mb-4 pt-3">
                  <div class="card-header border-bottom text-center">
                    <div class="mb-3 mx-auto">
                      <img class="rounded-circle" src="images/avatars/Admin.jpg" alt="User Avatar" width="110"> </div>
                    <h4 class="mb-0">{{$details['faculty_fname']}} {{$details['faculty_lname']}}</h4>
                    <span class="text-muted d-block mb-2">{{$details['faculty_dept']}}<br>{{$details['faculty_id']}}<br>{{$details['faculty_email']}}</span>
                  </div>

                  <ul class="list-group list-group-flush">
                    <li class="list-group-item px-4">
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Account Details</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <form method="POST">
                            @csrf
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feFirstName">First Name</label>
                                <input type="text" class="form-control" name="fname" placeholder="First Name" value="{{$details['faculty_fname']}}"> 

                              </div>
                              <div class="form-group col-md-6">
                                <label for="LastName">Last Name</label>
                                <input type="text" class="form-control" name="lname" placeholder="Last Name" value="{{$details['faculty_lname']}}"> 

                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feEmailAddress">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Email" value="{{$details['faculty_email']}}">

                                 </div>
                              <div class="form-group col-md-6">
                                <label for="fePassword">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password">

                                 </div>
                            </div>
                            <div class="form-group">
                              <label for="feInputAddress">Register Date</label>
                              <input type="text" class="form-control" id="feInputAddress" placeholder="1234 Main St" value="{{$details['faculty_regDate']}}" disabled> </div>
                            <div class="form-row">
                              <!-- <div class="form-group col-md-6">
                                <label for="feInputCity">Contact</label>
                                <input type="text" class="form-control" name="contact" value="<%=details.faculty_contact%>">

                                 </div> -->
                              <div class="form-group col-md-4">
                                <label for="feInputState">UserID</label>
                                <input type="text" class="form-control" name="userid" value="{{$details['faculty_id']}}" disabled>
                              </div>
                              <div class="form-group col-md-2">
                                <label for="inputZip">Department</label>
                                <input type="text" class="form-control" name="dept" value="{{$details['faculty_dept']}}" disabled> </div>
                            </div>
                            <div class="form-row">
                            </div>
                            <button type="submit" class="btn btn-accent">Update Account</button>
                          </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- End Default Light Table -->
          </div>

          @if($errors->any())
            <script>alert`{!! implode('', $errors->all(':message')) !!}`</script>
          @endif

@endsection