@extends('faculty/topicDetails/index')

@section('content')

            <div class="row">
              <div class="col">
                <div class="card card-small mb-4">

                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      @if(count($data)>0)
                      <thead class="bg-light">
                        <tr>
                          <th>Name :</th>
                          <td>{{$data[$id]->subDom_name}}</td>
                        </tr>
                        <tr>
                          <th>Description :</th>
                          <td>{{$data[$id]->subDom_desc}}</td>
                        </tr>
                        <tr>
                          <th>Type :</th>
                          <td>{{$data[$id]->type_name}}</td>
                        </tr>
                        <tr>
                          <th>Domain :</th>
                          <td>{{$data[$id]->dom_name}}</td>
                        </tr>
                        <tr>
                          <th>Progress :</th>
                          <td>{{$data[$id]->thesis_progress}}% <br><progress id="file" value="{{$data[$id]->thesis_progress}}" max="100"></progress></td>
                        </tr>
                        <tr>
                          <th>Semester :</th>

                          <td>{{$data[$id]->sem_name}}</td>
                        </tr>
                      </thead>
                      @else
                       <blink> <h1 style="color: red">Empty Group</h1></blink>
                      @endif
                      <tbody>
                        <tr>
                          <td></td>
                        </tr>
                          <tr>
                            <th colspan="4"><h3>Students</h3></th>
                          </tr>
                      </tbody>
                      @if(count($data1)>0)
                      <tbody>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>CONTACT</th>
                        </tr>
                        @for($i=0; $i< count($data1); $i++)
                        <tr>
                          <td>{{$data1[$i]->student_id}}</td>
                          <td>{{$data1[$i]->student_fname}} <{{$data1[$i]->student_lname}}</td>
                          <td>{{$data1[$i]->student_email}}</td>
                          <td>{{$data1[$i]->student_contact}}</td>
                        </tr>
                        @endfor
                      </tbody>
                      @else
                        <td>No Student found</td>

                      @endif
                      <tbody>
                        <br><hr>
                        <tr>
                          <th colspan="4"><h2>Files<h2></th>
                        </tr>
                        @if(count($files)<1)
                          <td>Not File found</td>
                        @else
                          @for($i=0; $i< count($files); $i++)
                            <tr>
                              <td colspan="3"><a href="/viewTopic/download/{{$files[$i]->fileName}}">{{$files[$i]->fileName}}</a></td>
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