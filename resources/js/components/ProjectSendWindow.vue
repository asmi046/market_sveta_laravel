<template>
    <div v-show="showModal" @click.self="closeWin()" class="popup_wrapper">
        <div class="popup_c">
            <div @click.prevent="closeWin()" class="popup__close" aria-label="Закрыть модальное окно"></div>
            <h2 class="modal_h2">{{title}}</h2>
            <p class="sub_h">{{subtitle}}</p>
            <form class="sending_form" action="/send_consult" method="POST">
                <input type="hidden" name="_token" :value="_token">
                <input type="text" name="name" v-model="name" placeholder="Имя">
                <input type="tel" name="phone" v-model="phone" v-mask="{mask: '+N (NNN) NNN-NN-NN', model: 'cpf' }" placeholder="Телефон*">
                <input v-if="hesh == 'calcbaMsg'" type="text" name="company" v-model="company" placeholder="Название компании">

                <label for="fileComponent">
                    <div class="icon"></div>
                    <div class="text">{{(fileName == "")?'Загрузить файл...':fileName}}</div>
                    <input @change="onFileLoad" id ="fileComponent" type="file" name="file" >
                </label>

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
            company:"",
            file:null,
            fileName:"",
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

            const config = { 'content-type': 'multipart/form-data' }

            const formData = new FormData()
            formData.append('_token', this._token)
            formData.append('title', this.title)
            formData.append('name', this.name)
            formData.append('company', this.company)
            formData.append('phone', this.phone)
            formData.append('file', this.file)

            this.showLoader = true;
            axios.post(this.rout, formData, config)
            .then((response) => {
                this.showLoader = false
                document.location.href=this.redirect
            })
            .catch( (error) => {
                this.showLoader = false
                this.errorList.push(error.response.data.message)
                console.log(error)
            });
        },

        onFileLoad(e) {
            this.file =  e.target.files[0]
            this.fileName = this.file.name;
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

    label,
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

    label {
        border: 1px solid #dbe0e5;
        min-height: 40px;
        border-radius: 8px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
        cursor: pointer;
        color:#333;
        font-size: 12px;
    }

    label .text{
        margin-bottom: 10px;
    }

    label .icon{
        width:30px;
        height: 30px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
        margin: 10px auto;

	    background-image: url("data:image/svg+xml,%3C%3Fxml version='1.0' encoding='iso-8859-1'%3F%3E%3C!-- Generator: Adobe Illustrator 16.0.0  SVG Export Plug-In . SVG Version: 6.00 Build 0) --%3E%3C!DOCTYPE svg PUBLIC '-//W3C//DTD SVG 1.1//EN' 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'%3E%3Csvg version='1.1' id='Capa_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' width='516.375px' height='516.375px' viewBox='0 0 516.375 516.375' style='enable-background:new 0 0 516.375 516.375%3B' xml:space='preserve'%3E%3Cg%3E%3Cg%3E%3Cpolygon fill='%23333' points='344.25 306 258.188 219.938 172.125 306 187.425 319.388 248.625 258.188 248.625 468.562 267.75 468.562 267.75 258.188 328.95 319.388 '/%3E%3Cpath fill='%23333' d='M457.088 189.337c-9.562-47.812-53.551-84.15-103.275-84.15c-17.213 0-32.513 3.825-45.9 11.475c-22.949-42.075-66.937-68.85-116.662-68.85c-74.587 0-133.875 59.288-133.875 133.875c0 1.913 0 5.737 0 7.65C22.95 204.638 0 237.15 0 277.312c0 53.55 42.075 95.625 95.625 95.625H229.5v-19.125H95.625c-42.075 0-76.5-34.425-76.5-76.5c0-36.337 24.862-66.938 59.288-74.587c-1.913-7.65-1.913-13.388-1.913-21.038c0-63.112 51.638-114.75 114.75-114.75c49.725 0 91.8 32.513 109.013 76.5c15.3-11.475 34.425-19.125 53.55-19.125c45.9 0 82.237 34.425 86.062 78.413c32.513 7.65 57.375 38.25 57.375 74.587c0 42.075-34.425 76.5-76.5 76.5H286.875v19.125H420.75c53.55 0 95.625-42.075 95.625-95.625C516.375 237.15 491.513 202.725 457.088 189.337z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }

    label input[type=file]{
        display: none;
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
