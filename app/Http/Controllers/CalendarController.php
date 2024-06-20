<?php

namespace App\Http\Controllers;

use App\Models\CalendarEvent;
use App\Models\EventSecretariats;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;


class CalendarController extends Controller
{
  /**
   * Display calendar.
   * 
   * 
   */
  public function getCalendar(Request $request): View
  {
    // Retrieve month and year from the request, or use the current date
    $year = $request->query('year', Carbon::now()->year);
    $month = $request->query('month', Carbon::now()->month);

    $date = Carbon::create($year, $month, 1);
    $startOfCalendar = $date->copy()->startOfMonth()->startOfWeek(Carbon::SUNDAY);
    $endOfCalendar = $date->copy()->endOfMonth()->endOfWeek(Carbon::SATURDAY);

    $calendarEvents = CalendarEvent::whereBetween('date', [$startOfCalendar, $endOfCalendar])->get();

    // Retrieve secretariat's events
    $secretariatEvents = EventSecretariats::where('secre_matric_number', $request->user()->matric_number)
      ->with('eventProposal')
      ->get();

    return view('calendar', [
      'user' => $request->user(),
      'date' => $date,
      'time' => $date,
      'startOfCalendar' => $startOfCalendar,
      'endOfCalendar' => $endOfCalendar,
      'calendarEvents' => $calendarEvents,
      'secretariatEvents' => $secretariatEvents,
    ]);
  }

  public function deleteEvent(Request $request)
  {
    $event = CalendarEvent::find($request->id);
    if ($event) {
      $event->delete();
      return response()->json(['status' => 'success']);
    }
    return response()->json(['status' => 'error'], 404);
  }

  public function postCalendarEvent(Request $request)
  {
    $validated = $request->validate([
      'date' => 'required|date',
      'event' => 'required|string|max:255',
      'start_time' => 'required|date_format:H:i',
      'end_time' => 'required|date_format:H:i|after:start_time',
      'id' => 'nullable|integer',
    ]);

    if ($request->id) {
      // Update existing event
      $event = CalendarEvent::find($request->id);
      if ($event) {
        $event->date = $validated['date'];
        $event->event = $validated['event'];
        $event->start_time = $validated['start_time'];
        $event->end_time = $validated['end_time'];
        $event->save();
      }
    } else {
      // Create new event
      CalendarEvent::create($validated);
    }

    return redirect()->route('calendar.get-calendar');
  }


}
