@foreach ($menu as $item)
    <div class="scm_{{$item->id}} sub_cat_menu_wrapper">
        <div class="all_list_link">
            <a class="icon icon-ec_icon_cube " href="{{$item->link}}"> Смотреть все товары</a>
        </div>
        <div class="puncts">
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

    </div>
@endforeach
