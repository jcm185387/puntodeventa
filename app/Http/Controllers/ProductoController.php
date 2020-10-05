<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            //return Producto::all();
            $productos = Producto::with('categoria')->get();    
            return response()->json($productos,200);
        }else{
            return view('productos');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $producto = new Nota();
        $producto->nombre = $request->ProductName;
        $producto->category_id = $request->category_id ;
        $producto->UnitPriceSupplier = $request->UnitPriceSupplier;
        $producto->UnitPriceSale = $request->UnitPriceSale;
        $producto->UnitsInStock = $request->UnitsInStock;
        $producto->Picture = $request->Picture;
        $producto->save();
    
        return $producto;        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $producto = Producto::find($id);
        $producto->ProductName = $request->ProductName;
        $producto->category_id  = $request->category_id;
        $producto->UnitPriceSupplier  = $request->UnitPriceSupplier;
        $producto->UnitPriceSale	  = $request->UnitPriceSale;
        $producto->UnitsInStock  = $request->UnitsInStock;
        $producto->Picture  = $request->Picture;
        $producto->save();
        return $producto;        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $producto = Producto::find($id);
        $producto->delete();
    }
}
