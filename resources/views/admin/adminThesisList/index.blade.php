@extends('admin/adminThesisList/nav1')

@section('index')
    <title>Thesis List</title>
    <style type="text/css">
        progress {
            text-align: center;
        }
        progress:after {
            content: attr(value)'%';
        }
    </style>
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
                  <th scope="col" class="border-0">Group No</th>
                  <th scope="col" class="border-0">Semester</th>
                  <th scope="col" class="border-0">Topic</th>
                  <th scope="col" class="border-0">Domain</th>
                  <th scope="col" class="border-0">Supervisor</th>
                  <th scope="col" class="border-0">External</th>
                  <th scope="col" class="border-0">View Group</th>
                  <th scope="col" class="border-0">Progress</th>
                </tr>
              </thead>
              <tbody>
                @foreach($thesis as $key)
                	<tr>
                        <td>{{$key->group_id}}</td>
                        <td>{{$key->sem_name}}</td>
                        <td>{{$key->subDom_name}}</td>
                        <td>{{$key->dom_name}}</td>
                        <td>{{$key->faculty_fname.' '.$key->faculty_lname}}</td>
                        <td>{{$key->external}}</td>
                        <td>
                           <a style="background-color: AliceBlue;color: DodgerBlue;font-weight: bold;padding: 2px 3px;text-align: center;text-decoration: none;display: inline-block;border: 1px solid DodgerBlue;" href="{{route('groupDetails', $key->group_id)}}">View</a>
                       </td>
                        <td>
                            <progress style="height: 5%" value="{{$key->thesis_progress}}" max="100">   
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