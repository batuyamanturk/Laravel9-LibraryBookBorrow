@foreach($children as $subcategory)
    <ul class="dropdown-menu">
        @if(count($subcategory->children))
            <li class="dropdown-menu" aria-expanded="true">{{$subcategory->title}} </li>
            <ul class="dropdown-menu">
                @include('home.categorytree',['children'=>$subcategory->$children])
            </ul>
            <hr>
        @else
            <li>
                <a href="{{route('categorybooks',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a>
            </li>
        @endif

    </ul>
@endforeach
