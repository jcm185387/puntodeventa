<template>
    <div class="form-group">
    <label for="sel1">Categoría:</label>
    <select class="form-control" id="sel1">
        <option  v-for="cat in categorias">{{cat.categoryName}}</option>
    </select>
    </div>
</template>
<script>
export default {
    data(){
        return{
            categorias:[],
            loading: true
        }
    },
    created(){
    axios.get('/categorias').then(res=>{
        this.categorias = res.data;
        console.log(this.categorias);

    })
    }
}
</script>