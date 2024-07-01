<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\IncidentService;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
        $data = $request->all();
        $data['reported_at'] = Carbon::parse($request->input('reported_at'));
        $this->incidentService->createIncident($data);
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
        $data = $request->all();
        $data['reported_at'] = Carbon::parse($request->input('reported_at'));
        $this->incidentService->updateIncident($data, $id);
        return redirect()->route('incidents.index');
    }

    public function destroy($id){
        $this->incidentService->deleteIncident($id);
        return redirect()->route('incidents.index');
    }
}
