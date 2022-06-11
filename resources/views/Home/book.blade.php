@extends('layouts.frontbase')

@section('title', $data->title)
@section('icon',Storage::url($settings->icon))

@section('content')
    <!-- catg header banner section -->
    <section id="aa-catg-head-banner">
        <div class="breadcrumb">
            <div class="container">
                    <div class="breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>{{$data->category->title}}</li>
                        <li class="active">{{$data->title}}</li>
                    </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->

    <!-- product category -->
    <section id="aa-product-details">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-product-details-area">
                        <div class="aa-product-details-content">
                            <div class="row">
                                <!-- Modal view slider -->
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <div class="aa-product-view-slider">
                                        <div id="demo-1" class="simpleLens-gallery-container">
                                            <div class="simpleLens-thumbnails-container">
                                                <a data-big-image="img/view-slider/medium/polo-shirt-1.png" data-lens-image="img/view-slider/large/polo-shirt-1.png" class="simpleLens-thumbnail-wrapper" href="#">
                                                    <img src="{{Storage::url($data->image)}}" style="width: 250px; height: 300px;">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal view content -->
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <p>{{Session::get('info')}}</p>
                                    <div class="aa-product-view-content">
                                        <h2>{{$data->title}}</h2>
                                        <br>
                                        <label>Author: <p>{{$data->author}}</p></label><br>
                                        <label>Page Number: <p>{{$data->pagenum}}</p></label><br>
                                        <label>Publication Year: <p>{{$data->publicationyear}}</p></label><br>
                                        <label>Description: <p>{{$data->description}}</p></label><br>
                                        @php
                                            $average = $data->comment->average('rate');
                                        @endphp
                                        <label>{{$data->comment->count('id')}} Reviews for {{$data->title}}<p>Average of ratings:{{number_format($average,2)}}</p></label><br>
                                        <div class="aa-prod-view-bottom">
                                            <a class="aa-add-to-cart-btn" href="#">Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="aa-product-details-bottom">
                            <ul class="nav nav-tabs" id="myTab2">
                                <li><a href="#description" data-toggle="tab">Description</a></li>
                                <li><a href="#review" data-toggle="tab">Reviews</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="description">
                                    <p>{!! $data->detail !!}</p>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="review">
                                <div class="aa-product-review-area">
                                    <h4>Reviews for {{$data->title}}</h4>
                                    <ul class="aa-review-nav">
                                        @foreach($comments as $rs)
                                        <li>
                                            <div class="media">
                                                <div class="media-body">
                                                    <h4 class="media-heading"><strong>{{$rs->user->name}}</strong> - <span>{{$rs->created_at}}</span></h4>
                                                    <div class="aa-product-rating">
                                                        <p>Rate {{$rs->rate}}</p>
                                                    </div>
                                                    <strong>{{$rs->subject}}</strong>
                                                    <p>{{$rs->review}}</p>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                    <h4>Add a review</h4>
                                    <!-- review form -->
                                    <form action="{{route('storecomment')}}" class="review-form"  role="form" method="post">
                                        @csrf
                                        <input class="input" type="hidden" name="book_id" value="{{$data->id}}">
                                        <div class="form-group">
                                            <label for="name">Subject</label>
                                            <input type="text" class="form-control" name="subject"  placeholder="subject">
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Your Review</label>
                                            <textarea class="form-control" rows="3"  name="review" ></textarea>
                                        </div>
                                        <div class="form-group">
                                            <div class="aa-your-rating">
                                                <p>Your Rating</p>
                                                <input list="stars" name="rate">
                                                <datalist id="stars">
                                                    <option value="1 ">
                                                    <option value="2">
                                                    <option value="3">
                                                    <option value="4">
                                                    <option value="5">
                                                </datalist>
                                            </div>
                                        </div>
                                        @auth
                                        <button type="submit" class="btn btn-default aa-review-submit">Submit</button>
                                        @else
                                            <a href="/login" class="aa-primary-btn">For Submit Your Review,Please Login</a>
                                        @endauth
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / product category -->


@endsection
