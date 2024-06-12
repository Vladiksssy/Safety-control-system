<?php

namespace App\Http\Controllers;

use App\Models\CorrectiveAction;
use Illuminate\Http\Request;

class CorrectiveActionController extends Controller
{
    public function index(){
        return CorrectiveAction::all();
    }

    public function store(Request $request){
        $correctiveAction =CorrectiveAction::query()->create($request->all());
        return response()->json($correctiveAction,201);
    }

    public function show($id){
        return CorrectiveAction::query()->findOrFail($id);
    }

    public function update(Request $request, $id){
        $correctiveAction=CorrectiveAction::query()->findOrFail($id);
        $correctiveAction->update($request->all());
        return response()->json($correctiveAction,200);
    }
    public function destroy($id){
        CorrectiveAction::query()->findOrFail($id)->delete();
        return response()->json(null,204);
    }
}
