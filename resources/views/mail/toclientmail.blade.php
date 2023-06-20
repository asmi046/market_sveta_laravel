<h1>Ваш заказ №{{ $orderId }} оформлен</h1>
<p>Уважаемый(ая) {{$formData['name']}} мы получили Ваш заказ №{{ $orderId }}.</p>
<h3>Состав заказа:</h3>

<table style="width:100%; border-top:1px solid black; border-left:1px solid black; border-spacing: 0;">
    <thead style="text-align:left;">
        <tr>
            <th style="padding: 5px; border-bottom:1px solid black; border-right:1px solid black;">Картинка</th>
            <th style="padding: 5px; border-bottom:1px solid black; border-right:1px solid black;">Наименование</th>
            <th style="padding: 5px; border-bottom:1px solid black; border-right:1px solid black;">Цена</th>
            <th style="padding: 5px; border-bottom:1px solid black; border-right:1px solid black;">Колличество</th>
            <th style="padding: 5px; border-bottom:1px solid black; border-right:1px solid black;">Сумма</th>
        </tr>
    </thead>
    <tbody>
           @foreach ($formData['tovars'] as $item)


                <tr>
                    <td style="padding: 5px; border-bottom:1px solid black; border-right:1px solid black;"><img width="70" height="70" src="{{asset('/storage/'.$item["tovar_data"]["img"])}}" alt=""></td>
                    <td style="padding: 5px; border-bottom:1px solid black; border-right:1px solid black;">{{$item["tovar_data"]["name"]}}<br/><span style="font-size:12px">{{$item["tovar_data"]["brand"]}} ({{$item["tovar_data"]["state"]}})</span></td>
                    <td style="padding: 5px; border-bottom:1px solid black; border-right:1px solid black;">{{$item["tovar_data"]["price"]}}</td>
                    <td style="padding: 5px; border-bottom:1px solid black; border-right:1px solid black;">{{$item["quentity"]}}</td>
                    <td style="padding: 5px; border-bottom:1px solid black; border-right:1px solid black;">{{(float)$item["quentity"] * (float)$item["tovar_data"]["price"]}}</td>
                </tr>
            @endforeach
    </tbody>
</table>

<h3>Итого: {{$formData['count']}} товаров на сумму {{$formData['subtotal']}}  </h3>

<p>Спасибо что обратились к нам наши менеджеры свяжутся с вами в ближайшее время!</p>
