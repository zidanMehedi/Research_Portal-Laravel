@extends('admin/adminTopicList/nav2')

@section('delete')
    <title>Confirmation</title>

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
                <th scope="col" class="border-0" style="color: DodgerBlue;">Criterion</th>
                <th scope="col" class="border-0" style="color: DodgerBlue;">Information</th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <td>Topic Name</td>
                <td style="text-align: center;">{{$topic['subDom_name']}}</td>
              </tr>

              <tr>
                <td>Description</td>
                <td style="text-align: center;">{{$topic['subDom_desc']}}</td>
              </tr>

              <tr>
                <td>Domain</td>
                <td>{{$onedomain['dom_name']}}</td>
              </tr>

              <tr>
                <td>Supervisor</td>
                <td>{{$onefaculty['faculty_fname'].' '.$onefaculty['faculty_lname']}}</td>
              </tr>

              <tr>
                <td>Type</td>
                <td>{{$onetype['type_name']}}</td>
             <form method="POST">
                {{csrf_field()}}
            <td><input type="text" name="id" hidden value="{{$topic['subDom_id']}}"></td>
          </tr>

          <tr>
            <td colspan="2"><h3 style="color: red;">Are you sure to delete?</h3></td>
          </tr>

          <tr>
            <td colspan="2">
                <input type="submit" name="submit" value="Delete">
                &emsp;&emsp;&emsp;&emsp;
                <a href="{{route('topicList.index')}}"><input type="button" name="cancel" value="Cancel"></a>
            </td>
          </tr>
      </form>
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