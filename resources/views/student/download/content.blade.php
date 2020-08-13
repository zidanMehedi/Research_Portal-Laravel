 @extends('student/ParentLayout/header')

 @section('home')
 <div class="page-header row no-gutters py-4" style="margin-left: 10px;">
     <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
         <span class="text-uppercase page-subtitle">Overview</span>
         <h3 class="page-title">Download</h3>
     </div>
 </div>

 <div class="container-fluid">
     @if(session()->has('group_alert'))
     <div class="row justify-content-lg-center justify-content-md-center justify-content-sm-center">
         <div class="col-md-12 col-sm-12 col-lg-12">
             <div class="card card-small mb-4 mt-5 pt-3">
                 <div class="card-header border-bottom text-center">
                     <h3 class="page-title" style="margin-bottom: 50px">{{session('group_alert')}}</h3>
                     <div>
                         <button class="btn btn-accent goHome" id="create">Go Home</button>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     @else
     <div class="row justify-content-center mt-3">
         <div class="col-lg-8">
             <div class="card card-small mb-4">
                 <div class="card-header border-bottom">
                     <h6 class="m-0">Files</h6>
                 </div>
                 <div class="card-body p-0 pb-3 text-center">
                     <table class="table mb-0 table-sm table-hover table-borderless">
                         <thead class="bg-light">
                             <tr>
                             	<th scope="col" class="border-0">#</th>
                                 <th scope="col" class="border-0" style="text-align: left; padding-left: 3%">File Name</th>
                                 <th scope="col" class="border-0">Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach($files as $key=>$file)
                             <tr>
                             	<td>{{++$key}}</td>
                                 <td style="text-align: left; padding-left: 3%">{{__($file->fileName)}}</td>
                                 <td>
                                     <button class="btn btn-outline-info btn-sm" style="padding: 0 7px"><a href="{{route('file.downloadFile',$file->file_id)}}">
                                         <i class="fas fa-download"></i>
                                     </a></button>
                                 </td>
                             </tr>
                             @endforeach
                         </tbody>
                     </table>
                 </div>
             </div>
             @endif
         </div>
     </div>
 </div>
 @endsection
