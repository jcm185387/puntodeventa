<template>
    <!-- The Modal -->
    <div class="modal fade" id="AddProduct" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Nuevo Producto</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form method="POST" v-on:submit.prevent="createProduct">
                    <!-- Modal body -->
                    <div class="modal-body">
                        
                        <div class="form-group">
                            <label for="producto">Nombre del producto:</label>
                            <input type="producto" v-model="producto.ProductName" class="form-control" placeholder="ingresa el nombre del producto" id="producto">
                        </div>
                        <!--<selectcategoria-component></selectcategoria-component>-->

                        <div class="form-group">
                            <label for="sel1">Categoría:</label>
                            <select v-model="selectedValue" class="form-control" id="sel1">
                                <option :selected="true">Choose Province</option>
                                <option v-bind:value="cat" v-for="cat  in categorias" :key="cat.id">{{cat.categoryName}}</option>
                            </select>
                            {{selectedValue}}
                        </div>                
                        <div class="form-group">
                            <label for="foto" >Foto:</label>
                            <input type="file" v-on:change="CargarFoto()" class="form-control-file border">
                        </div>
                        <span v-for ="error in errors" class="text-danger">@{{ error }}</span>
                        
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return{
            producto:
                {
                    ProductName: '',
                    Foto: '' 
                },
            categoria: undefined,
            errors:[],
            categorias:[],
            selectedValue : "Choose Province" // First option will be selected by default
                      
        }
    },    
    created: function() {
        
        this.getcategories();
        this.newProduct();
    },
    methods:{
        getcategories: function(page) {
            axios.get('/categorias').then(res=>{
                this.categorias = res.data;
                //console.log(this.categorias);

            })
        },
        newProduct: function(page) {
            //alert("no mames");
        },      
        SeleccionaCategoria: function(event) {
            console.log(this.selectedValue);
        },
        createProduct: function() {
            console.log(this.producto);
            /*var url = 'tasks';
            axios.post(url, {
                keep: this.newKeep
            }).then(response => {
                this.getKeeps();
                this.newKeep = '';
                this.errors = [];
                $('#create').modal('hide');
                toastr.success('Nueva tarea creada con éxito');
            }).catch(error => {
                this.errors = 'Corrija para poder crear con éxito'
            });*/
        }

    }
}
</script>
