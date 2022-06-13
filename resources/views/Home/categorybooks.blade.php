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
                        <ul class="aa-product-catg">
                            <!-- start single book item -->
                            <p>{{Session::get('info')}}</p>
                            @foreach($books as $rs)
                                <li>
                                    <figure>
                                        <a class="aa-product-img" href="{{route('book',[$rs->id])}}"><img src="{{Storage::url($rs->image)}}" style="width: 150px; height: 200px;"></a>
                                        <a class="aa-add-card-btn" href="{{route('shopcart.add',['id'=>$rs->id])}}"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
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
        </div>
    </section>


    <!-- / product category -->





@endsection
