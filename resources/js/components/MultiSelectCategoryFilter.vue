<template>
    <div class="page__sidebar-navigation-col spollers-block__item">
        <div @click="showBody = !showBody" class="page__sidebar-navigation-name spollers-block__title" :class="{_active:showBody }" >{{ propertyText }}</div>
        

            <div class="page__sidebar-navigation-body spollers-block__body" :class="{_showed:showBody }">

                <div class="page__sidebar-navigation-body-menu">

                    <input v-model="searchStr" type="text" placeholder="Поиск по списку" class="page__sidebar-navigation-body-menu-search">
                    
                    <div class="page__sidebar-navigation-body-menu-options options">
                        
                        
                    </div>
                </div>
            </div>
        
    </div>
</template>

<script>
export default {
    data() {
        return{
            showBody:false,
            searchStr:""
        }
    },
    props:['propertyText', 'propertyName']
}
</script>

<style>

</style>