<template>
  <div style = "display:none" class = "flter_pods" id = "flter_pods" >
		
		<div class = "loader_white"></div>
			
		<div class = "loader_info">
			<p  class = "pds_naideno" id = "pds_naideno">
                Найдено<br>
                {{elementCount}}
            </p>
			<button type = "submit" class = "pds_submit">Показать</button>	
		</div>
	</div>
</template>

<script>
export default {
    data() {
        return{
            loadet:true
        }
    },

    props: ['domElement', 'elementCount']
}
</script>

<style>

</style>