@extends('layouts.adminwindow')

@section('title', 'Category List')

@section('content')

    <!--main content start-->
            <h3>{{$book->title}}</h3>
            <hr>
            <form class="form-inline"  role="form" method="post" action="{{route('admin.image.store',['bid'=>$book->id])}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input class="form-control" type="text" name="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="custom-file-input">
                </div>
                <button type="submit" class="btn btn-theme">Upload</button>

            </form>
            <section class="wrapper site-min-height">
                <h3>Product Image List</h3>

                <div class="row mt">
                    <div class="col-lg-12">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">Id</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th style="width: 40px">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($images as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->title}}</td>
                                <td>
                                    @if($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" style="height: 40px";>
                                    @endif
                                </td>
                                <td><a href="{{route('admin.image.destroy',['bid'=>$book->id,'id'=>$rs->id])}}" class="btn btn-danger btn-sm"
                                       onclick="return confirm('Are you sure to delete?')">Delete</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>

        </section><! --/wrapper -->

    <!--main content end-->
@endsection
