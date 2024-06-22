<?php

namespace App\Http\Controllers;

use App\Models\CalendarEvent;
use App\Models\EventSecretariats;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CalendarController extends Controller
{

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
      'tasks' => 'nullable|array', // Ensure tasks is an array
      'tasks.*' => 'nullable|string', // Each task should be a string
      'persons_in_charge' => 'nullable|array', // Ensure persons_in_charge is an array
      'persons_in_charge.*' => 'nullable|string', // Each person in charge should be a string
      'tasks_status' => 'nullable|array', // Add this line
      'tasks_status.*' => 'boolean', // Add this line
      'id' => 'nullable|integer',
    ]);

    // Add tasks and persons_in_charge to the validated data
    $validated['tasks'] = $request->input('tasks', []); // If tasks are not provided, default to an empty array
    $validated['persons_in_charge'] = $request->input('persons_in_charge', []); // If persons_in_charge are not provided, default to an empty array
    $validated['tasks_status'] = $request->input('tasks_status', []); // Add this line

    if ($request->id) {
      $event = CalendarEvent::find($request->id);
      if ($event) {
        $event->update($validated);
      }
    } else {
      CalendarEvent::create($validated);
    }

    return redirect()->route('calendar.get-calendar');
  }

  /* public function saveTaskStatus(Request $request)
  {
    $validated = $request->validate([
      'id' => 'required|integer',
      'tasks_status' => 'required|array',
      'tasks_status.*' => 'boolean',
    ]);

    $event = CalendarEvent::find($validated['id']);
    if ($event) {
      $event->tasks_status = $validated['tasks_status'];
      $event->save();
      return response()->json(['status' => 'success']);
    }
    return response()->json(['status' => 'error'], 404);
  } */
  public function saveTaskStatus(Request $request)
  {
    $validated = $request->validate([
      'id' => 'required|integer',
      'tasks_status' => 'required|array',
      'tasks_status.*' => 'boolean',
    ]);

    $event = CalendarEvent::find($validated['id']);
    if ($event) {
      // Assuming tasks_status is a JSON field in your database
      $event->tasks_status = json_encode($validated['tasks_status']);
      $event->save();
      return response()->json(['status' => 'success']);
    }
    return response()->json(['status' => 'error'], 404);
  }

  public function showEvent($id)
  {
    $event = CalendarEvent::find($id);
    if ($event) {
      // Decode the JSON tasks_status
      $tasksStatus = json_decode($event->tasks_status, true);
      return view('event-modal', ['event' => $event, 'tasksStatus' => $tasksStatus]);
    }
    // Handle event not found
  }




}
