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
      'secre_name' => 'required|string|max:255',
      'secre_matric_number' => 'required|string|max:255',
      'event_id' => 'required|exists:event_proposals,id', // validate event_id
    ]);

    // Create a new secretariat record
    EventSecretariats::create([
      'secre_name' => $request->secre_name,
      'secre_matric_number' => $request->secre_matric_number,
      'event_id' => $request->event_id, // save event_id
    ]);

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Secretariat data saved successfully.');
  }
}
