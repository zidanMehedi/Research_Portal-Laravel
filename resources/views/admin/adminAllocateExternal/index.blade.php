@extends('admin/adminAddFaculty/nav')

@section('index')
    <title>Allocate External</title>
        <div class="container-login100" style="width:900px;margin-left: 100px">
            <div class="wrap-login101" class="text-center">
                <div class="login100-form-title" style="background-image: url(/images/unnamed.jpg);">
                    <span class="login100-form-title-1">
                        Allocate External
                    </span>
                </div>

                <form method="POST" class="login101-form validate-form">
                    {{csrf_field()}}

                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Group number is required">
                        <select class="input100" name="group">
                            <option value="">Select Group</option>
                        @foreach($group as $key1)
                            <option value="{{$key1['group_id']}}">{{$key1['group_id']}}</option>
                        @endforeach
                        </select>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate = "External name is required">
                        <select class="input100" name="external">
                            <option value="">Select External</option>
                        @foreach($teacher as $key2)
                            <option value="{{$key2['faculty_fname'].' '.$key2['faculty_lname']}}">{{$key2['faculty_fname'].' '.$key2['faculty_lname']}}</option>
                        @endforeach
                        </select>
                        <span class="focus-input100"></span>
                    </div>

                    <div id="login100-form-Btn">
                        <button type="submit" class="login101-form-btn">
                            Allocate External
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </footer>
        
@endsection