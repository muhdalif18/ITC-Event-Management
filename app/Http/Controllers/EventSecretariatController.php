<?php

namespace App\Http\Controllers;

use App\Models\EventSecretariat;
use App\Models\EventSecretariats;
use Illuminate\Http\Request;

class EventSecretariatController extends Controller
{
  public function store(Request $request)
  {
    // Validate the request data
    $request->validate([
      'secre_name.*' => 'required|string|max:255',
      'secre_matric_number.*' => 'required|string|max:255',
      'secre_task.*' => 'required|string|max:255',
      'event_id' => 'required|exists:event_proposals,id', // validate event_id
    ]);

    // Iterate over the inputs and create secretariat records
    $secre_names = $request->secre_name;
    $secre_matric_numbers = $request->secre_matric_number;
    $secre_tasks = $request->secre_task;
    $event_id = $request->event_id;

    for ($i = 0; $i < count($secre_names); $i++) {
      EventSecretariats::create([
        'secre_name' => $secre_names[$i],
        'secre_matric_number' => $secre_matric_numbers[$i],
        'secre_task' => $secre_tasks[$i],
        'event_id' => $event_id,
      ]);
    }

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Secretariat data saved successfully.');
  }
}
