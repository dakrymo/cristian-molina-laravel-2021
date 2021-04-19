<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (session()->has('carrito') == false) {
            return redirect('productos.index');
        } else {

            $productos = session()->get('carrito.productos');
            return view('components/carrito.index', compact('productos'));
        }
    }

    public function indiceProductoEnCarrito($productosActuales, $productoSeleccionado)
    {
        $encontrado = -1;
        foreach ($productosActuales as $index => $producto) {
            if ($producto['producto']->id ==  $productoSeleccionado->id) {
                $encontrado = $index;
                break;
            }
        }

        return $encontrado;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(producto $producto)
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
        $productoSeleccionado = producto::find($request->producto);
        $cantidad = $request->cantidad;

        if ($request->session()->has('carrito') == false) {
            $request->session()->put('carrito', ['productos' => []]);
        }




        //validacion de productos en el carrito

        $productosActuales = $request->session()->get('carrito.productos');
        $productoEncontrado = $this->indiceProductoEnCarrito($productosActuales, $productoSeleccionado);

        if ($productoEncontrado != -1) {
            $productosActuales[$productoEncontrado]['cantidad'] += $cantidad;
            $request->session()->put('carrito.productos', $productosActuales);

            //unset
        } else {
            $request->session()->push('carrito.productos', ['producto' => $productoSeleccionado, 'cantidad' => $cantidad]);

        }

        return redirect()->route('productos.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(producto $producto)
    {
        //
    }
}
