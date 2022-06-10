@extends('layouts.adminbase')

@section('title', 'Edit Questions : '.$data->title)

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
@endsection


@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> Edit Books {{$data->title}}</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Category Elements
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="{{route('admin.faq.update',['id'=>$data->id])}}">
                                @csrf

                                <div class="form-group">
                                    <label>Question</label>
                                    <input class="form-control" type="text" name="question" value="{{$data->question}}" required>
                                </div>
                                <div class="form-group">
                                    <label>Answer</label>
                                    <textarea class="form-control" id="answer" name="answer" value="{{$data->question}}" ></textarea>
                                    <script>
                                        ClassicEditor
                                            .create( document.querySelector( '#answer' ) )
                                            .then( editor => {
                                                console.log( editor );
                                            } )
                                            .catch( error => {
                                                console.error( error );
                                            } );
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option selected>{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-info">Update Data</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->
@endsection

@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#textarea').summernote();
        })
    </script>
@endsection



