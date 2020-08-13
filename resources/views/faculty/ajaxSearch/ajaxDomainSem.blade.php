<!DOCTYPE html>
<html>
<head>
</head>
<body>
	

Select Group ::<select name="gid">
				@if(count($data)==0)
					<option value="">No Group Found</option>
				@else
                  @for($i= 0; $i< count($data);$i++)
                  <option value="{{$data[$i]->group_id}}">[{{$data[$i]->group_id}}]__<b>[{{$data[$i]->subDom_name}}]</b>__[{{$data[$i]->type_name}}]</option>
                  @endfor
                @endif
                </select>
</body>
</html>