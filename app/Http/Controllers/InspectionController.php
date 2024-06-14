<?php

namespace App\Http\Controllers;

use App\Models\Inspection;
use Illuminate\Http\Request;

class InspectionController extends Controller
{
    public function index(){
        return Inspection::all();
    }
    public function store(Request $request){
        $inspection = Inspection::create($request->all());
        return response()->json($inspection, 201);
    }
    public function show($id){
        return Inspection::findOrFail($id);
    }
    public function update(Request $request, $id){
        $inspection = Inspection::findOrFail($id);
        $inspection->update($request->all());
        return response()->json($inspection, 200);
    }
    public function destroy($id){
        Inspection::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
