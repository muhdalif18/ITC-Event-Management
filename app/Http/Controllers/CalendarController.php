<?php

namespace App\Http\Controllers;

use App\Models\CalendarEvent;
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

    $calendarEvent = CalendarEvent::whereBetween('date', [$startOfCalendar, $endOfCalendar])->get();

    return view('calendar', [
      'user' => $request->user(),
      'date' => $date,
      'time' => $date,
      'startOfCalendar' => $startOfCalendar,
      'endOfCalendar' => $endOfCalendar,
      'calendarEvent' => $calendarEvent,
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
      'time' => 'required|string|max:255',
      'id' => 'nullable|integer',
    ]);

    if ($request->id) {
      // Update existing event
      $event = CalendarEvent::find($request->id);
      if ($event) {
        $event->date = $validated['date'];
        $event->event = $validated['event'];
        $event->time = $validated['time'];
        $event->save();
      }
    } else {
      // Create new event
      CalendarEvent::create($validated);
    }

    return redirect()->route('calendar.get-calendar');
  }


}
