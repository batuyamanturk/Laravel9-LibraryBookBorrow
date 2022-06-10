@extends('layouts.adminbase')

@section('title', 'Books List')

@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row mt">
                <a href="{{route('admin.faq.create')}}" class="btn btn-success btn-sm">Add Question</a>
            </div>
            <div class="row mt">
                <div class="col-lg-12">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">Id</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Status</th>
                            <th style="width: 40px">Edit</th>
                            <th style="width: 40px">Delete</th>
                            <th style="width: 40px">Show</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->question}}</td>
                            <td>{!!  $rs->answer !!}</td>
                            <td>{{$rs->status}}</td>
                            <td><a href="{{route('admin.faq.edit',['id'=>$rs->id])}}" class="btn btn-info btn-sm">Edit</a></td>
                            <td><a href="{{route('admin.faq.destroy',['id'=>$rs->id])}}" class="btn btn-danger btn-sm"
                                   onclick="return confirm('Are you sure to delete?')">Delete</a></td>
                            <td><a href="{{route('admin.faq.show',['id'=>$rs->id])}}" class="btn btn-success btn-sm">Show</a></td>
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
