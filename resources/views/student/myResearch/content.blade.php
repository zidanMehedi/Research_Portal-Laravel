 @extends('student/ParentLayout/header')

 @section('home')
 <div class="page-header row no-gutters py-4" style="margin-left: 10px">
     <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
         <span class="text-uppercase page-subtitle">Overview</span>
         <h3 class="page-title">My Research</h3>
     </div>
 </div>

 @if($thesis==null)
 
 <div class="container">
     <div class="row justify-content-lg-center justify-content-md-center justify-content-sm-center">
         <div class="col-lg-12 col-md-12 col-sm-12">
             <div class="card card-small mb-4 pt-3">
                 <div class="card-header border-bottom text-center">
                     <h3 class="page-title" style="margin-bottom: 50px">YOU ARE NOT ENROLLED IN ANY TOPIC YET!!</h3>
                     <button class="btn btn-accent"><a href="{{route('studentTopicsWindow')}}" style="color: white">Show Topics</a></button>
                 </div>
             </div>
         </div>
     </div>
 </div>
 
 @else
 
 <div class="container">
     <div class="row justify-content-lg-center justify-content-md-center justify-content-sm-center">
         <div class="col-lg-12 col-md-12 col-sm-12">
             <div class="card card-small mb-4 pt-3">
                 <div class="card-header border-bottom">

                     <h4 class="mb-0">&ensp;</h4>
                     <h6 class="mb-0"></h6>
                     <div style="width: 100%;margin-left: 100px; margin-left: -10px;" class="rw">
                         <table class="table table-sm table-borderless table-hover" width="100%">
                             <tr>
                                 <td width="100px"></td>
                                 <td width="200px">Group ID</td>
                                 <td>:</td>
                                 <td>{{$thesis->group_id}}</td>
                                 <td width="20px"></td>
                             </tr>
                             <tr>
                                 <td width="100px"></td>
                                 <td width="200px" style="vertical-align: top">Topic Name</td>
                                 <td style="vertical-align: top">:</td>
                                 <td>{{$topic->subDom_name}}</td>
                                 <td width="20px"></td>
                             </tr>
                             <tr>
                                 <td width="100px"></td>
                                 <td width="200px" style="vertical-align: top">Topic Description</td>
                                 <td style="vertical-align: top">:</td>
                                 <td>{{$topic->subDom_desc}}</td>
                                 <td width="20px"></td>
                             </tr>
                             <tr>
                                 <td width="100px"></td>
                                 <td width="200px">Domain</td>
                                 <td>:</td>
                                 <td>{{$topic->dom_name}}</td>
                                 <td width="20px"></td>
                             </tr>

                             <tr>
                                 <td width="100px"></td>
                                 <td width="200px">Supervisor</td>
                                 <td>:</td>
                                 <td>{{$topic->faculty_fname}} {{$topic->faculty_fname}}</td>
                                 <td width="20px"></td>
                             </tr>
                             @if($thesis->external==null)
                             <tr>
                                 <td width="100px"></td>
                                 <td width="200px">Supervisor</td>
                                 <td>:</td>
                                 <td>Not Appointed Yet</td>
                                 <td width="20px"></td>
                             </tr>
                             @else
                             <tr>
                                 <td width="100px"></td>
                                 <td width="200px">External</td>
                                 <td>:</td>
                                 <td>{{$thesis->external}}</td>
                                 <td width="20px"></td>
                             </tr>
                             @endif

                             <tr>
                                 <td width="100px"></td>
                                 <td width="200px">Type</td>
                                 <td>:</td>
                                 <td>{{$topic->type_name}}</td>
                                 <td width="20px"></td>
                             </tr>

                             <tr>
                                 <td width="100px"></td>
                                 <td width="200px">Progress</td>
                                 <td>:</td>
                                 <td>
                                     <div class="progress" style="height: 20px; margin-top: 1px">
                                         <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: {{$thesis->thesis_progress.'%'}}; height: 100%">{{$thesis->thesis_progress}}%</div>
                                     </div>
                                 </td>
                                 <td width="20px"></td>
                             </tr>

                             <tr>
                                 <td width="100px"></td>
                                 <td style="padding-bottom:50px" width="200px"></td>
                                 <td></td>
                                 <td></td>
                                 <td width="20px"></td>
                             </tr>
                             <tr>
                                 <td width="100px"></td>
                                 <td width="230px"><button class="btn btn-sm btn-info"><a href="{{route('groupMembers')}}" style="color: white">Group Details</a></button>&emsp;<button class="btn btn-sm btn-danger goHome">Go Home</button></td>
                                 <td></td>
                                 <td></td>
                                 <td width="20px"></td>
                             </tr>

                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 
 @endif
 @endsection
