@extends('admin/adminDomainList/nav1')

@section('index')
<title>Domain List</title>
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
                          <th scope="col" class="border-0">Domain Name</th>
                          <th scope="col" class="border-0">Domain Description</th>
                          <th scope="col" class="border-0" colspan="2">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($domain as $key)
      				        <tr>
  				                <td>{{$key['dom_name']}}</td>
                                <td style="text-align: center;">{{$key['dom_desc']}}</td>
  				                <td>
	                               <a style="background-color: AliceBlue;color: DodgerBlue;font-weight: bold;padding: 2px 3px;text-align: center;text-decoration: none;display: inline-block;border: 1px solid DodgerBlue;" href="{{route('adminUpdateDomain', $key['dom_id'])}}">Update</a>
	                           </td>
	                            <td>
	                               <a style="background-color: AliceBlue;color: DodgerBlue;font-weight: bold;padding: 2px 3px;text-align: center;text-decoration: none;display: inline-block;border: 1px solid DodgerBlue;" href="{{route('adminDeleteDomain', $key['dom_id'])}}">Delete</a> 
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