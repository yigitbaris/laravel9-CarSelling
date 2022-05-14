@foreach($children as $subcategory)
    
        @if(count($subcategory->children))
            <li class="nav-item dropdown">{{$subcategory->title}} </li>
            <hr>
            @include('home.categorytree',['children'=> $subcategory->children])
        @else
            <li>
                <a class="nav-item dropdown" href="{{route('categorycars',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a>
            </li>
        @endif
    
@endforeach    