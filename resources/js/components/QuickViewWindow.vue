<template>
    <div v-show="showModal" @click.self="closeWin()" class="popup_wrapper">
        <div class="popup_c">
            <div @click.prevent="closeWin()" class="popup__close" aria-label="Закрыть модальное окно"></div>

            <div v-show="showLoader" class="bascet_lader">
                <span></span>
                <p>Загружаем товар...</p>
            </div>

            <div v-show="!showLoader" class="tInfo">
                <h2 class="modal_h2">{{ this.tovarInfo.name }}</h2>
                <div class="qs_wrap">
                    <div class="left">
                        <img :src="tovarInfo.img" alt="">
                    </div>
                    <div class="right">

                        <div class="vender_sku">
                            <p class="prod-page__manuf">{{tovarInfo.brand}} ({{tovarInfo.state}})</p>
                            <p class="prod-page__manuf">Артикул: {{tovarInfo.sku}}</p>
                        </div>

                        <div class="select-prod-info__price-block select-prod-info__column m_bottom">
                            <div class="select-prod-info__price-block-inner d-flex">
                                <div class="price_and_sale">
                                    <div v-show="tovarInfo.price_old !=0" class="prod-card__old-price-block d-flex">
                                            <div class="prod-card__old-price price_formator rub">{{tovarInfo.price_old}}</div>
                                            <div class="prod-card__sale-icon">-{{Math.round(((tovarInfo.price_old - tovarInfo.price) / tovarInfo.price_old) * 100)}}%</div>
                                    </div>
                                    <div class="select-prod-info__price-block-price price_formator rub">{{ Number(tovarInfo.price).toLocaleString('ru-RU') }}</div>
                                </div>

                                <div class="select-prod-info__price-block-avail">
                                    <p v-if="tovarInfo.insklad !== 0" class="prod-card__avail  ">В наличии</p>
                                    <p v-else class="prod-card__avail active">Под заказ</p>
                                </div>
                            </div>
                            <div class="select-prod-info__price-block-buttons">
                                <div class="select-prod-info__price-block-buttons-inner d-flex">
                                <a href="#" class="select-prod-info__price-block-buttons-btn btn to_bascet">В КОРЗИНУ</a>
                                <a href="" class="select-prod-info__price-block-buttons-faw icon icon-ec_icon_lice to_favorites"></a>
                                </div>
                                <button class="select-prod-info__price-block-buttons-btn btn btn_grey">Купить в 1 клик</button>
                            </div>
                        </div>

                        <div class="select-prod__specifications-column">
                            <h4 class="select-prod__specifications-column-title">Характеристики</h4>
                            <div class="select-prod__specifications-card param_scroll_wrap">
                                <div class="param_scroll">
                                    <div v-for="(item, index) in tovarInfo.product_propertys" :key="index" class="select-prod__specifications-card-list d-flex">
                                        <div class="select-prod__specifications-card-list-item">{{item.name}}</div>
                                        <div class="select-prod__specifications-card-list-item">{{item.value}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            tovarId:0,
            tovarInfo:{
                name:"",
                img:"",
                brand:"",
                state:"",
                sku:"",
                price:0,
                price_old:0,
                insklad:0,
                product_propertys:[]
            },
            showModal:false,
            showLoader:true,
            _token: document.querySelector('meta[name="_token"]').content,
        }
    },


    methods:{
        closeWin() {
            this.showModal = false
            history.pushState('', document.title, window.location.pathname+window.location.search)
        },

        openWin() {
            if (location.hash.indexOf("quick_") !== -1){
                this.showModal = true
                this.tovarId = location.hash.split('_')[1]
                this.getTovarData()
            }
        },

        getTovarData() {

            if (this.tovarId == 0) return;

            this.showLoader = true;
            axios.get("/get_product_info/" + this.tovarId, {
                _token: this._token,
            })
            .then((response) => {
                this.showLoader = false

                this.tovarInfo = response.data.product
                this.tovarInfo.img = response.data.main_img

                console.log(response)
            })
            .catch( error => console.log(error));
        }
    },

    mounted() {
        window.addEventListener('hashchange', this.openWin)

        if (location.hash === '#'+this.hesh) {
            this.showModal = true
        }
    }
}
</script>

<style scoped>
    .popup_wrapper {
        width:100%;
        height: 100%;
        display: flex;
        position: fixed;
        left: 0;
        top:0;
        z-index: 11000;
        background-color: #000000aa;
        color:#333;
        overflow-y: scroll;
        padding: 20px 0;
    }

    .popup_c {
        width:80%;
        min-width: 1024px;
        max-width: 1280px;
        height: auto;
        background-color: white;
        margin: auto;
        border-radius: 11px;
        position:relative;
        padding: 40px;
    }

    .popup__close {
        position: absolute;
        top: 18px;
        right: 15px;
        cursor: pointer;
        z-index: 30;
        width: 20px;
        height: 20px;
        background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='18' height='18' viewBox='0 0 18 18'%3E%3Cdefs%3E%3Cpath id='avzva' d='M691.485 160.07l-1.414 1.415-7.071-7.071-7.071 7.071-1.414-1.414 7.07-7.071-7.07-7.071 1.414-1.415 7.07 7.071 7.072-7.07 1.414 1.414-7.07 7.07z'/%3E%3C/defs%3E%3Cg%3E%3Cg transform='translate(-674 -144)'%3E%3Cuse fill='%232e2e2e' xlink:href='%23avzva'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") 0 0 no-repeat;
    }

    .policy_descr,
    .sending_form button,
    .sending_form input{
        margin: 0 0 20px 0;
    }

    .policy_descr a{
        text-decoration: underline;
    }

    .sending_form .control_wrap button{
        width:50%;
    }

    .sending_form .control_wrap {
        max-width: 100%;
        display: flex;
    }

    .sending_form {
       display: flex;
       flex-direction: column;
    }

    .sub_h {
        margin-bottom: 20px;
    }

    .modal_h2 {
        font-size: 28px;
        font-weight: bold;
        line-height: 1;
        padding:  0 0 0.5em 0;
    }

    .policy_descr {
        font-size: 14px;
    }

    .loader {
        width:37px;
        height: 37px;
        margin-left: 10px;
        background-image: url("data:image/svg+xml,%3Csvg version='1.1' id='L2' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 100 100' enable-background='new 0 0 100 100' xml:space='preserve'%3E%3Ccircle fill='none' stroke='%23839F60' stroke-width='4' stroke-miterlimit='10' cx='50' cy='50' r='48'/%3E%3Cline fill='none' stroke-linecap='round' stroke='%232A7D5A' stroke-width='4' stroke-miterlimit='10' x1='50' y1='50' x2='85' y2='50.5'%3E%3CanimateTransform attributeName='transform' dur='2s' type='rotate' from='0 50 50' to='360 50 50' repeatCount='indefinite' /%3E%3C/line%3E%3Cline fill='none' stroke-linecap='round' stroke='%23839F60' stroke-width='4' stroke-miterlimit='10' x1='50' y1='50' x2='49.5' y2='74'%3E%3CanimateTransform attributeName='transform' dur='15s' type='rotate' from='0 50 50' to='360 50 50' repeatCount='indefinite' /%3E%3C/line%3E%3C/svg%3E");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .error_list_wrap {
        display: flex;
        flex-direction: column;
    }

    .error_list_wrap .error{
        color: white;
        background-color: crimson;
        border-radius: 9px;
        padding: 5px 15px;
        margin-bottom: 20px;
    }

    .qs_wrap {
        display: flex;
        max-height: 630px;
    }

    .qs_wrap .left img{
        object-fit: contain;
    }

    .qs_wrap .left{
        flex:2;
        border-radius: 15px;
        margin-right: 30px;
        overflow: hidden;
        border: 0.4px solid #d2d1d1;
    }

    .qs_wrap .right{
        flex:1;
    }

    .param_scroll_wrap {
        padding-right: 10px;
    }
    .param_scroll {
        max-height: 200px;
        overflow-y: scroll;
        padding-right: 10px;
    }

    .m_bottom {
        margin-bottom: 30px;
    }

    @media (max-width: 480px){
        .popup {
            padding: 30px;
        }

        .modal_h2 {
            font-size: 42px;
        }
    }

    @media (max-width: 320px){
        .popup {
            padding: 20px;
            min-width: 310px;
        }

        .modal_h2 {
            font-size: 38px;
        }

        .modal_h2 {
            margin-bottom: 0;
        }
    }

</style>
