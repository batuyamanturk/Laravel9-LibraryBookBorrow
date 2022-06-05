<section id="menu">
    <div class="container">
        <div class="menu-area">
            @php
                $mainCategories =\app\Http\Controllers\HomeController::maincategorylist()
            @endphp
            <!-- Navbar -->
            <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <!-- Left nav -->
                    <ul class="nav navbar-nav">
                        <li><a href="{{route('home')}}">Home</a> </li>
                        <li><a href="#">Categories <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                @foreach($mainCategories as $rs)
                                    <li>
                                        <a href="{{route('categorybooks',['id'=>$rs->id])}}">{{$rs->title}}</a>
                                        @if(count($rs->children))
                                            @include('home.categorytree',['children'=>$rs->children])
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="{{route('about')}}">About Us</a> </li>
                        <li><a href="{{route('references')}}">References</a> </li>
                        <li><a href="{{route('contact')}}">Contact Us</a> </li>
                        <li><a href="{{route('home')}}">FAQ</a> </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
</section>
