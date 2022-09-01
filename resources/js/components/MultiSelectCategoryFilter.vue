<template>
    <div class="page__sidebar-navigation-col spollers-block__item">
        <div @click="showBody = !showBody" class="page__sidebar-navigation-name spollers-block__title" :class="{_active:showBody }" >{{ propertyText }}</div>
        

            <div class="page__sidebar-navigation-body spollers-block__body" :class="{_showed:showBody }">

                <div class="page__sidebar-navigation-body-menu">

                    <input v-model="searchStr" type="text" placeholder="Поиск по списку" class="page__sidebar-navigation-body-menu-search">
                    
                    <div class="page__sidebar-navigation-body-menu-options options">
                        
                        <label v-for="(item, key, index) in values" :key="item" :data-index="index" class="page__sidebar-navigation-body-menu-options-item options__item">
                                <input  type="checkbox" :value="key" :name="propertyName+'[]'" class="page__sidebar-navigation-body-menu-options-item-input options__input" >
                                <span class="page__sidebar-navigation-body-menu-options-item-input-text options__text">
                                <span class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">{{key}}</span>{{item}}</span>
                        </label>
                        
                    </div>
                </div>
            </div>
        
    </div>
</template>

<script>
export default {
    data() {
        return{
            showedList:[],
            showBody:false,
            searchStr:""
        }
    },
    props:['propertyText', 'propertyName', 'values']
}
</script>

<style>

</style>