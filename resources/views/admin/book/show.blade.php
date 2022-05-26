@extends('layouts.adminbase')

@section('title', 'Show Books : '.$data->title)

@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> {{$data->title}}</h3>
            <div class="row mb-2">
                <div class="col-sm-3">
                    <a href="{{route('admin.book.edit',['id'=>$data->id])}}" class="btn btn-block btn-info btn-sm" style="width: 200px;">Edit</a>
                </div>
                <div class="col-sm-3">
                    <a href="{{route('admin.book.destroy',['id'=>$data->id])}}" onclick="return confirm('Deleting !! Are you sure ?')" class="btn btn-block btn-danger" style="width: 200px;">Delete</a>
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
                            <th style="width: 200px;">Category</th>
                            <td> {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data, $data->category->title)}}</td>

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
                            <th style="width: 200px;">Description</th>
                            <td> {{$data->description}} </td>
                        <tr>
                        <tr>
                            <th style="width: 200px;">Details</th>
                            <td> {{$data->detail}} </td>
                        </tr>
                            <th style="width: 200px;">Author</th>
                            <td> {{$data->author}} </td>
                        </tr>
                        <tr>
                            <th style="width: 200px;">Page Number</th>
                            <td> {{$data->pagenum}} </td>
                        </tr>
                        <tr>
                            <th style="width: 200px;">Publication Year</th>
                            <td> {{$data->publicationyear}} </td>
                        </tr>
                        <tr>
                            <th style="width: 200px;">Image</th>
                            <td>@if ($data->image)
                                    <img src="{{Storage::url($data->image)}}" style="height:150px">
                                @endif
                            </td>
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
