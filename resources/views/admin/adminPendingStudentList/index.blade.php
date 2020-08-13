@extends('admin/adminPendingStudentList/nav4')

@section('index')
  <title>Student Approval</title>
    <div class="row">
      <div class="col">
        <div class="card card-small mb-4">
          <!-- <div class="card-header border-bottom">
            <h6 class="m-0">Active Users</h6>
          </div> -->
          <div class="card-body p-0 pb-3 text-center">
            <table class="table mb-0">
              <thead class="bg-light">
                <tr>
                  <th scope="col" class="border-0">Student ID</th>
                  <th scope="col" class="border-0">Uploaded File</th>
                  <th scope="col" class="border-0">View Profile</th>
                  <th scope="col" class="border-0" colspan="2">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($penStudent as $key)
                	<tr>
                        <td>{{$key->student_id}}</td>
                        <td>
                        	
                            <a style="background-color: AliceBlue;color: DodgerBlue;font-weight: bold;padding: 2px 3px;text-align: center;text-decoration: none;display: inline-block;border: 1px solid DodgerBlue;" href="{{route('adminStudentFileDownload', $key->ver_fileName)}}">Download</a>
                        </td>
                        <td>
                           <a style="background-color: AliceBlue;color: DodgerBlue;font-weight: bold;padding: 2px 3px;text-align: center;text-decoration: none;display: inline-block;border: 1px solid DodgerBlue;" href="{{route('adminStudentProfile', $key->sid)}}">View</a>
                       </td>
                        <td>
                           <a style="background-color: AliceBlue;color: DodgerBlue;font-weight: bold;padding: 2px 3px;text-align: center;text-decoration: none;display: inline-block;border: 1px solid DodgerBlue;" href="{{route('adminStudentApprovalAccept', $key->sid)}}">Approve</a>
                       </td>
                        <td>
                           <a style="background-color: AliceBlue;color: DodgerBlue;font-weight: bold;padding: 2px 3px;text-align: center;text-decoration: none;display: inline-block;border: 1px solid DodgerBlue;" href="{{route('adminStudentApprovalDecline', $key->sid)}}">Decline</a> 
                        </td>
                  	</tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
   
  </div>
  <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
    
  </footer>


@endsection