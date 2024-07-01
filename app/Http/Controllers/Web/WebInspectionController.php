<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\InspectionService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WebInspectionController extends Controller
{
    protected $inspectionService;

    public function __construct(InspectionService $inspectionService)
    {
        $this->inspectionService = $inspectionService;
    }

    public function index()
    {
        $inspections = $this->inspectionService->getInspections();
        return view('inspections.index', compact('inspections'));
    }

    public function create()
    {
        return view('inspections.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['date'] = Carbon::parse($request->input('date'));
        $this->inspectionService->createInspection($data);
        return redirect()->route('inspections.index');
    }

    public function show($id)
    {
        $inspection = $this->inspectionService->getInspectionById($id);
        return view('inspections.show', compact('inspection'));
    }

    public function edit($id)
    {
        $inspection = $this->inspectionService->getInspectionById($id);
        return view('inspections.edit', compact('inspection'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['date'] = Carbon::parse($request->input('date'));
        $this->inspectionService->updateInspection($data, $id);
        return redirect()->route('inspections.index');
    }

    public function destroy($id)
    {
        $this->inspectionService->deleteInspection($id);
        return redirect()->route('inspections.index');
    }
}
