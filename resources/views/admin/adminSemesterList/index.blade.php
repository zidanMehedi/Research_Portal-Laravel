@extends('admin/adminSemesterList/nav1')

@section('index')
  	<title>Semester List</title>
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
                  <th scope="col" class="border-0">Semester ID</th>
                  <th scope="col" class="border-0">Semester Name</th>
                  <th scope="col" class="border-0">Semester Status</th>
                  <th scope="col" class="border-0" colspan="2">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($semester as $key)
				        <tr>
				            <td>{{$key['sem_id']}}</td>
			                <td>{{$key['sem_name']}}</td>
                    @if($key['sem_status']==1) 
                        <td style="color: green;">Active</td>
                    @else
                        <td style="color: red;">Inactive</td>
                    @endif
			                <td>
                           <a style="background-color: AliceBlue;color: DodgerBlue;font-weight: bold;padding: 2px 3px;text-align: center;text-decoration: none;display: inline-block;border: 1px solid DodgerBlue;" href="{{route('adminUpdateSemester', $key['sem_id'])}}">Update</a>
                       </td>
                        <td>
                           <a style="background-color: AliceBlue;color: DodgerBlue;font-weight: bold;padding: 2px 3px;text-align: center;text-decoration: none;display: inline-block;border: 1px solid DodgerBlue;" href="{{route('adminDeleteSemester', $key['sem_id'])}}">Delete</a> 
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