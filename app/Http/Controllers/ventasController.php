<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator;
use App\Ventas;
class ventasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validator = Validator::make($request->all(), [
            'cli_id' => 'required',
            'vta_mes' => 'required', 
            'vta_anio' => 'required',
        ]);
        $input = $request->all();
        $errors = $validator->errors();
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => 'Campo Vacío', 'error' => $errors->first() ]);
        }else {
            try {
                $venta = Ventas::create($input);
            return response()->json(['success' => true, 'message' => 'Venta Ingresada Correctamente', 'data' => $venta]);
            } catch (Exception $e) {
            return response()->json(['success'=> false, 'message'=> 'Error al Ingresar Venta', 'data'=>$e]);
            }
        }
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
    }
}
