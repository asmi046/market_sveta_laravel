<template>
    <div  v-show="bascetList.length != 0" class="bascet">
        <div class="bascet_tovar">
            <div class="control">
                <a @click.prevent="clearBascet()" class="clear_bascet_btn" href="#"><span>Очистить корзину</span></a>
            </div>

            <div class="tovar_list">
                
                <div v-for="(item) in bascetList" :key="item.product_sku" class="tovar">
                    <div class="tovar_all_blk picture_blk">
                        <img :src="'/storage/products_galery/'+item.img" alt="">
                    </div>
                    <div class="tovar_all_blk name_blk">
                        <h2>{{item.name}}</h2>
                        <p>{{item.brand}} ({{item.state}}) Артикул: {{item.product_sku}}</p>
                    </div>
                    <div class="tovar_all_blk price_blk">
                        <span class="rub price_formator">{{Number(item.price).toLocaleString('ru-RU')}}</span>
                    </div>
                    <div class="tovar_all_blk couint_blk">
                        <div class="number_wrapper">
                            <span @click="item.quentity--; updateBascet()" class="number_btn val_down">-</span>
                            <input type="number" :value="item.quentity">
                            <span @click="item.quentity++; updateBascet()" class="number_btn val_upp">+</span>
                        </div>
                    </div>
                    <div class="tovar_all_blk summ_blk">
                        <span class="rub price_formator">{{Number(parseFloat(item.quentity)*parseFloat(item.price)).toLocaleString('ru-RU')}}</span>
                    </div>
                </div>
            </div>

            <div class="itogo">
                <div class="itogo_price_count">
                    <div class="itogo_row">
                        <span class="text">Товары (<span>{{count}}</span>)</span>
                        <span class="razd"></span>
                        <span class="p_price rub price_formator">{{Number(subtotal).toLocaleString('ru-RU')}}</span>
                    </div>

                    <div class="itogo_row itogo_row_final">
                        <span class="text">Итого</span>
                        <span class="razd"></span>
                        <span class="p_price rub price_formator">{{Number(subtotal).toLocaleString('ru-RU')}}</span>
                    </div>
                </div>
            </div>

        </div>
        
        <div class="bascet_form">
            <h2>Контактные данные</h2>
            <form action="GET">
                <input name="fio" type="text" placeholder="Фамилия, Имя*">
                <input name="email" type="email" placeholder="e-mail">
                <input name="phone" type="text" placeholder="Телефон*">
                <textarea name="adress" placeholder="Адрес"></textarea>
                <textarea name="comment" placeholder="Комментарий"></textarea>
                <button class="btn" type="submit">Отправить</button>
                <p class="policy">Заполняя данную форму и отправляя заказ вы соглашаетесь с <a href="#">политикой конфиденциальности</a></p>
            </form>
        </div>
    </div>
    <h3 v-show="bascetList.length == 0" >Ваша корзина пуста</h3>
</template>

<script>
export default {
    data() {
        return {
            bascetList:[],
            count:0,
            subtotal:0
        }
    },

    mounted: function() {
        axios.get('/bascet/get/')
            .then((response) => {
                this.bascetList = response.data
                this.updateBascet()
            })
            .catch(error => console.log(error));
    },
    methods: {
        updateBascet() {
            if (this.bascetList.length == 0) return;
            this.count = 0;
            this.subtotal = 0;
            for (let i = 0; i<this.bascetList.length; i++) {
                this.count+=this.bascetList[i].quentity
                this.subtotal+=parseFloat(this.bascetList[i].quentity)*parseFloat(this.bascetList[i].price)
            }
        },

        clearBascet() {
            axios.delete('/bascet/clear/', {
                _token: document.querySelector('meta[name="_token"]').content
            })
            .then(() => {
                this.count = 0
                this.subtotal = 0
                this.bascetList = []
            })
            .catch(error => console.log(error));
        }
    }

}
</script>

<style>

</style>