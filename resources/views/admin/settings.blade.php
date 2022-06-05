@extends('layouts.adminbase')

@section('title', 'Settings')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
@endsection

@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i>Settings</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <form role="form" action="{{route('admin.settings.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Settings
                                </div>
                                <div class="panel-body">
                                    <div class="tab-content" id="custom-tabs-one-tabContent">
                                            <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" name="title" value="{{$data->title}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Keywords</label>
                                                <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <input type="text" name="description" value="{{$data->description }}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Company</label>
                                                <input type="text" name="company" value="{{$data->company}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="address" value="{{$data->address}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" name="phone" value="{{$data->phone}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" name="email" value="{{$data->email}}" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control select2" name="status">
                                                    <option selected="selected">{{$data->status}}</option>
                                                    <option>True</option>
                                                    <option>False</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputFile">Icon</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="icon">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label>Smtp Server</label>
                                                <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Smtp Email</label>
                                                <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Smtp Password</label>
                                                <input type="password" name="smtpassword" value="{{$data->smtppassword}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Smtp Port</label>
                                                <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control">
                                            </div>



                                            <div class="form-group">
                                                <label>Fax</label>
                                                <input type="text" name="fax" value="{{$data->fax}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Facebook</label>
                                                <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Instagram</label>
                                                <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Twitter</label>
                                                <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Youtube</label>
                                                <input type="text" name="youtube" value="{{$data->youtube}}" class="form-control">
                                            </div>



                                            <div class="form-group">
                                                <label>About Us</label>
                                                <textarea id="abo" name="aboutus" value="{{$data->aboutus}}" class="form-control">{!! $data->aboutus !!}</textarea>
                                                <script>
                                                    ClassicEditor
                                                        .create( document.querySelector( '#abo' ) )
                                                        .then( editor => {
                                                            console.log( editor );
                                                        } )
                                                        .catch( error => {
                                                            console.error( error );
                                                        } );
                                                </script>
                                            </div>



                                            <div class="form-group">
                                                <label>Contact</label>
                                                <textarea id="con" name="contact" value="{{$data->contact}}" class="form-control">{!! $data->contact !!}</textarea>
                                                <script>
                                                    ClassicEditor
                                                        .create( document.querySelector( '#con' ) )
                                                        .then( editor => {
                                                            console.log( editor );
                                                        } )
                                                        .catch( error => {
                                                            console.error( error );
                                                        } );
                                                </script>
                                            </div>



                                            <div class="form-group">
                                                <label>References</label>
                                                <textarea id="ref" name="references" value="{{$data->references}}" class="form-control">{!! $data->references !!}</textarea>
                                                <script>
                                                    ClassicEditor
                                                        .create( document.querySelector( '#ref' ) )
                                                        .then( editor => {
                                                            console.log( editor );
                                                        } )
                                                        .catch( error => {
                                                            console.error( error );
                                                        } );
                                                </script>
                                            </div>


                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Update Settings</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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
            $('#aboutus').summernote();
            $('#contact').summernote();
            $('#references').summernote();

        })
    </script>
@endsection
