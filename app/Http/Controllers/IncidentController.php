<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\IncidentService;

class IncidentController extends Controller
{
    protected $incidentService;

    public function __construct(IncidentService $incidentService){
        $this->incidentService = $incidentService;
    }

    public function index(){
       return response()->json($this->incidentService->getIncidents());
    }

    public function store(Request $request){
        $incident = $this->incidentService->createIncident($request->all());
        return response()->json($incident, 201);
    }

    public function show($id){
        return response()->json($this->incidentService->getIncidentById($id));
    }
    public function update(Request $request, $id){
        $incident = $this->incidentService->updateIncident($request->all(), $id);
        return response()->json($incident, 200);
    }
    public function destroy($id){
       $this->incidentService->deleteIncident($id);
        return response()->json(null, 204);
    }
}
