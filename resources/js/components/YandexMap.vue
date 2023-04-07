<template>
  <div ref="mapInComponent" class="block__map" id="map"></div>
</template>

<script>
import YandexMapLoader from "../lib/map.js"
export default {

    mounted: function() {
        const mapClass = new YandexMapLoader(this.$refs.mapInComponent, map_coord, company_name+"<br/>"+adress)
    }
}
</script>

<style>

</style>
