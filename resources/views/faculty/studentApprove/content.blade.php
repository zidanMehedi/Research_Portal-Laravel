@extends('faculty/studentApprove/index')

@section('content')

            <div class="row">
              <div class="col">
                <div class="card card-small mb-4">

                  <div class="card-body p-0 pb-3 text-center" id="test">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">Student ID</th>
                          <th scope="col" class="border-0">First Name</th>
                          <th scope="col" class="border-0">Last Name</th>
                          <th scope="col" class="border-0">Email</th>
                          <th scope="col" class="border-0">Phone</th>
                          <th scope="col" class="border-0">CGPA</th>
                          <th scope="col" class="border-0">Department</th>
                          <th scope="col" class="border-0">Complete Credit</th>
                          <th scope="col" class="border-0">Reg Date</th>
                          <th scope="col" class="border-0">Status</th>
                          <th scope="col" class="border-0">Download</th>
                          <th scope="col" class="border-0" colspan="2">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if(count($details)==0)
                          <td colspan="11" align="center">No Data</td>
                        @else
                            <@for($i=0; $i < count($details) ; $i++)
                        	<tr>
                        		<td>{{$details[$i]->student_id}}</td>
                        		<td>{{$details[$i]->student_fname}}</td>
                        		<td>{{$details[$i]->student_lname}}</td>
                        		<td>{{$details[$i]->student_email}}</td>
                        		<td>{{$details[$i]->student_contact}}</td>
                        		<td>{{$details[$i]->student_cgpa}}</td>
                        		<td>{{$details[$i]->student_dept}}</td>
                        		<td>{{$details[$i]->student_credit}}</td>
                        		<td>{{$details[$i]->student_regDate}}</td>
                        		@if($details[$i]->status==1)
                        			<td>Active</td>
                        		@else
                        			<td>Inactive</td>
                        		@endif
                            <td><a href="/download/{{$details[$i]->ver_fileName }}"><img src="http://icons.iconarchive.com/icons/dtafalonso/android-lollipop/128/Downloads-icon.png" height="20" width="20"> </a></td>
                        		<td><a href="/studentApproval/approve/{{$details[$i]->sid}}"><button>Approve</button></a></td>
                        	</tr>
                            @endfor
                        @endif
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>



@if($errors->any())
            <script>alert`{!! implode('', $errors->all(':message')) !!}`</script>
          @endif

@endsection