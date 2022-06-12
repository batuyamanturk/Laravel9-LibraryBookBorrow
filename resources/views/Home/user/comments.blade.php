@extends('layouts.frontbaselogin')

@section('title', 'User Comments & Reviews ')

@section('content')
    <section id="aa-catg-head-banner">
        <div class="breadcrumb">
            <div class="container">
                <div class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">User Profile</li>
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
                                    <h4>User Comments & Reviews</h4>
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th style="width: 10px">Id</th>
                                            <th>Book Name</th>
                                            <th>Name</th>
                                            <th>Subject</th>
                                            <th>Review</th>
                                            <th>Rate</th>
                                            <th>Status</th>
                                            <th style="width: 40px">Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($comments as $rs)
                                            <tr>
                                                <td>{{$rs->id}}</td>
                                                <td><a href="{{route('book',['id'=>$rs->book_id])}}">
                                                        {{$rs->book->title}}
                                                    </a>
                                                </td>
                                                <td>{{$rs->user->name}}</td>
                                                <td>{{$rs->subject}}</td>
                                                <td>{{$rs->review}}</td>
                                                <td>{{$rs->rate}}</td>
                                                <td>{{$rs->status}}</td>
                                                <td><a href="{{route('userpanel.reviewsdestroy',['id'=>$rs->id])}}" class="btn btn-danger btn-sm"
                                                       onclick="return confirm('Are you sure to delete?')">Delete</a></td>

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
