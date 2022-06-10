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
                                <td> {{$data->user->name}} </td>
                            </tr>
                            <tr>
                                <th style="width: 200px;">Name</th>
                                <td> {{$data->book->title}} </td>
                            </tr>
                            <tr>
                                <th style="width: 200px;">Subject</th>
                                <td> {{$data->subject}} </td>
                            </tr>
                            <tr>
                                <th style="width: 200px;">Review</th>
                                <td> {{$data->review}} </td>
                            </tr>
                            </tr>
                            <th style="width: 200px;">Rate</th>
                            <td> {{$data->rate}} </td>
                            </tr>
                            <tr>
                                <th style="width: 200px;">IP Number</th>
                                <td> {{$data->IP}} </td>
                            </tr>
                            <th style="width: 200px;">Status</th>
                            <td> {{$data->status}} </td>
                            </tr>
                            <tr>
                                <th style="width: 200px;">Created Date</th>
                                <td> {{$data->created_at}} </td>
                            </tr>
                            tr>
                            <th style="width: 200px;">Admin Note</th>
                            <td>
                                <form role="form" action="{{route('admin.comment.update',['id'=>$data->id])}}" method="post">
                                    @csrf
                                    <select name="status">
                                        <option selected>{{$data->status}}</option>
                                        <option>Enabled</option>
                                        <option>Disabled</option>
                                    </select>

                                    <button type="submit" class="btn btn-info">Update Comment </button>

                                </form>
                            </td>
                            </tr>
                        </table>
                    </div>
                </div>
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->
@endsection
