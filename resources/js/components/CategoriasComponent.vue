<template>
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Catgeoría</th>
            <th scope="col">Descripción</th>
            <th scope="col">Foto</th>
            </tr>
        </thead>
        <tbody>                   
            <tr v-for="cat in categorias">
                <th scope="row">{{cat.id}}</th>
                <td>{{cat.categoryName}}</td>
                <td>{{cat.Description}}</td>
                <td>{{cat.Picture}}</td>
            </tr>
        </tbody>
    </table>
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