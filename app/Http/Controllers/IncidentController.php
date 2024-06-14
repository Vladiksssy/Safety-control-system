<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incident;

class IncidentController extends Controller
{
    public function index(){
        return Incident::all();
    }

    public function store(Request $request){
        $incident = Incident::create($request->all());
        return response()->json($incident, 201);
    }

    public function show($id){
        $incident = Incident::findOrFail($id);
    }
    public function update(Request $request, $id){
        $incident = Incident::findOrFail($id);
        $incident->update($request->all());
        return response()->json($incident, 200);
    }
    public function destroy($id){
        $incident = Incident::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
