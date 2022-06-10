@extends('layouts.adminbase')

@section('title', 'Show Books : '.$data->title)

@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> {{$data->question}}</h3>
            <div class="row mb-2">
                <div class="col-sm-3">
                    <a href="{{route('admin.faq.edit',['id'=>$data->id])}}" class="btn btn-block btn-info btn-sm" style="width: 200px;">Edit</a>
                </div>
                <div class="col-sm-3">
                    <a href="{{route('admin.faq.destroy',['id'=>$data->id])}}" onclick="return confirm('Deleting !! Are you sure ?')" class="btn btn-block btn-danger" style="width: 200px;">Delete</a>
                </div>
            </div>
            <div class="row mt">
                <div class="col-lg-12">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Detail Data</th>
                        </tr>
                        </thead>
                        <tr>
                            <th style="width: 200px;">Id</th>
                            <td> {{$data->id}} </td>
                        </tr>
                        <tr>
                            <th style="width: 200px;">Question</th>
                            <td> {{$data->question}} </td>
                        </tr>
                        <tr>
                            <th style="width: 200px;">Answer</th>
                            <td> {!! $data->answer  !!} </td>
                        </tr>
                            <th style="width: 200px;">Status</th>
                            <td> {{$data->status}} </td>
                        </tr>
                        <tr>
                            <th style="width: 200px;">Created Date</th>
                            <td> {{$data->created_at}} </td>
                        </tr>
                        <tr>
                            <th style="width: 200px;">Updated Date</th>
                            <td> {{$data->updated_at}} </td>
                        </tr>

                    </table>
                </div>
            </div>

        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->
@endsection
