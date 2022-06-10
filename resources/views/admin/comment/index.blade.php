@extends('layouts.adminbase')

@section('title', 'Comment List')

@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row mt">
                <h3><i class="fa fa-angle-right"></i>Comment List</h3>
            </div>
            <div class="row mt">
                <div class="col-lg-12">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">Id</th>
                            <th>Name</th>
                            <th>Book Name</th>
                            <th>Subject</th>
                            <th>Review</th>
                            <th>Rate</th>
                            <th>Status</th>
                            <th style="width: 40px">Show</th>
                            <th style="width: 40px">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->user->name}}</td>
                            <td>{{$rs->book->title}}</td>
                            <td>{{$rs->subject}}</td>
                            <td>{{$rs->review}}</td>
                            <td>{{$rs->rate}}</td>
                            <td>{{$rs->status}}</td>
                            <td>
                                <a href="{{route('admin.comment.show',['id'=>$rs->id])}}" class="btn btn-success btn-sm"
                                   onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                    Show
                                </a>
                            </td>
                            <td><a href="{{route('admin.comment.destroy',['id'=>$rs->id])}}" class="btn btn-danger btn-sm"
                                   onclick="return confirm('Are you sure to delete?')">Delete</a></td>
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
