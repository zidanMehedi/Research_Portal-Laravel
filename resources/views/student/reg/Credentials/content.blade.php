@extends('student/reg/Credentials/index')

@section('content')
 <div id="uploadfile" style="margin-top:150px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
              <div class="panel panel-info">
                  <div class="panel-heading">
                      <div class="panel-title">Your Login Credentials</div>
                  </div>  
                  <div class="panel-body" >
                    <div class="form-group">       
                        <div class="">
                            <center>
                                <table width="100%">
                                  <tr>
                                    <td style="height: 30px;"></td>
                                  </tr>
                                <tr>
                                  <td width="56%"></td>
                                  <td width="10%">User ID</td>
                                  <td width="2">:</td>
                                  <%if(data==null){%>
                                    <td width="12%"><input type="text" value="No data found!" readonly></td>
                                    <%}else{%>
                                      <td width="12%"><input type="text" value="<%=data.userid%>" readonly></td>
                                      <%}%>
                                  <td width="30%"></td>
                                </tr>
                                <tr>
                                  <td width="56%"></td>
                                  <td width="10%">Password</td>
                                  <td width="2%">:</td>
                                  <%if(data==null){%>
                                    <td width="12%"><input type="text" value="No data found!" readonly></td>
                                    <%}else{%>
                                      <td width="12%"><input type="text" value="<%=data.password%>" readonly></td>
                                      <%}%>
                                  <td width="30%"></td>
                                </tr>
                              </table>
                              <div style="margin-top: 35px">
                                <span >Click <a href="/login">Here</a> to Login</span>
                              </div>
                           </center>
                        </div>
                    </div>     
                </div>
            </div>
        </div>
@endsection