<h1>Письмо с сайта</h1>
<p><strong>Имя:</strong> {{$formData['fio']}}</p>
<p><strong>Телефон:</strong> {{$formData['phone']}}</p>
<p><strong>E-mail:</strong> {{$formData['email']}}</p>
<p><strong>Адрес:</strong> {{$formData['adress']}}</p>
<p><strong>Комментарий:</strong> {{$formData['comment']}}</p>
<table>
    <thead>
        <tr>
            <th>Картинка</th>
            <th>Наименование</th>
            <th>Цена</th>
            <th>Колличество</th>
            <th>Сумма</th>
        </tr>
    </thead>
    <tbody>
           @foreach ($formData['tovars'] as $item)
               
           @endforeach
            <tr>
                <td><img src="{{asset('/storage/products_galery/'.$item["tovar_data"]["img"])}}" alt=""></td>
                <td>{{$item["tovar_data"]["name"]}}<br/><span style="font-size:12px">{{$item["tovar_data"]["brand"]}} ({{$item["tovar_data"]["state"]}})</span></td>
                <td></td>
                <td></td>
                <td></td>
            </tr> 
        
    </tbody>
</table>
<hr/>