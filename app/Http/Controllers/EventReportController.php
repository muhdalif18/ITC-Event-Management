<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventProposal;
use App\Models\EventReport;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use Illuminate\Support\Facades\Response;
use Illuminate\View\View;

class EventReportController extends Controller
{

  public function updateEventReportStatus(Request $request, $id)
  {
    $request->validate([
      'status' => 'required|string',
    ]);

    $eventReport = EventReport::findOrFail($id);
    $eventReport->status = $request->input('status');
    $eventReport->save();

    return redirect()->back()->with('success', 'Status updated successfully');
  }

  public function getEventReport(Request $request): View
  {
    $eventReport = EventReport::all();

    return view('admin.check-review-report', [
      'user' => $request->user(),
      'eventReport' => $eventReport
    ]);

  }

  public function getGenerateEventReport(Request $request): View
  {
    return view('generate-event-report-form', [
      'user' => $request->user(),
      'admin' => $request->user(),
    ]);
  }

  public function getViewEventReport(Request $request, int $id): View
  {
    $eventReportData = EventReport::find($id);

    return view('view-event-report-form', [
      'user' => $request->user(),
      /* 'admin' => $request->user(), */
      'eventReportData' => $eventReportData
    ]);
  }
  public function postEventReport(Request $request)
  {
    $eventReport = new EventReport();

    $this->validate($request, [
      'r_purpose' => 'required|string|max:255',
      'r_background' => 'required|string|max:255',
      'r_description_Comment' => 'string|max:255',

      'r_organizer_exco' => 'string|max:255',
      'r_event_director' => 'string|max:255',
    ]);

    if ($request->has('id')) {
      // Find the existing event proposal by ID
      $eventReport = EventReport::find($request->id);

      // If an event proposal with the provided ID doesn't exist, create a new one
      if (!$eventReport) {
        $eventReport = new EventReport();
      }
    } else {
      // If no ID is provided in the request, create a new event proposal
      $eventReport = new EventReport();
    }

    // Update the event proposal details
    $eventReport->r_purpose = $request->input('r_purpose');
    $eventReport->r_background = $request->input('r_background');
    $eventReport->r_description_Comment = $request->input('r_description_Comment');
    $eventReport->r_organizer_exco = $request->input('r_organizer_exco');
    $eventReport->r_event_director = $request->input('r_event_director');
    $eventReport->save();

    return redirect()->route('generate-event-report-form');
  }
}
