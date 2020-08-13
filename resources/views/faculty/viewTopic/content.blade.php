@extends('faculty/topicDetails/index')

@section('content')


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
                          <th scope="col" class="border-0">ID</th>
                          <th scope="col" class="border-0">Name</th>
                          <th scope="col" class="border-0">Domain</th>
                          <th scope="col" class="border-0">Thesis Type</th>
                          <th scope="col" class="border-0">Description</th>
                        </tr>
                      </thead>
                      <tbody>

                        
                         @for($i=0; $i < count($details); $i++)
                        <tr>
                          <td>{{$details[$i]->subDom_id}}</td>
                          <td><a href="/viewTopic/topicDetails/{{$details[$i]->group_id}}">{{$details[$i]->subDom_name}}</a></td>
                          <td>{{$details[$i]->dom_name}}</td>
                          <td>{{$details[$i]->type_name}}</td>
                          <td>{{$details[$i]->dom_desc}}</td>
                        </tr>
                          @endfor
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