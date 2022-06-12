@extends('layouts.adminwindow')

@section('title', 'Show User')

@section('content')

    <!--main content start-->
    <section id="main-content">
            <h3><i class="fa fa-angle-right"></i>Message</h3>
                <div class="row mt">
                    <div class="col-lg-12">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Detail User Data</th>

                            </tr>
                            </thead>
                            <tr>
                                <th style="width: 200px;">Id</th>
                                <td> {{$data->id}} </td>
                            </tr>
                            <tr>
                                <th style="width: 200px;">Name</th>
                                <td> {{$data->name}} </td>
                            </tr>
                            <tr>
                                <th style="width: 200px;">Email</th>
                                <td> {{$data->email}} </td>
                            </tr>
                            <tr>
                                <th style="width: 200px;">Roles</th>
                                <td>
                                    @foreach($data->roles as $role)
                                        {{$role->name}}
                                        <a href="{{route('admin.user.destroyrole',['uid'=>$data->id,'rid'=>$role->id])}}" class="btn btn-danger btn-sm"
                                           onclick="return confirm('Are you sure to delete?')">[x]</a>
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 200px;">IP Number</th>
                                <td> {{$data->ip}} </td>
                            </tr>
                            <tr>
                                <th style="width: 200px;">Admin Note</th>
                                <td>
                                    <form role="form" action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="post">
                                        @csrf
                                        <select name="role_id">
                                            @foreach($roles as $role)
                                                <option value="{{$role->id}}">{{$role->name}}</option>
                                            @endforeach
                                        </select>
                                        <button type="submit" class="btn btn-info">Add Role</button>

                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->
@endsection
