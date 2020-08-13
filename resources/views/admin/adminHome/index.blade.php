@extends('admin/adminHome/nav')

@section('index')
    <title>Dashboard </title>
    <div>
        <center>
            <h1>Welcome Admin Panel</h1><br><br>
            <h4>UserID: {{ $uid }}</h4>
        </center>
    </div>
    <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
    </footer>

@endsection