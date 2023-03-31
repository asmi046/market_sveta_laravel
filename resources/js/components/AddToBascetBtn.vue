<template>
    <a @click="addToBascet" href="#" :class="{disabled:((sku == undefined)||(sku == ''))}" class="w_full btn_pd btn ">

        <span v-if="countInBscet == 0" v-show="!loaderShow" class="nadp"><slot></slot> - {{ sku }}</span>
        <span v-else v-show="!loaderShow" class="nadp">В корзине: {{ countInBscet }} - {{ sku }}</span>
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
    props:{
        sku: String
    },

    methods: {

        getTovatInfo() {

            this.loaderShow = true
            axios.get("/bascet/has?sku="+this.sku, {
                _token: this._token,
            })
            .then((response) => {
                this.loaderShow = false
                this.countInBscet = response.data.count
                console.log(response)
            })
            .catch( error => console.log(error));
        },

        watch: {
            sku: function() {
                console.log("!!!!!")
                // this.getTovatInfo()
            },
            deep: true
        },

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
        this.getTovatInfo();
    },


}
</script>

<style>

</style>
