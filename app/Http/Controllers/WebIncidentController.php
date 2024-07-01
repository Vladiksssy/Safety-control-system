<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\IncidentService;
class WebIncidentController extends Controller
{
    protected $incidentService;

    public function __construct(IncidentService $incidentService){
        $this->incidentService = $incidentService;
    }

    public function index(){
        $incidents = $this->incidentService->getIncidents();
        return view('incidents.index', compact('incidents'));
    }

    public function create(){
        return view('incidents.create');
    }

    public function store(Request $request){
        $this->incidentService->createIncident($request->all());
        return redirect()->route('incidents.index');
    }

    public function show($id){
        $incident = $this->incidentService->getIncidentById($id);
        return view('incidents.show', compact('incident'));
    }

    public function edit($id){
        $incident = $this->incidentService->getIncidentById($id);
        return view('incidents.edit', compact('incident'));
    }

    public function update(Request $request, $id){
        $this->incidentService->updateIncident($request->all(), $id);
        return redirect()->route('incidents.index');
    }

    public function destroy($id){
        $this->incidentService->deleteIncident($id);
        return redirect()->route('incidents.index');
    }
}
