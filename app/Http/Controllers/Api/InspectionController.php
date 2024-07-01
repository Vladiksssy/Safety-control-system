<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\InspectionService;
use Illuminate\Http\Request;

class InspectionController extends Controller
{
    protected $inspectionService;

    public function __construct(InspectionService $inspectionService){
        $this->inspectionService = $inspectionService;
    }

    public function index(){
        return response()->json($this->inspectionService->getInspections());
    }
    public function store(Request $request){
        $inspection = $this->inspectionService->createInspection($request->all());
        return response()->json($inspection, 201);
    }
    public function show($id){
        return response()->json($this->inspectionService->getInspectionById($id));
    }
    public function update(Request $request, $id){
        $inspection = $this->inspectionService->updateInspection($request->all(), $id);
        return response()->json($inspection, 200);
    }
    public function destroy($id){
        $this->inspectionService->deleteInspection($id);
        return response()->json(null, 204);
    }
}
