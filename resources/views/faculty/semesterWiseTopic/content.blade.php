@extends('faculty/semesterWiseTopic/index')

@section('content')



          <dir>
            Semester :: <select id="semID" onchange="find()">
              <option value="">Select One</option>
              @for($i=0; $i < count($sem); $i++)
                <option value="{{$sem[$i]->sem_id}}">{{$sem[$i]->sem_name}}</option>
              @endfor
            </select>
          </dir>

            <div id="details">
                
            </div>



@if($errors->any())
            <script>alert`{!! implode('', $errors->all(':message')) !!}`</script>
          @endif

@endsection