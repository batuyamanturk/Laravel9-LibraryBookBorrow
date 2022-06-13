@extends('layouts.adminbase')

@section('title', 'Borrowed Book List')

@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row mt">
                <h3><i class="fa fa-angle-right"></i>Borrowed Book List</h3>
            </div>
            <div class="row mt">
                <div class="col-lg-12">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">Id</th>
                            <th>User</th>
                            <th>Name&Surname</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Admin  Note</th>
                            <th>Status</th>
                            <th style="width: 40px">Show</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>
                                <a href="{{route('admin.user.show',['id'=>$rs->user->id])}}"onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                    {{$rs->user->name}}</a>
                            </td>
                            <td>{{$rs->name}}</td>
                            <td>{{$rs->email}}</td>
                            <td>{{$rs->address}}</td>
                            <td>{{$rs->phone}}</td>
                            <td>{{$rs->note}}</td>
                            <td>{{$rs->status}}</td>
                            <td>
                                <a href="{{route('admin.borrow.show',['id'=>$rs->id])}}" class="btn btn-success btn-sm"
                                   onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                    Show
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->
@endsection
