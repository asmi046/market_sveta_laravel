<div class="breadcrumb">
    @if ($simple)
        <ul>
            <li><a href="{{route('home')}}">Главная</a></li>
            <li>{{ $pagename }}</li>
        </ul>    
    @else
        <ul>
            <li><a href="{{route('home')}}">Главная</a></li>
            <li>{{ $pagename }}</li>
        </ul>    
    @endif 

</div>