@extends('layouts.adminbase')

@section('title', 'Add Books')

@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> Add Book</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Category Elements
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="{{route('admin.book.store',)}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Parent Category</label>
                                    <select class="form-control" name="category_id">
                                        <option value="0" selected="selected">Main Category</option>
                                        @foreach($data as $rs)
                                            <option value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input class="form-control" type="text" name="title" placeholder="Title" required>
                                </div>
                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input class="form-control" type="text" name="keywords" placeholder="Keywords">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input class="form-control" type="text" name="description" placeholder="Description">
                                </div>
                                <div class="form-group">
                                    <label>Detail</label>
                                    <input class="form-control" type="text" name="detail" placeholder="Detail">
                                </div>
                                <div class="form-group">
                                    <label>Author</label>
                                    <input class="form-control" type="text" name="author" placeholder="Author">
                                </div>
                                <div class="form-group">
                                    <label>Page Number</label>
                                    <input class="form-control" type="number" name="pagenum" placeholder="Page Number">
                                </div>
                                <div class="form-group">
                                    <label>Publication Year</label>
                                    <input class="form-control" type="number" name="publicationyear" placeholder="Publication Year">
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="image" class="custom-file-input">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-info">Save </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->
@endsection
