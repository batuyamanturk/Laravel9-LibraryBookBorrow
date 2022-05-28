<section class="slider_section">
    <!-- Start slider -->
    <section id="aa-slider">
        <div class="aa-slider-area">
            <div id="sequence" class="seq">
                <div class="seq-screen">
                    <ul class="seq-canvas">
                        <!-- single slide item -->
                        @foreach($sliderdata as $rs)
                        <li>
                            <div class="seq-model">
                                <img data-seq src="{{Storage::url($rs->image)}}"  />
                            </div>
                            <div class="seq-title">
                                <h2 data-seq>{{$rs->title}}</h2>
                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">BORROW NOW</a>
                            </div>
                        </li>
                    @endforeach


                    </ul>
                </div>
                <!-- slider navigation btn -->
                <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                    <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
                    <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
                </fieldset>
            </div>
        </div>
    </section>
    <!-- / slider -->
</section>
