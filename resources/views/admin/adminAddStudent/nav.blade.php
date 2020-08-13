<!DOCTYPE html>
<html class="no-js h-100" lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="/styles/shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="/styles/extras.1.1.0.min.css">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/css/util.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
<!--===============================================================================================-->
</head>
<body class="h-100">

    <div class="container-fluid">
      <div class="row">
        <!-- Main Sidebar -->
        <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
              <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                <div class="d-table m-auto">
                  <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="/images/shards-dashboards-logo.svg" alt="Shards Dashboard">
                  <span class="d-none d-md-inline ml-1">Admin Dashboard</span>
                </div>
              </a>
              <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
              </a>
            </nav>
          </div>
          <form  class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
            <div class="input-group input-group-seamless ml-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-search"></i>
                </div>
              </div>
              <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
          </form>
          <div class="nav-wrapper">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="{{route('adminHome.index')}}">
                  <i class="material-icons">edit</i>
                  <span>Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{route('adminAddFaculty.index')}}">
                  <i class="material-icons">note_add</i>
                  <span>Add Faculty</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{route('activeFacultyList.index')}}">
                  <i class="material-icons">vertical_split</i>
                  <span>Active Faculty List</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{route('inactiveFacultyList.index')}}">
                  <i class="material-icons">vertical_split</i>
                  <span>Inactive Faculty List</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{route('adminAddStudent.index')}}">
                  <i class="material-icons">note_add</i>
                  <span>Add Student</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{route('activeStudentList.index')}}">
                  <i class="material-icons">vertical_split</i>
                  <span>Active Student List</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{route('inactiveStudentList.index')}}">
                  <i class="material-icons">vertical_split</i>
                  <span>Inactive Student List</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{route('approveStudentList.index')}}">
                  <i class="material-icons">table_chart</i>
                  <span>Approve Student</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{route('adminAddSemester.index')}}">
                  <i class="material-icons">note_add</i>
                  <span>Add Semester</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{route('semesterList.index')}}">
                  <i class="material-icons">note_add</i>
                  <span>Semester List</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{route('adminAddThesisType.index')}}">
                  <i class="material-icons">note_add</i>
                  <span>Add Thesis Type</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{route('thesisTypeList.index')}}">
                  <i class="material-icons">note_add</i>
                  <span>Thesis Type List</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{route('adminAddDomain.index')}}">
                  <i class="material-icons">note_add</i>
                  <span>Add Domain</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{route('domainList.index')}}">
                  <i class="material-icons">note_add</i>
                  <span>Domain List</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{route('adminAddTopic.index')}}">
                  <i class="material-icons">table_chart</i>
                  <span>Offer Topic</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{route('topicList.index')}}">
                  <i class="material-icons">vertical_split</i>
                  <span>Topic List</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{route('adminAllocateExternal.index')}}">
                  <i class="material-icons">person</i>
                  <span>Allocate External</span>
                </a>
              </li>
               
              <li class="nav-item">
                <a class="nav-link " href="{{route('adminUploadFile.index')}}">
                  <i class="material-icons">person</i>
                  <span>Upload File</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{route('thesisList.index')}}">
                  <i class="material-icons">person</i>
                  <span>Thesis Information</span>
                </a>
              </li>
            </ul>
          </div>
        </aside>
        <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
      @yield('index')
    </footer>
  </div>
	
	
<!--===============================================================================================-->
	<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/bootstrap/js/popper.js"></script>
	<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/daterangepicker/moment.min.js"></script>
	<script src="/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="/js/main.js"></script>

</body>
</html>