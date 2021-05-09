@extends('adminlayout')
@section('content')

    <div class="container" style="margin-top: 200px;">
        <div class="row">
            <h3 class="display-4 text-danger">User Informations</h3>
            <div class="col-md-12">
                <table class="table shadow table-hover table-striped bg-light">
                    <th>
                        {{-- {{$userdata}} --}}
                        <td><b>Name</b></td>
                        <td><b>Email</b></td>
                        <td><b>Phone<b/></td>
                        <td><b>Address Field 1</b></td>
                        <td><b>Address Field 2</b></td>
                        <td><b>Address Field 3</b></td>
                        <td><b>Address Field 4</b></td>
                        <td><b>Login ID</b></td>
                        <td><b>Username</b></td>
                        <td><b>Passowrd</b></td>
                    </th>
                    @foreach ($userdata as $data)
                        <tr>
                            <td></td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->field1}}</td>
                        <td>{{$data->field2}}</td>
                        <td>{{$data->field3}}</td>
                        <td>{{$data->field4}}</td>
                        <td>{{$data->login_id}}</td>
                        <td>{{$data->username}}</td>
                        <td>{{$data->password}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    
@endsection