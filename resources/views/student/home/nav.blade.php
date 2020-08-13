@extends('student/home/index')

@section('nav')
<!-- Main Sidebar -->
<aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
    <div class="main-navbar">
        <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
            <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                <div class="d-table m-auto">
                    <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="/images/shards-dashboards-logo.svg" alt="Shards Dashboard">
                    <span class="d-none d-md-inline ml-1">Student Dashboard</span>
                </div>
            </a>
            <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
            </a>
        </nav>
    </div>
    <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
        <div class="input-group input-group-seamless ml-3">
            <div class="input-group-prepend">
                <div class="input-group-text">

                </div>
            </div>
            <input class="navbar-search form-control" type="text" aria-label="Search">
        </div>
    </form>
    <div class="nav-wrapper">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{route('studentHome')}}">
                    <i class="material-icons">home</i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{route('studentResearch')}}">
                    <i class="material-icons">vertical_split</i>
                    <span>My Research</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{route('studentTopicsWindow')}}">
                    <i class="material-icons">book</i>
                    <span>Available Topics</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/">
                    <i class="material-icons">note</i>
                    <span>Upload Documents</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/">
                    <i class="material-icons">cloud_download</i>
                    <span>Download Materials</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
<!-- End Main Sidebar -->
@yield('header')
@endsection
