@extends('layouts.adminbase')

@section('title', 'Show Category : '.$data->title)

@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> {{$data->title}}</h3>
            <div class="row mb-2">
                <div class="col-sm-3">
                    <a href="/admin/category/edit/{{$data->id}}"class="btn btn-block btn-info btn-sm" style="width: 200px;">Edit</a>
                </div>
                <div class="col-sm-3">
                    <a href="/admin/category/destroy/{{$data->id}}" onclick="return confirm('Deleting !! Are you sure ?')" class="btn btn-block btn-danger" style="width: 200px;">Delete</a>
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
                            <th style="width: 200px;">Title</th>
                            <td> {{$data->title}} </td>
                        </tr>
                        <tr>
                            <th style="width: 200px;">Keywords</th>
                            <td> {{$data->keywords}} </td>
                        </tr>
                        <tr>
                            <th style="width: 200px;">Image</th>
                            <td>  </td>
                        <tr>
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
