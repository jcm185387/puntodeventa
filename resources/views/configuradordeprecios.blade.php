@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Proyectos</h5>

                <p class="card-text">
                    <span>En esta sección podremos configurar los precios de los productos registrados</span>                    
                </p>
                <div class="col-12">
                    <div class="pull-right" style="float: right;">
                    <strong>Nuevo producto</strong>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddProduct"><strong>+</strong></button>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <div class="row justify-content-center" style="margin-top : 5%">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Productos</div>
                <div class="card-body">    
                    <productos-component></productos-component>                    
                </div>
            </div>
        </div>                              
    </div>
</div>
@include('createproduct');
@endsection