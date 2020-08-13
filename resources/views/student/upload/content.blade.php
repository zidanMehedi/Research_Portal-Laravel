@extends('student/upload/index')

@section('content')
@error('myFile')
<div class="alert alert-danger" style="width: 100%">
    {{$message}}
</div>
@enderror
@if(session()->has('uploadSuccess'))
<div class="alert alert-success" style="width: 100%">
    {{session('uploadSuccess')}}
</div>
@elseif(session()->has('uploadError'))
<div class="alert alert-danger" style="width: 100%">
    {{session('uploadError')}}
</div>
@elseif(session()->has('permision'))
<div class="alert alert-danger" style="width: 100%">
    {{session('permision')}}
</div>
@endif
<div id="uploadfile" style="margin-top:150px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">Upload Your File</div>
        </div>
        <div class="panel-body">
            <form action="" id="EmployeeForm" class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="file" class="col-md-3 control-label">Upload File</label>
                    <div class="col-md-9">
                        <input type="file" class="form-control" name="myFile" required>
                    </div>
                </div>
            </form>
            <div class="col-md-offset-3 col-md-9">
                <input type="submit" name="submit" value="Upload" class="btn btn-accent btn-sm">
                <button style="background-color: red; border-color: red" class="goHome btn btn-sm btn-accent">Go Home</button>
            </div>
            
        </div>
    </div>
</div>
@endsection
