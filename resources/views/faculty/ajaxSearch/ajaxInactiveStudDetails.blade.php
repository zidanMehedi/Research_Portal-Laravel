<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-body p-0 pb-3 text-center" id="test">
                    <table class="table mb-0">
                       <thead class="bg-light"></thead>
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">Student ID</th>
                          <th scope="col" class="border-0">First Name</th>
                          <th scope="col" class="border-0">Last Name</th>
                          <th scope="col" class="border-0">Email</th>
                          <th scope="col" class="border-0">Phone</th>
                          <th scope="col" class="border-0">CGPA</th>
                          <th scope="col" class="border-0">Department</th>
                          <th scope="col" class="border-0">Complete Credit</th>
                          <th scope="col" class="border-0">Reg Date</th>
                          <th scope="col" class="border-0">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        @for($i=0; $i < count($details) ; $i++)
                          <tr>
                            <td>{{$details[$i]->student_id}}</td>
                            <td>{{$details[$i]->student_fname}}</td>
                            <td>{{$details[$i]->student_lname}}</td>
                            <td>{{$details[$i]->student_email}}</td>
                            <td>{{$details[$i]->student_contact}}</td>
                            <td>{{$details[$i]->student_cgpa}}</td>
                            <td>{{$details[$i]->student_dept}}</td>
                            <td>{{$details[$i]->student_credit}}</td>
                            <td>{{$details[$i]->student_regDate}}</td>
                            @if($details[$i]->status==1)
                              <td>Active</td>
                            @else
                              <td>Inactive</td>
                            @endif
                          </tr>
                        @endfor
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</body>
</html>