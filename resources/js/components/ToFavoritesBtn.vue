<template>
  <a @click.prevent="addToFavorites" href="#" :class="{'active':in_favorites}" class="prod-card__favorites-icon favorites-icon icon icon-ec_icon_lice to_favorites" ></a>
</template>

<script>
import { ref, watch } from 'vue'
import { useStore } from 'vuex'
export default {
    props:{
        sku:String
    },

    setup(props) {

        const store = useStore()

        let in_favorites = ref(false)


        watch(() => store.getters.favoritesCount, function() {
            let inFavoritesElem = store.state.favorites_tovars.find((elem) => { return elem.product_sku === props.sku})
            in_favorites.value = (inFavoritesElem != undefined)

            console.log('FAVORITES+++!!!!!');
        });

        const addToFavorites = () => {
            let tiken = document.querySelector('meta[name="_token"]').content;

            axios.post('/favorites/add', {
                'product_id': props.sku,
                '_token': tiken
            })
            .then((response) => {
                console.log
                store.dispatch('initialFavorites')

            })
            .catch(error => console.log(error));
        }

        return {
            in_favorites,
            addToFavorites,
            sku:props.sku
        }
    }
}
</script>

<style>

</style>
