<template>
    <a @click.prevent="openWin" href="#" class="location-block__link location-block__link_01 _popup-link">{{curentCity}}</a>

    <div  @click.self="cloaseWin()" class="popup popup_city" :class="[showWin ? 'active' : '']">
        <div class="popup__content">
            <div  class="popup__body" id="city_select">
                <div @click.prevent="cloaseWin()" class="popup__close" aria-label="Закрыть модальное окно"></div>
                <h2>Выберите свой город</h2>
                
                <div class="cityselectWrapper">
                    <input  v-model="searchStr" type="text" placeholder="Введите название города для поиска">
                    
                    <div class="all_city_list_wrapper">
                        <ul class="all_city_list">
                            <li v-for ="(item) in filtredList" :key="item">
                                <a href="#" @click.prevent="selectCity(item)">{{item}}</a>
                            </li>
                        </ul>
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
            showWin:false,
            curentCity:"",
            searchStr:"",
            filtredList:[],
            allCity: [
                "Москва",
                "Санкт-Петербург",
                "Альметьевск",
                "Армавир",
                "Архангельск",
                "Астана: Казахстан",
                "Астрахань",
                "Балаково",
                "Барнаул",
                "Белгород",
                "Благовещенск",
                "Брянск",
                "Великий Новгород",
                "Владивосток",
                "Владимир",
                "Волгоград",
                "Вологда",
                "Воронеж",
                "Екатеринбург",
                "Иваново",
                "Ижевск",
                "Иркутск",
                "Йошкар-Ола",
                "Казань",
                "Калининград",
                "Калуга",
                "Кемерово",
                "Киров",
                "Кострома",
                "Краснодар",
                "Красноярск",
                "Курган",
                "Курск",
                "Липецк",
                "Магнитогорск",
                "Миасс",
                "Мурманск",
                "Набережные Челны",
                "Нальчик",
                "Нижневартовск",
                "Нижний Новгород",
                "Нижний Тагил",
                "Новокузнецк",
                "Новороссийск",
                "Новосибирск",
                "Ноябрьск",
                "Омск",
                "Орел",
                "Оренбург",
                "Орск",
                "Пенза",
                "Пермь",
                "Петрозаводск",
                "Псков",
                "Пятигорск",
                "остов-на-Дону",
                "Рыбинск",
                "Рязань",
                "Самара",
                "Саранск",
                "Саратов",
                "Симферополь",
                "Смоленск",
                "Сочи",
                "Ставрополь",
                "Старый Оскол",
                "Стерлитамак",
                "Сургут",
                "Сыктывкар",
                "Таганрог",
                "Тамбов",
                "Тверь",
                "Тольятти",
                "Томск",
                "Тула",
                "Тюмень",
                "Улан-Удэ",
                "Ульяновск",
                "Уссурийск",
                "Уфа",
                "Хабаровск",
                "Чебоксары",
                "Челябинск",
                "Череповец",
                "Чита",
                "Энгельс",
                "Ярославль",
            ]
        }
    },

    mounted: function() {
        this.filtredList = this.allCity
        
        this.curentCity = (localStorage.getItem("city") != undefined)?localStorage.getItem("city"):"Москва" 
    },

    watch: {
        searchStr(newVal) {
            this.filtredList = []
            for (let k = 0; k<this.allCity.length; k++) {
                if (this.allCity[k].indexOf(newVal) >= 0) 
                    this.filtredList.push(this.allCity[k]); 
            }
        }
    },
    methods:{
        cloaseWin() {
            this.showWin = false
        },
        openWin() {
            this.showWin = true
            console.log("open")
        },
        selectCity(item) {
            localStorage.setItem("city", item)
            this.curentCity = item
            this.cloaseWin()
        }
    }
}
</script>

<style>
    .cityselectWrapper input{
        width:100%;
    }

    .all_city_list_wrapper {
        padding: 14px 18px;
        border: 1px solid #dbe0e5;
        margin-top: 20px;
        border-radius: 8px;
        min-height:330px;
    }

    .all_city_list {
        max-height: 300px;
        overflow: auto;
        display: inline-block!important;
        width: 100%;
        height: auto!important;
    }

    .all_city_list li{ 
        padding: 5px 0!important;
    }

    .all_city_list li a{
        color: black !important;;
    } 
    .all_city_list li a:hover{
        color: #E13510!important;
        border-bottom: 1px dotted #E13510!important;
    }
</style>