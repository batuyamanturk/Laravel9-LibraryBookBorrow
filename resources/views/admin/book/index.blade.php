@extends('layouts.adminbase')

@section('title', 'Books List')

@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row mt">
                <a href="{{route('admin.book.create')}}" class="btn btn-success btn-sm">Add Books</a>
            </div>
            <div class="row mt">
                <div class="col-lg-12">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">Id</th>
                            <th>Parent</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Pagenum</th>
                            <th>Publicationyear</th>
                            <th>Image</th>
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
                            <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category, $rs->category->title)}}</td>
                            <td>{{$rs->title}}</td>
                            <td>{{$rs->author}}</td>
                            <td>{{$rs->pagenum}}</td>
                            <td>{{$rs->publicationyear}}</td>
                            <td>
                                @if($rs->image)
                                    <img src="{{Storage::url($rs->image)}}" style="height: 40px";>
                                @endif
                            </td>
                            <td>{{$rs->status}}</td>
                            <td><a href="{{route('admin.book.edit',['id'=>$rs->id])}}" class="btn btn-info btn-sm">Edit</a></td>
                            <td><a href="{{route('admin.book.destroy',['id'=>$rs->id])}}" class="btn btn-danger btn-sm"
                                   onclick="return confirm('Are you sure to delete?')">Delete</a></td>
                            <td><a href="{{route('admin.book.show',['id'=>$rs->id])}}" class="btn btn-success btn-sm">Show</a></td>
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
