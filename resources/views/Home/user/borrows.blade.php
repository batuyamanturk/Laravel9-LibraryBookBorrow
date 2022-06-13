@extends('layouts.frontbaselogin')

@section('title', 'User Borrowed Book List')

@section('content')
    <section id="aa-catg-head-banner">
        <div class="breadcrumb">
            <div class="container">
                <div class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">User Borrowed Book List</li>
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->

    <!-- Cart view section -->
    <section id="aa-myaccount">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-myaccount-area">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="title">
                                    <h4>User Menu</h4>
                                </div>
                                @include('home.user.usermenu')
                            </div>
                            <div class="col-md-10">
                                <div class="aa-myaccount-register">
                                    <h4>User Borrowed Book List</h4>
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th style="width: 10px">Id</th>
                                            <th>Name&Surname</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Addres</th>
                                            <th>Status</th>
                                            <th style="width: 40px">Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($borrows as $rs)
                                            <tr>
                                                <td>{{$rs->id}}</td>

                                                <td>{{$rs->name}}</td>
                                                <td>{{$rs->email}}</td>
                                                <td>{{$rs->phone}}</td>
                                                <td>{{$rs->address}}</td>
                                                <td>{{$rs->status}}</td>
                                                <td><a href="{{route('userpanel.borrowdetail',['id'=>$rs->id])}}" class="btn btn-danger btn-sm">Show Detail</a></td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Cart view section -->


@endsection
