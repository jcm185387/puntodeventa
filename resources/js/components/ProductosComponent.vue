<template>
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre del producto</th>
            <th scope="col">Categoría</th>        
            <th scope="col">Foto</th>    
            </tr>
        </thead>
        <tbody>                         
            <tr v-for="prod in productos">
                <th scope="row">{{prod.id}}</th>
                <td>{{prod.ProductName}}</td>
                <td>{{prod.categoria.categoryName}}</td>
                <td>Imagen{{prod.Picture}}</td>
            </tr>
        </tbody>
    </table>
</template>
<script>
export default {
    data(){
        return{
            productos:[],
            loading: true            
        }
    },
    created(){
    axios.get('/productos').then(res=>{
        this.productos = res.data;
        console.log(this.productos);

    })
    }
}
</script>