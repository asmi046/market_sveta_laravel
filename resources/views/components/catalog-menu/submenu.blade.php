@foreach ($menu as $item)
    <div class="scm_{{$item->slug}} sub_cat_menu_wrapper">
        
        @foreach (get_submenu_puncts($item->sub_puncts) as $key => $value)
            <div class="punkt">
                <h2>{{$key}}</h2>
                <ul>
                    @foreach ($value as $sub_item)
                        <li><a href="{{$sub_item->link}}">{{$sub_item->title}}</a></li>    
                    @endforeach

                </ul>
            </div>    
        @endforeach

    </div>
@endforeach