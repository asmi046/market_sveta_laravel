<template>
    <div :data-prodid="tovar.sku" class="main-prod-card__column">
        <div class="prod-card__body d-flex">
            <div class="bascet_count">
                В корзине <span>1</span> шт
            </div>
            <to-favorites-btn :sku="tovar.sku"></to-favorites-btn>
            <a :href="tovar.trueLnk" class="prod-card__img">
                    <img loading="lazy"  v-if="tovar.trueImgSrc != ''" :src="tovar.trueImgSrc" :alt="'Купить '+tovar.name">
                    <img v-else :src="'/img/no_photo.jpg'" :alt="tovar.name">
            </a>
            <div class="prod-card__price_blk">
                <p class="prod-card__price price_formator rub">{{tovar.price}}</p>

                <div class="prod-card__old-price-block d-flex">
                        <div v-if="tovar.price_old != 0" class="prod-card__old-price price_formator rub">{{tovar.price_old}}</div>
                        <div v-if="tovar.price_old != 0" class="prod-card__sale-icon">-{{Math.round(((tovar.price_old - tovar.price) / tovar.price_old) * 100)}}%</div>
                </div>
            </div>
            <div class="prod-card__text">
                <h4 class="prod-card__text-title">
                    {{tovar.name}}
                </h4>
                <div class="prod-card__inner d-flex">
                    <p class="prod-card__manuf">{{tovar.brand}} ({{tovar.state}})</p>

                    <p :class="{active:(tovar.insklad <= 0)}" class="prod-card__avail  ">

                        <span v-if="tovar.insklad > 0">В наличии</span>
                        <span v-else>Под заказ</span>



                    </p>
                </div>

            </div>
            <div class="prod-card__price-item d-flex">
                <to-bascet-btn bascet="/bascet"  :sku="tovar.sku"></to-bascet-btn>
            </div>
        </div>
    </div>

</template>

<script>
import { ref } from 'vue'
import ToBascetBtn from './ToBascetBtn.vue'
import ToFavoritesBtn from './ToFavoritesBtn.vue'


export default {
    components: { ToBascetBtn, ToFavoritesBtn },

    props:{
        tovar:Object
    },

    setup(props) {
        return {
            tovar:props.tovar
        }
    }
}
</script>

<style>

</style>
