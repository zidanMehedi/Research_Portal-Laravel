@extends('faculty/uploadFile/index')



@section('content')

		
	          <form id="EmployeeForm" class="form-horizontal" method="POST"  role="form" enctype="multipart/form-data">
              @csrf
          <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
            <div id="uploadfile" style="margin-top:150px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2" align="center">

              <dir style="background: yellow">
                    <dir>
                <div>
                	Select Semester ::<select name="sem" id="sem" onchange="find()">
                		<option value="">Select Semester</option>
                		@for($i= 0; $i< count($sem);$i++)
                			<option value="{{$sem[$i]->sem_id}}">{{$sem[$i]->sem_name}}</option>
                		@endfor
                	</select>
                </div>
                <br>
                <div id='grp'>
                	Select Group :: <select name="gid">
                  <option value="0">Select Group</option>
                </select>
                </div>
              </dir>
              </dir>

      <div class="panel panel-info" align="center">
        <div class="panel-heading">
          <div class="panel-title"><h5>Upload Your File</h5></div>
          <div class="panel-title"><b style="color: red;">**Upload PDF, DOC & DOCS File Only!</b></div>
          <div class="panel-title"><b style="color: red;">**File Max Size: 5.5MB</b></div>
        </div>  
        <div class="panel-body" >
          
            <div class="form-group">
              <label for="file" class="col-md-3 control-label">Upload File
              </label>
              <div class="col-md-9">
                <input type="file" class="form-control" name="file" required>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-offset-3 col-md-9">
                <input type="submit" name="submit" value="Upload" class="btn btn-accent">  
              </div>
            </div>
          </form>
        </div>
      </div>


          @if($errors->any())
            <script>alert`{!! implode('', $errors->all(':message')) !!}`</script>
          @endif

@endsection