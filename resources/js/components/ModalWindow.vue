<template>
    <div v-show="showModal" @click.self="closeWin()" class="popup_wrapper">
        <div class="popup_c">
            <div @click.prevent="closeWin()" class="popup__close" aria-label="Закрыть модальное окно"></div>
            <h2 class="modal_h2">{{title}}</h2>
            <p class="sub_h">{{subtitle}}</p>
            <form class="sending_form" action="/send_consult" method="POST">
                <input type="hidden" name="_token" :value="_token">
                <input  type="text" name="tel" v-mask="{mask: '+N (NNN) NNN-NN-NN', model: 'cpf' }" v-model="phone" placeholder="Телефон*">
                <div class="error_list_wrap">
                    <div v-for="(item, index) in errorList" :key="index" class="error">{{item}}</div>
                </div>
                <p class="policy_descr">Заполняя данную форму и отправляя заявку вы соглашаетесь с <a href="/policy">политикой конфиденциальности</a></p>
                <div class="control_wrap">
                    <button class="btn" @click.prevent="sendMsg()">Отправить</button> <div v-show="showLoader" class="loader"></div>
                </div>

            </form>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            name:"",
            phone:"",
            showModal:false,
            showLoader:false,
            errorList:[],
            _token: document.querySelector('meta[name="_token"]').content,
        }
    },

    props: ['rout', 'redirect', 'hesh', 'title', 'subtitle'],

    methods:{
        closeWin() {
            this.showModal = false
            history.pushState('', document.title, window.location.pathname+window.location.search)
        },

        openWin() {
            if (location.hash === '#'+this.hesh) {
                this.showModal = true
            }
        },

        sendMsg() {

            this.errorList = [];this.errorList

            if (this.phone == "")
                this.errorList.push("Поле 'Телефон' не заполнено");

            if (this.errorList.length != 0 ) return

            this.showLoader = true;
            axios.post(this.rout, {
                _token: this._token,
                phone: this.phone,

            })
            .then((response) => {
                this.showLoader = false
                document.location.href=this.redirect
            })
            .catch( (error) => {
                this.showLoader = false
                this.errorList.push(error.response.data.message)
                console.log(error)
            });
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
    }

    .popup_c {
        width:50%;
        max-width: 600px;
        min-width: 320px;
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
        font-size: 48px;
        font-weight: bold;
        line-height: 1;
        padding:  0 0 1em 0;
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
