@extends('faculty/progress/index')



@section('content')

		<form method="POST">
			@csrf
			            <div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <!-- <div class="card-header border-bottom">
                    <h6 class="m-0">Active Users</h6>
                  </div> -->
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                       <thead class="bg-light"></thead>
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">Group ID</th>
                          <th scope="col" class="border-0">Topic Name</th>
                          <th scope="col" class="border-0">Progress</th>
                          <th scope="col" class="border-0">Semester</th>
                          <th scope="col" class="border-0">Action</th>
                        </tr>

                            <tr>
                              <td>{{$data[0]->group_id}}</td>
                              <td>{{$data[0]->subDom_name}}</td>
                              <td><input type="text" name="progressValue" value="{{$data[0]->thesis_progress}}" >%</td>
                              <td>{{$data[0]->sem_name}}</td>
                              <td><input type="submit" name="submit" value="Update"></td>
                            </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
		</form>



          @if($errors->any())
            <script>alert`{!! implode('', $errors->all(':message')) !!}`</script>
          @endif

@endsection