<div class="prod-card__old-price-block d-flex">
    <div class="prod-card__old-price rub">{{$oldprice}}</div>
    <div class="prod-card__sale-icon">-{{round((($oldprice - $price) /$price) * 100)}}%</div>
</div>