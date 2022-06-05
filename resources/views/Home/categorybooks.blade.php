@extends('layouts.frontbase')

@section('title', $category->title)
@section('icon',Storage::url($settings->icon))

@section('content')
    <section id="aa-catg-head-banner">
        <div class="breadcrumb">
            <div class="container">
                <div class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">{{$category->title}}</li>
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->

    <!-- product category -->
    <section id="aa-product-category">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
                    <div class="aa-product-catg-content">
                        <div class="aa-product-catg-head">
                            <div class="aa-product-catg-head-left">


                            </div>
                            <div class="aa-product-catg-head-right">
                                <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                                <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
                            </div>
                        </div>
                        <div class="tab-content">
                            <!-- Start novals book category -->
                            <div class="tab-pane fade in active" id="men">
                                <ul class="aa-product-catg">
                                    <!-- start single book item -->
                                    @foreach($books as $rs)
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="{{route('book',[$rs->id])}}"><img src="{{Storage::url($rs->image)}}" style="width: 150px; height: 200px;"></a>
                                                <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">{{$rs->title}}</a></h4>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="{{route('book',[$rs->id])}}" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" ><span class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>


    </section>


    <!-- / product category -->


    <!-- Subscribe section -->
    <section id="aa-subscribe">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-subscribe-area">
                        <h3>Subscribe our newsletter </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
                        <form action="" class="aa-subscribe-form">
                            <input type="email" name="" id="" placeholder="Enter your Email">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Subscribe section -->



@endsection
