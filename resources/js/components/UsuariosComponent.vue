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
            <tr v-for="(item, index) in usuarios" :key="index" >
                <th scope="row">{{item.id}}</th>
                <td>{{item.name}}</td>
                <td>{{item.email}}</td>
            </tr>
        </tbody>
    </table>
</template>
<script>
export default {
    created(){
    axios.get('/usuarios').then(res=>{
      this.usuarios = res.data;
      console.log(this.usuarios);
    })
  }
}
</script>