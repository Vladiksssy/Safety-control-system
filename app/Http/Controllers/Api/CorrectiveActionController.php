<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\CorrectiveActionService;
use Illuminate\Http\Request;

class CorrectiveActionController extends Controller
{

    protected $correctiveActionService;
    public function __construct(CorrectiveActionService $correctiveActionService){
        $this->correctiveActionService = $correctiveActionService;
    }

    public function index(){
        return response()->json($this->correctiveActionService->getCorrectiveActions());
    }

    public function store(Request $request){
        $correctiveAction = $this->correctiveActionService->createCorrectiveAction($request->all());
        return response()->json($correctiveAction,201);
    }

    public function show($id){
        return response()->json($this->correctiveActionService->getCorrectiveActionById($id));
    }

    public function update(Request $request, $id){
        $correctiveAction= $this->correctiveActionService->updateCorrectiveAction($request->all(), $id);
        return response()->json($correctiveAction,200);
    }
    public function destroy($id){
        $this->correctiveActionService->deleteCorrectiveAction($id);
        return response()->json(null,204);
    }
}
