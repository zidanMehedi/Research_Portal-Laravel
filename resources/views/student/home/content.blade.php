 @extends('student/ParentLayout/header')

 @section('home')
 <!--  <%if(!error.student_fname && !error.student_lname && !error.student_dept && !error.student_cgpa && !error.student_credit){% -->
 @if(session('welcome')!=null)
 <div class="alert alert-success alert-dismissible fade show mb-0 btn-accent" role="alert">
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">×</span>
     </button>
     <i class="fa fa-check mx-2"></i>
     <strong>{{session('welcome')}} {{$student_lname}}!</strong>
 </div>
 @endif
 @if(session('updateMssg')!=null)
 <div class="alert alert-success alert-dismissible fade show mb-0 btn-danger" role="alert">
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">×</span>
     </button>
     <i class="fas fa-exclamation mx-2"></i>
     <strong>{{session('updateMssg')}}</strong>
 </div>
 @endif
 @if(count($errors)>0)
 @if($errors->has('student_fname'))
 <div class="alert alert-danger alert-dismissible fade show mb-0 btn-danger" role="alert">
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">×</span>
     </button>
     <i class="fas fa-exclamation mx-2"></i>
     <strong>{{$errors->first('student_fname')}}</strong>
 </div>
 @endif
 @if($errors->has('student_lname'))
 <div class="alert alert-danger alert-dismissible fade show mb-0 btn-accent" role="alert">
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">×</span>
     </button>
     <i class="fas fa-exclamation mx-2"></i>
     <strong>{{$errors->first('student_lname')}}</strong>
 </div>
 @endif
 @if($errors->has('student_dept'))
 <div class="alert alert-danger alert-dismissible fade show mb-0 btn-danger" role="alert">
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">×</span>
     </button>
     <i class="fas fa-exclamation mx-2"></i>
     <strong>{{$errors->first('student_dept')}}</strong>
 </div>
 @endif
 @if($errors->has('student_cgpa'))
 <div class="alert alert-danger alert-dismissible fade show mb-0 btn-danger" role="alert">
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">×</span>
     </button>
     <i class="fas fa-exclamation mx-2"></i>
     <strong>{{$errors->first('student_cgpa')}}</strong>
 </div>
 @endif
 @if($errors->has('student_credit'))
 <div class="alert alert-danger alert-dismissible fade show mb-0 btn-danger" role="alert">
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">×</span>
     </button>
     <i class="fas fa-exclamation mx-2"></i>
     <strong>{{$errors->first('student_credit')}}</strong>
 </div>
 @endif
 @if($errors->has('student_contact'))
 <div class="alert alert-danger alert-dismissible fade show mb-0 btn-danger" role="alert">
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">×</span>
     </button>
     <i class="fas fa-exclamation mx-2"></i>
     <strong>{{$errors->first('student_contact')}}</strong>
 </div>
 @endif
 @endif
 <!-- @if(count($errors)<=0)
          <div class="alert alert-warning alert-dismissible fade show mb-0 btn-accent" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <i class="fa fa-check mx-2"></i>
            <strong>Success!</strong>
          </div>
         @endif -->
 <!--  <%}else if(error.student_fname){% -->
 <!--  <div style="background-color: red" class="alert alert-success alert-dismissible fade show mb-0 btn-accent" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <i class="fa fa-check mx-2"></i>
            <strong>Alert!</strong> <%=error.student_fname.msg%!
          </div -->
 <!--  <%}else if(error.student_lname){% -->
 <!--  <div style="background-color: red" class="alert alert-success alert-dismissible fade show mb-0 btn-accent" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <i class="fa fa-check mx-2"></i>
            <strong>Alert!</strong> <%=error.student_lname.msg%!
          </div -->
 <!--  <%}else if(error.student_dept){% -->
 <!--   <div style="background-color: red" class="alert alert-success alert-dismissible fade show mb-0 btn-accent" role="alert">
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">×</span>
           </button>
           <i class="fa fa-check mx-2"></i>
           <strong>Alert!</strong> <%=error.student_dept.msg%!
         </div -->
 <!--  <%}else if(error.student_cgpa){% -->
 <!--  <div style="background-color: red" class="alert alert-success alert-dismissible fade show mb-0 btn-accent" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <i class="fa fa-check mx-2"></i>
            <strong>Alert!</strong> <%=error.student_cgpa.msg%!
          </div -->
 <!--  <%}else if(error.student_credit){% -->
 <!--   <div style="background-color: red" class="alert alert-success alert-dismissible fade show mb-0 btn-accent" role="alert">
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">×</span>
           </button>
           <i class="fa fa-check mx-2"></i>
           <strong>Alert!</strong> <%=error.student_credit.msg%!
         </div -->
 <!--  <%}else if(error.student_contact){% -->
 <!--  <div style="background-color: red" class="alert alert-success alert-dismissible fade show mb-0 btn-accent" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <i class="fa fa-check mx-2"></i>
            <strong>Alert!</strong> <%=error.student_contact.msg%!
          </div -->
 <!--  <%}else{% -->
 <!--  <div class="alert alert-success alert-dismissible fade show mb-0 btn-accent" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <i class="fa fa-check mx-2"></i>
            <strong>><%=title%Title</strong>
          </div -->
 <!--  <%}% -->
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
                         <img class="rounded-circle" src="/images/avatars/0.jpg" alt="User Avatar" width="110">
                     </div>
                     <h4 class="mb-0">{{$student_fname}}&ensp;{{$student_lname}}</h4>
                     <h6 class="mb-0">{{$student_email}}</h6>
                     <div style="width: 100%" class="rw">
                         <table border="0px" width="100%">
                             <tr>
                                 <td colspan="3" height="30px"></td>
                             </tr>
                             <tr>
                                 <td>Student ID</td>
                                 <td>:</td>
                                 <td>{{session('username')}}</td>
                             </tr>
                             <tr>
                                 <td>Department</td>
                                 <td>:</td>
                                 <td>{{$student_dept}}</td>
                             </tr>
                             <tr>
                                 <td>CGPA</td>
                                 <td>:</td>
                                 <td>{{$student_cgpa}}</td>
                             </tr>
                             <tr>
                                 <td>Credit</td>
                                 <td>:</td>
                                 <td>{{$student_credit}}</td>
                             </tr>

                             <tr>
                                 <td>Contact</td>
                                 <td>:</td>
                                 <td>{{$student_contact}}</td>
                             </tr>
                             <!--  <%if(check==true){ -->
                             <tr>
                                 <td>Registration Date</td>
                                 <td>:</td>
                                 <td>{{$student_regDate}}</td>
                             </tr>
                             <!--  <%}else{% -->
                             <!--   <tr>
                         <td>Registration Date</td>
                         <td>:</td>
                         <td>Demo><%= moment(user.student_regDate).format('Do MMMM, YYYY')%</td>
                       </tr -->
                             <!--  <%}% -->
                             <tr>
                                 <td colspan="3" height="67px"></td>
                             </tr>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-lg-8">
             <div class="card card-small mb-4">
                 <div class="card-header border-bottom">
                     <span class="m-0">Account Details</span>
                     <table style="float: right">
                         <tr>
                             <td>Status</td>
                             <td width="8px"></td>
                             <td>
                                 <div style="background-color: green; color: white; padding-left: 4px; padding-right: 5px;padding-bottom: 2px ;border-radius: 5px">Active</div>
                             </td>
                         </tr>
                     </table>
                 </div>
                 <ul class="list-group list-group-flush">
                     <li class="list-group-item p-3">
                         <div class="row">
                             <div class="col">
                                 <form method="post" action="">
                                     @csrf
                                     <div class="form-row">
                                         <div class="form-group col-md-6">
                                             <label for="feFirstName">First Name</label>
                                             <input type="text" class="form-control" id="feFirstName" name="student_fname" placeholder="First Name" value="{{$student_fname}}"> </div>
                                         <div class="form-group col-md-6">
                                             <label for="feLastName">Last Name</label>
                                             <input type="text" class="form-control" id="feLastName" name="student_lname" placeholder="Last Name" value="{{$student_lname}}"> </div>
                                     </div>
                                     <div class="form-row">
                                         <div class="form-group col-md-6">
                                             <label for="feEmailAddress">ID</label>
                                             <input type="text" class="form-control" id="feId" name="student_id" placeholder="xx-xxxxx-x" value="{{session('username')}}" readonly> </div>
                                         <div class="form-group col-md-6">
                                             <label for="fePassword">Department</label>
                                             <input type="text" class="form-control" id="feDept" name="student_dept" placeholder="CSE" value="{{$student_dept}}"> </div>
                                     </div>
                                     <div class="form-row">
                                         <div class="form-group col-md-6">
                                             <label for="feEmailAddress">CGPA</label>
                                             <input type="text" class="form-control" id="feCGPA" name="student_cgpa" placeholder="CGPA" value="{{$student_cgpa}}"></div>
                                         <div class="form-group col-md-6">
                                             <label for="fePassword">Credit</label>
                                             <input type="text" class="form-control" id="feCredit" name="student_credit" placeholder="Credit" value="{{$student_credit}}"> </div>
                                     </div>
                                     <div class="form-row">
                                         <div class="form-group col-md-6">
                                             <label for="feEmailAddress">Email</label>
                                             <input type="email" class="form-control" id="feEmailAddress" name="student_email" placeholder="Email" value="{{$student_email}}" readonly> </div>
                                         <div class="form-group col-md-6">
                                             <label for="fePassword">Contact Number</label>
                                             <input type="text" class="form-control" id="feCon" name="student_contact" value="{{$student_contact}}"> </div>
                                     </div>
                                     <!--  <%if(check==true){% -->
                                     <div class="form-row">
                                         <div class="form-group col-md-6">
                                             <label>Registration Date</label>
                                             <input type="text" class="form-control" id="feDate" name="student_regDate" placeholder="" value="{{$student_regDate}}" readonly> </div>
                                     </div>
                                     <!--  <%}else{% -->
                                     <!--  <div class="form-row">
                              <div class="form-group col-md-6">
                                <label >Registration Date</label>
                                <input type="text" class="form-control" id="feDate" name="student_regDate" placeholder="" value="Demo" readonly> </div>
                                                         </div -->
                                     <!--  <%}% -->
                                     <button type="submit" class="btn btn-accent">Update Account</button>
                                 </form>
                             </div>
                         </div>
                     </li>
                 </ul>
             </div>
         </div>
     </div>
 </div>
 @endsection
