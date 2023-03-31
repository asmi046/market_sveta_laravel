<template>
    <a @click="addToBascet" href="#" :class="{disabled:((sku == undefined)||(sku == ''))}" class="w_full btn_pd btn ">

        <span v-if="countInBscet == 0" v-show="!loaderShow" class="nadp"><slot></slot></span>
        <span v-else v-show="!loaderShow" class="nadp">В корзине: {{ countInBscet }}</span>
        <span v-show="loaderShow" :class="{shoved:loaderShow}" class="btnLoader"></span>
    </a>
</template>

<script>
export default {
    data() {
        return{
            loaderShow:false,
            countInBscet:0,

            _token: document.querySelector('meta[name="_token"]').content,
        }
    },
    methods: {
        addToBascet() {
            axios.post("/bascet/add", {
                _token: this._token,
                product_id:this.sku
            })
            .then((response) => {
                this.loaderShow = false
                this.countInBscet++
                console.log(response)
            })
            .catch( error => console.log(error));
        }
    },

    mounted() {
        this.loaderShow = true
            axios.get("/bascet/has", {
                _token: this._token,
                sku:this.sku
            })
            .then((response) => {
                this.loaderShow = false
                this.countInBscet = response.data.count
                console.log(response)
            })
            .catch( error => console.log(error));
    },

    props:['sku']
}
</script>

<style>

</style>
