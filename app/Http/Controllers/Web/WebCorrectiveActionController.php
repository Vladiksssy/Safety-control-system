<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\CorrectiveActionService;
use App\Services\IncidentService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WebCorrectiveActionController extends Controller
{
    protected $correctiveActionService;
    protected $incidentService;

    public function __construct(CorrectiveActionService $correctiveActionService, IncidentService $incidentService)
    {
        $this->correctiveActionService = $correctiveActionService;
        $this->incidentService = $incidentService;
    }

    public function index()
    {
        $correctiveActions = $this->correctiveActionService->getCorrectiveActions();
        return view('corrective_actions.index', compact('correctiveActions'));
    }

    public function create()
    {
        $incidents = $this->incidentService->getIncidentsForDropdown(); // Fetch incidents for dropdown
        return view('corrective_actions.create', compact('incidents'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['implemented_at'] = Carbon::parse($request->input('implemented_at'));
        $this->correctiveActionService->createCorrectiveAction($data);
        return redirect()->route('corrective_actions.index');
    }

    public function show($id)
    {
        $correctiveAction = $this->correctiveActionService->getCorrectiveActionById($id);
        return view('corrective_actions.show', compact('correctiveAction'));
    }

    public function edit($id)
    {
        $correctiveAction = $this->correctiveActionService->getCorrectiveActionById($id);
        $incidents = $this->incidentService->getIncidentsForDropdown(); // Fetch incidents for dropdown
        return view('corrective_actions.edit', compact('correctiveAction', 'incidents'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['implemented_at'] = Carbon::parse($request->input('implemented_at'));
        $this->correctiveActionService->updateCorrectiveAction($data, $id);
        return redirect()->route('corrective_actions.index');
    }

    public function destroy($id)
    {
        $this->correctiveActionService->deleteCorrectiveAction($id);
        return redirect()->route('corrective_actions.index');
    }
}
