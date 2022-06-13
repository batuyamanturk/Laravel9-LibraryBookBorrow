@extends('layouts.adminwindow')

@section('title', 'Show Borrowed Book')

@section('content')

    <!--main content start-->
    <section id="main-content">
            <h3><i class="fa fa-angle-right"></i>Message</h3>
                <div class="row mt">
                    <div class="col-lg-12">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Detail Borrow Data</th>
                            </tr>
                            </thead>
                            <tr>
                                <th style="width: 200px;">Id</th>
                                <td> {{$data->id}} </td>
                            </tr>
                            <tr>
                                <th style="width: 200px;">User</th>
                                <td> {{$data->user->name}} </td>
                            </tr>
                            <tr>
                                <th style="width: 200px;">Name&Surname</th>
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
                            </tr>
                            <th style="width: 200px;">Address</th>
                            <td> {{$data->address}} </td>
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
                            <th style="width: 200px;">Admin Note:
                                <br><br>
                                Status:
                            </th>
                            <td>
                                <form role="form" action="{{route('admin.borrow.update',['id'=>$data->id])}}" method="post">
                                    @csrf
                                    <textarea name="note" cols="80">{{$data->note}}</textarea><br>
                                    <select name="status">
                                        <option selected>{{$data->status}}</option>
                                        <option>Accepted</option>
                                        <option>Shipped</option>
                                        <option>Cancelled</option>
                                    </select>
                                    <button type="submit" class="btn btn-info">Update</button>
                                </form>
                            </td>
                            </tr>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">Id</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Pagenum</th>
                                <th>Publicationyear</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th style="width: 40px">Cancel</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->book->title}}</td>
                                    <td>{{$rs->book->author}}</td>
                                    <td>{{$rs->book->pagenum}}</td>
                                    <td>{{$rs->book->publicationyear}}</td>
                                    <td>
                                        <img src="{{Storage::url($rs->book->image)}}" style="height: 40px">
                                    </td>
                                    <td>{{$rs->book->status}}</td>
                                    <td><a href="#" class="btn btn-danger btn-sm">Cancel</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->
@endsection
