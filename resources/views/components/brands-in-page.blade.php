<div class="all_brands_in_page">
    <div class="brand_search">
        <form action="">
            <input id="search_brand_input" type="text" placeholder="Введите бренд для поиска">
        </form>
        <div id="brand_search_result" class="brand_search_result">

        </div>
    </div>

    <div class="brand_input">
       @foreach ($allbrands as $key => $value)
            <div class="brand_input_blk">
                <div class="alfuk">
                    {{$key}}
                </div>

                <div class="list">
                    @foreach ($value as $item)
                        <p><a href="/brand/{{$item['slug']}}">{{$item['brand']}}</a></p>
                    @endforeach
                </div>
            </div>
       @endforeach

    </div>

</div>
