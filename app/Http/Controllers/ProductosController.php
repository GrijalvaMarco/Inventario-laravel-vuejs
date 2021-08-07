<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
Use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{

    public function index()
    {
        return Producto::all();
    }

    public function show(Producto $producto)
    {
        return $producto;
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string',
            'sku' => 'required|string',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric',
            'cantidad' => 'required|integer',
            'estado' => 'required|boolean',
            'categoria_id' => 'required|integer'
        ]);

        if ($validator->fails()) {
            $code = 400;
            $status = 'error';
            $response = $validator->messages();
        }else{
            $code = 200;
            $status = 'success';
            $response = Producto::create($request->all());
        }

        return response()->json([
            'status' => $status,
            'data' => $response
          ],$code);
    }

    public function update(Request $request, Producto $producto)
    {
        $producto->update($request->all());

        return response()->json($producto, 200);
    }

    public function delete(Producto $producto)
    {
        $producto->delete();

        return response()->json(null, 204);
    }
}
