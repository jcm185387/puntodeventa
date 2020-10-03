<template>
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>           
            <tr v-for="item in usuarios" >
                <th scope="row">{{item.id}}</th>
                <td>{{item.name}}</td>
                <td>{{item.email}}</td>
            </tr>
        </tbody>
    </table>
</template>
<script>
export default {
    data(){
        return{
            usuarios:[],
            loading: true,
        }
    },
    created(){
    axios.get('/usuarios').then(res=>{
        console.log(res.data);
    this.usuarios = res.data;

    })
    }
}
</script>