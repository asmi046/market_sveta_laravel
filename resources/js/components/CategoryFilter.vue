<template>
    <aside class="page__sidebar">   
        <div class="page__sidebar-body">
            <div wire:loading.remove  class="page__sidebar-navigation">
                <div class="spollers-block" data-spollers data-one-spoller>
        
                    <div class="page__sidebar-navigation-col">
                        <div class="page__sidebar-navigation-block-name d-flex">
                                <div class="page__sidebar-navigation-name">Категории</div>
                        </div>
                        
                        <ul class="page__sidebar-navigation-menu sidebar-navigation-catMenu">
                                    <li v-for="(item, index) in mainCatList" :key="item.id" :data-index="index"  class="sidebar-navigation-catMenu-item">
                                        <a :href="homeRout+'/category/'+item.slug" class="sidebar-navigation-catMenu-item-link">{{item.name}}</a>
                                    </li>    
                        </ul>
                    </div>


                    <form method="GET" :action="catUrl">   
                        <price-select-category-filter></price-select-category-filter>

                        <multy-select-category-filter property-name="style" property-text="Стиль"></multy-select-category-filter>
                        
                        <div class="">
                            <button type="submit" class="btn">Выбрать</button>
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
export default {

    data() {
        return {
            mainCatList:JSON.parse(this.catList)
        }
    },

    components: {
        PriceSelectCategoryFilter,
        MultySelectCategoryFilter
    },

    props:['homeRout', 'catList', 'catUrl', 'catName'],

    mounted: function() {
    }
}
</script>

<style>

</style>