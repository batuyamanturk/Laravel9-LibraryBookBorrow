@extends('layouts.frontbase')

@section('title', $settings->title)
@section('description',  $settings->description)
@section('keywords',  $settings->keywords)
@section('icon',Storage::url($settings->icon))



@section('content')
    @include("home.slider")


    <!-- Products section -->
    <section id="aa-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-product-area">
                            <div class="aa-product-inner">
                                <!-- start prduct navigation -->
                                <ul class="nav nav-tabs aa-products-tab">
                                    <li class="active"><a href="#men" data-toggle="tab">Most borrowed</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="men">
                                        <ul class="aa-product-catg">
                                            <!-- start single book item -->
                                            @foreach($booklist1 as $rs)
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="{{route('book',[$rs->id])}}"><img src="{{Storage::url($rs->image)}}" style="width: 250px; height: 300px;"></a>
                                                    <a class="aa-add-card-btn"href="{{route('shopcart.add',['id'=>$rs->id])}}"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
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
                                    </div><!-- /.modal-dialog -->
                                </div><!-- / quick view modal -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Products section -->

    <!-- Support section -->
    <section id="aa-support">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-support-area">
                        <div class="col-md-12 col-sm-4 col-xs-">
                            <div class="aa-support-single">
                                <span class="fa fa-phone"></span>
                                <h4>SUPPORT 24/7</h4>
                                <P>Our Phone Number:+7531594268</P>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Support section -->
    <!-- Testimonial -->
    <section id="aa-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-testimonial-area">
                        <ul class="aa-testimonial-slider">
                            <!-- single slide -->
                            <li>
                                <div class="aa-testimonial-single">
                                    <img class="aa-testimonial-img" src="{{asset('assets')}}/img/atatürk.jpg" style="width: 150px; height: 150px;" alt="testimonial img">
                                    <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                    <p>“Science is the most reliable guide in life.”</p>
                                    <div class="aa-testimonial-info">
                                        <p>Mustafa Kemal Ataturk</p>
                                    </div>
                                </div>
                            </li>
                            <!-- single slide -->
                            <li>
                                <div class="aa-testimonial-single">
                                    <img class="aa-testimonial-img" src="{{asset('assets')}}/img/marcus.jpg" style="width: 150px; height: 150px;" alt="testimonial img">
                                    <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                    <p>“A room without books is like a body without a soul.”</p>
                                    <div class="aa-testimonial-info">
                                        <p>Marcus Tullius Cicero</p>
                                    </div>
                                </div>
                            </li>
                            <!-- single slide -->
                            <li>
                                <div class="aa-testimonial-single">
                                    <img class="aa-testimonial-img" src="{{asset('assets')}}/img/frankzappa.jpg" style="width: 150px; height: 150px;" alt="testimonial img">
                                    <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                    <p>“So many books, so little time.”</p>
                                    <div class="aa-testimonial-info">
                                        <p>Frank Zappa</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="aa-testimonial-single">
                                    <img class="aa-testimonial-img" src="{{asset('assets')}}/img/ern.jpg" style="width: 150px; height: 150px;" alt="testimonial img">
                                    <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                    <p>“There is no friend as loyal as a book.”</p>
                                    <div class="aa-testimonial-info">
                                        <p>Ernest Hemingway</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Testimonial -->





    <!-- Subscribe section -->
    <section id="aa-subscribe">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-subscribe-area">
                        <h3>Subscribe our newsletter </h3>
                        <p>Subscribe to find out our new coming books </p>
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
