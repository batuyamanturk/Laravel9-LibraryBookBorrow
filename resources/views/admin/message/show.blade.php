@extends('layouts.adminwindow')

@section('title', 'Show Message')

@section('content')

    <!--main content start-->
    <section id="main-content">
            <h3><i class="fa fa-angle-right"></i>Message</h3>
                <div class="row mt">
                    <div class="col-lg-12">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Detail Message Data</th>

                            </tr>
                            </thead>
                            <tr>
                                <th style="width: 200px;">Id</th>
                                <td> {{$data->id}} </td>
                            </tr>
                            <tr>
                                <th style="width: 200px;">Name</th>
                                <td> {{$data->name}} </td>
                            </tr>
                            <tr>
                                <th style="width: 200px;">Phone</th>
                                <td> {{$data->phone}} </td>
                            </tr>
                            <tr>
                                <th style="width: 200px;">Email</th>
                                <td> {{$data->email}} </td>
                            </tr>
                            <tr>
                                <th style="width: 200px;">Subject</th>
                                <td> {{$data->subject}} </td>
                            </tr>
                            <tr>
                                <th style="width: 200px;">Message</th>
                                <td> {{$data->message}} </td>
                            </tr>
                            <th style="width: 200px;">Status</th>
                            <td> {{$data->status}} </td>
                            </tr>
                            <tr>
                                <th style="width: 200px;">Created Date</th>
                                <td> {{$data->created_at}} </td>
                            </tr>
                            <tr>
                                <th style="width: 200px;">Admin Note</th>
                                <td>
                                    <form role="form" action="{{route('admin.message.update',['id'=>$data->id])}}" method="post">
                                        @csrf
                                        <textarea id="note" name="note" >{{$data->note}}</textarea>

                                        <button type="submit" class="btn btn-info">Update Note </button>

                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->
@endsection
