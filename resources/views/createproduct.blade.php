<!-- The Modal -->
<div class="modal" id="AddProduct">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Nuevo Producto</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="form-group">
                    <label for="producto">Nombre del producto:</label>
                    <input type="producto" class="form-control" placeholder="ingresa el nombre del producto" id="producto">
                </div>
                <selectcategoria-component></selectcategoria-component>
                <div class="form-group">
                    <label for="foto">Foto:</label>
                    <input type="file" class="form-control-file border">
                </div>
                <span class="text-danger"></span>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
<script>