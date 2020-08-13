<table class="table mb-0 table-sm table-hover">
                         <thead class="bg-light">
                             <tr>
                                 <th scope="col" class="border-0" style="width: 5%"></th>
                                 <th scope="col" class="border-0">Name</th>
                                 <th scope="col" class="border-0">Domain</th>
                                 <th class="border-0" style="width: 2%"></th>
                                 <th scope="col" class="border-0">Supervisor</th>
                                 <th class="border-0" style="width: 2%"></th>
                                 <th scope="col" class="border-0">Type</th>
                                 <th class="border-0" style="width: 2%"></th>
                                 <th scope="col" class="border-0">Action</th>
                                 <th scope="col" class="border-0" style="width: 5%"></th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach($subDom as $s)
                             <tr>
                                 <td style="width: 5%"></td>
                                 <td align="left" style="font-size: 14px">{{$s->subDom_name}}</td>
                                 <td style="font-size: 14px">{{$s->dom_name}}</td>
                                 <td style="width: 2%"></td>
                                 <td style="font-size: 14px">{{$s->faculty_fname}} {{$s->faculty_lname}}</td>
                                 <td style="width: 2%"></td>
                                 <td style="font-size: 14px">{{$s->type_name}}</td>
                                 <td style="width: 2%"></td>
                                 <td>
                                     <button class="btn btn-outline-info btn-sm" style="padding: 0 7px " ><a href="{{route('topicDetails',$s->subDom_id)}}"><i class="fas fa-eye"></i></a></button>
                                 </td>
                                 <td style="width: 5%"></td>
                             </tr>
                             @endforeach
                         </tbody>
                     </table>