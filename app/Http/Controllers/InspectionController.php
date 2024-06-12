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
        $inspection = Inspection::query()->create($request->all());
        return response()->json($inspection, 201);
    }
    public function show($id){
        return Inspection::query()->findOrFail($id);
    }
    public function update(Request $request, $id){
        $inspection = Inspection::query()->findOrFail($id);
        $inspection->update($request->all());
        return response()->json($inspection, 200);
    }
    public function destroy($id){
        Inspection::query()->findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
