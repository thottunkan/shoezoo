@extends('userlayout')
@section('content')
<script>
    
</script>
    <div class="container img-fluid" style="margin-top: 100px">
        <div class="row">
            <div class="col-md-12 w-5" style="width: 500px; margin: auto;">
                    <h1>{{session("name")}}</h1>
                    {{-- {{$userdata}} --}}
                    <form action="/edituserprofile" method="post">
                        {{ csrf_field() }}
                    <input type="text" name="addr_id" value="{{$userdata[0]->addr_id}}" hidden><br>
                    <input type="text" name="login_id" value="{{session("loginId")}}" hidden><br>
                    
                    <label for=""><b class="font-monospace">Name</b></label>
                    <input type="text" name="name" value="{{$userdata[0]->name}}" class="form-control" class="font-monospace " ><br>
                    <label for=""><b class="font-monospace">Email</b></label>
                    <input type="text" name="email" value="{{$userdata[0]->email}}" class="form-control" class="font-monospace " ><br>
                    <label for=""><b class="font-monospace">Phone</b></label>
                    <input type="text" name="phone" value="{{$userdata[0]->phone}}" class="form-control" class="font-monospace " ><br>
                    <label for=""><b class="font-monospace">username</b></label>
                    <input type="text" name="username" value="{{$userdata[0]->username}}" class="form-control" class="font-monospace " ><br>
                    <label for=""><b class="font-monospace">Address Field 1</b></label>
                    <input type="text" name="af1" value="{{$userdata[0]->field1}}" class="form-control" class="font-monospace " ><br>
                    <label for=""><b class="font-monospace">Address Field 2</b></label>
                    <input type="text" name="af2" value="{{$userdata[0]->field2}}" class="form-control" class="font-monospace " ><br>
                    <label for=""><b class="font-monospace">Address Field 3</b></label>
                    <input type="text" name="af3" value="{{$userdata[0]->field3}}" class="form-control" class="font-monospace " ><br>
                    <label for=""><b class="font-monospace">Address Field 4</b></label>
                    <input type="text" name="af4" value="{{$userdata[0]->field4}}" class="form-control" class="font-monospace " ><br>
                    {{-- <a href="" class="btn btn-warning form-control">
                        Regid={{$userdata[0]->reg_id}}
                        Loginid ={{$userdata[0]->login_id}}
                        addr_id = {{$userdata[0]->id}}
                    </a> --}}
                    <input type="submit" class="btn btn-warning form-control" value="Update">
                </form>
            </div>
        </div>
    </div>
@endsection