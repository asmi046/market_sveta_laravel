<div class="mobile_catalog_menu">
    <div class="mobMenuWrappe">
        @foreach ($menu as $item)
            <div class="catalogMenuPunct">
            
                <div data-subwin="{{$item->slug}}" class="catalogMenuPunctTitle icon-ec_icon_ar_down">
                    <div class="cmpImg">
                        <img src="{{Storage::url('public/catalog/'.$item->img)}}" alt="">
                    </div>

                    <div class="cmpTitle">
                        <span>{{$item->title}}</span>
                    </div>
                </div>

                <div data-subwin="{{$item->slug}}" class="catalogMenuPunctTitle_sub spollers-block__body" >
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
    </div>
</div>