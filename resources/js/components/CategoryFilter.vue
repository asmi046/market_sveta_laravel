<template>
    <div @click.prevent="showFilterBlk = !showFilterBlk" class = "filter_mobile_panel">
        <span class = "icon icon-ec_icon_tune_gr"></span> Фильтры
    </div>

    <aside v-show ="showFilterBlk" id="cat_filter" class="page__sidebar">
        <div class="mobile_filter_close_panel">
                <span>Фильтры</span>
                <div @click.prevent="showFilterBlk = !showFilterBlk" class="icon icon-ec_icon_abort"></div>
        </div>

        <div v-show="filterList.length == 0" class="filter_loading">
            Фильтр загружается...
        </div>


        <div v-show="filterList.length != 0" class="page__sidebar-body">


            <div class="page__sidebar-navigation">
                <div class="spollers-block" data-spollers data-one-spoller>

                    <div v-show="mainCatList.length !=0" class="page__sidebar-navigation-col">
                        <div class="page__sidebar-navigation-block-name d-flex">
                                <div class="page__sidebar-navigation-name">Категории</div>
                        </div>

                        <ul class="page__sidebar-navigation-menu sidebar-navigation-catMenu">
                                    <li v-for="(item, index) in mainCatList" :key="item.id" :data-index="index"  class="sidebar-navigation-catMenu-item">
                                        <a :href="homeRout+'/category/'+item.slug" class="sidebar-navigation-catMenu-item-link">{{item.name}}</a>
                                    </li>
                        </ul>
                    </div>


                    <form method="GET" :action="catUrl" class = "page__sidebar_form" id="cat_filter_form">
                        <pre-search-informer :dom-element="clicedElement" :pre-load="preLoad" :element-count="preSerchCount"></pre-search-informer>

                        <price-select-category-filter @chenge-price="chengePrice"></price-select-category-filter>

                        <multy-select-category-filter @chenge-list="chengeList" v-show="showMode=='place'" property-name="osvtype" property-text="Тип светильника" :values="filterList.osvtype"></multy-select-category-filter>
                        <multy-select-category-filter @chenge-list="chengeList" v-show="filterList.length!= 0 && filterList.brand.length != 0" property-name="brand" property-text="Бренд" :values="filterList.brand"></multy-select-category-filter>
                        <multy-select-category-filter @chenge-list="chengeList" v-show="filterList.length!= 0 && filterList.form.length != 0" property-name="form" property-text="Форма" :values="filterList.form"></multy-select-category-filter>
                        <multy-select-category-filter @chenge-list="chengeList" v-show="filterList.length!= 0 && filterList.style.length != 0" property-name="style" property-text="Стиль" :values="filterList.style"></multy-select-category-filter>
                        <multy-select-category-filter @chenge-list="chengeList" v-show="filterList.length!= 0 && filterList.mesto.length != 0" property-name="mesto" property-text="Место использования" :values="filterList.mesto"></multy-select-category-filter>
                        <multy-select-category-filter @chenge-list="chengeList" v-show="filterList.length!= 0 && filterList.state.length != 0" property-name="state" property-text="Страна" :values="filterList.state"></multy-select-category-filter>
                        <multy-select-category-filter @chenge-list="chengeList" v-show="filterList.length!= 0 && filterList.arm_color.length != 0" property-name="arm_color" property-text="Цвет арматуры" :values="filterList.arm_color"></multy-select-category-filter>
                        <multy-select-category-filter @chenge-list="chengeList" v-show="filterList.length!= 0 && filterList.plaf_color.length != 0" property-name="plaf_color" property-text="Цвет плафона" :values="filterList.plaf_color"></multy-select-category-filter>
                        <multy-select-category-filter @chenge-list="chengeList" v-show="filterList.length!= 0 && filterList.arm_material.length != 0" property-name="arm_material" property-text="Материал арматуры" :values="filterList.arm_material"></multy-select-category-filter>
                        <multy-select-category-filter @chenge-list="chengeList" v-show="filterList.length!= 0 && filterList.plaf_material.length != 0" property-name="plaf_material" property-text="Материал плафона" :values="filterList.plaf_material"></multy-select-category-filter>

                        <div class="filter_controll">
                            <button class="btn full_width" type="submit" >Выбрать
                                <span v-show="preLoad == false" class="mobileCounter">&nbsp;({{preSerchCount}})</span>
                                <span v-show="preLoad  == true" class="mobileLoader"></span>
                            </button>
                            <button class="btn empty_btn full_width" @click.prevent="clearFilter">Сбросить фильтр</button>
                            <!-- <button class="btn empty_btn full_width" @click.prevent="test">Test</button> -->
                        </div>
                    </form>

                </div>
            </div>
        </div>
  </aside>
</template>

<script>
import PriceSelectCategoryFilter from '../components/PriceSelectCategoryFilter.vue'
import MultySelectCategoryFilter from '../components/MultiSelectCategoryFilter.vue'
import PreSearchInformer from '../components/PreSearchInformer.vue'

export default {

    data() {
        return {
            showFilterBlk:true,
            preLoad:false,
            filterList:[],
            filterListEmpty:[],
            selectedParam:{},
            mainCatList:(this.catList != '')?JSON.parse(this.catList):[],
            clicedElement:{},
            preSerchCount:0
        }
    },

    components: {
        PriceSelectCategoryFilter,
        MultySelectCategoryFilter,
        PreSearchInformer
    },

    props:['homeRout', 'catList', 'catUrl', 'catId', 'showMode'],

    mounted: function() {

        this.updateWidth()
        window.addEventListener('resize', this.updateWidth);

        this.preLoad = true

        let prefix_api_url = document.location.protocol+"//"+document.location.host
        axios.get(prefix_api_url+'/api/v1/get_category_filter/'+this.catId+'/'+this.showMode, {
            params: {
                    filter:this.selectedParam
            }
        })
        .then((response) => {
            this.filterList = response.data.incount
            this.filterListEmpty = response.data.empty
            this.preSerchCount = response.data.all_length
            this.preLoad = false
        })
        .catch(error => console.log(error));
    },

    methods: {
        updateWidth() {
            if (window.innerWidth <= 768)
                this.showFilterBlk = false
            else this.showFilterBlk = true
        },
        get_pre_filter() {
            let prefix_api_url = document.location.protocol+"//"+document.location.host


            this.preLoad = true

            axios.get(prefix_api_url+'/api/v1/get_sorted_category_filter/'+this.catId+'/'+this.showMode, {
                params: {
                    filter_empty:this.filterListEmpty,
                    filter:this.selectedParam
                }
            })
            .then((response) => {
                this.preSerchCount=response.data.products.length

                    if (this.clicedElement.dataset.razdel != "osvtype")
                        this.filterList.osvtype = response.data.filter.osvtype

                    if (this.clicedElement.dataset.razdel != "style")
                        this.filterList.style = response.data.filter.style

                    if (this.clicedElement.dataset.razdel != "brand")
                        this.filterList.brand = response.data.filter.brand

                    if (this.clicedElement.dataset.razdel != "state")
                        this.filterList.state = response.data.filter.state

                    if (this.clicedElement.dataset.razdel != "form")
                        this.filterList.form = response.data.filter.form

                    if (this.clicedElement.dataset.razdel != "mesto")
                        this.filterList.mesto = response.data.filter.mesto

                    if (this.clicedElement.dataset.razdel != "arm_color")
                        this.filterList.arm_color = response.data.filter.arm_color

                    if (this.clicedElement.dataset.razdel != "plaf_color")
                        this.filterList.plaf_color = response.data.filter.plaf_color

                    if (this.clicedElement.dataset.razdel != "arm_material")
                        this.filterList.arm_material = response.data.filter.arm_material

                    if (this.clicedElement.dataset.razdel != "plaf_material")
                        this.filterList.plaf_material = response.data.filter.plaf_material

                    this.preLoad = false
            })
            .catch(error => console.log(error));
            },

        clearFilter: () => {
            window.location.href = window.location.protocol+"//"+window.location.host+window.location.pathname
        },

        chengeList(element, list, item) {
            this.selectedParam[item] = list

            if (element != null)
                {
                    this.get_pre_filter()
                    this.clicedElement = element
                }
        },

        chengePrice(element, min, max, sale) {
            this.selectedParam["minprice"] = min
            this.selectedParam["maxprice"] = max
            this.selectedParam["insales"] = (sale)?"on":""
            this.get_pre_filter()
            this.clicedElement = element
        }

    }
}
</script>

<style>

.filter_mobile_panel {
    display: none;
    width:100%;
    text-align: center;
    margin: 20px 0;
    box-shadow: 0 0 10px rgb(0 0 0 / 10%);
    border-radius: 11px;
    padding: 10px ;
}

.mobile_filter_close_panel {
    width:100%;
    position: fixed;
    text-align: center;
    padding: 10px 0;
    display: none;
    border-bottom: 1px solid lightgray;
    z-index: 610000;
    background-color: white;
    top:0;
    left:0;
}

.mobile_filter_close_panel .icon{
    position: absolute;
    right: 10px;
    top: calc(50% - 6px);
}

.mobile_filter_close_panel .icon:hover{
    color: #E13510;
}



@media (max-width: 768px) {

    .mobile_filter_close_panel {
        display: block;
    }

    .filter_mobile_panel {
        display: block;
    }

    .page__sidebar-body {
        width: 100%;
        position: fixed;
        top: 35px;
        left: 0;
        height: calc(100% - 169px);
        background-color: white;
        z-index: 600000;
        padding: 2% 20px;
        overflow: auto;
    }

    .filter_controll {
        width: 100%;
        position: fixed;
        left: 0;
        top:calc(100vh - 135px);
        padding: 25px 25px 0 25px;
        border-top: 1px solid lightgray;
        background-color: white;
    }

    .mobileCounter {
        margin-left: 10px;
    }

    .mobileLoader {
        width:20px;
        height: 20px;
        background-position: center;
        margin-left: 10px;
        background-repeat: no-repeat;
        background-image: url(../../../public/img/icons/loader_white.svg);
    }

}

</style>
