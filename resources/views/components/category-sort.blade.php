<div class="category_sort_blk">
    <div class="sort">
        <form method="GET">
            <x-get-field-in-form exclide="order"></x-get-field-in-form>
            <select name="order" onchange="this.parentNode.submit()" id="">
                <option @selected(request()->get("order") === "Сначала недорогие")  value="Сначала недорогие">Сначала недорогие</option>
                <option @selected(request()->get("order") === "Сначала дорогие") value="Сначала дорогие">Сначала дорогие</option>
                <option @selected(request()->get("order") === "Скидка") value="Скидка">Скидка</option>
                <option @selected(request()->get("order") === "Новинки") value="Новинки">Новинки</option>
                <option @selected(request()->get("order") === "По наличию") value="По наличию">По наличию</option>
            </select>
        </form>

    </div>
{{$cat->links('parts.category-counter')}}

</div>
