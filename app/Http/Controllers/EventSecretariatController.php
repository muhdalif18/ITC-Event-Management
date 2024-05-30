<?php

namespace App\Http\Controllers;

use App\Models\EventSecretariat;
use PhpOffice\PhpWord\IOFactory;
use Illuminate\Http\Request;

class EventSecretariatController extends Controller
{
  public function postEventSecretariat(Request $request)
  {
    $eventSecretariat = new EventSecretariat();

    $this->validate($request, [
      'secre_name' => 'required|string|max:255',
      'secre_matric_number' => 'required|string|max:1000',
      'secre_committee' => 'required|string|max:255',

    ]);

    if ($request->has('id')) {
      // Find the existing event proposal by ID
      $eventSecretariat = EventSecretariat::find($request->id);

      // If an event proposal with the provided ID doesn't exist, create a new one
      if (!$eventSecretariat) {
        $eventSecretariat = new EventSecretariat();
      }
    } else {
      // If no ID is provided in the request, create a new event proposal
      $eventSecretariat = new EventSecretariat();
    }

    // Update the event proposal details
    $eventSecretariat->secre_name = $request->input('secre_name');
    $eventSecretariat->secre_matric_number = $request->input('secre_matric_number');
    $eventSecretariat->secre_committee = $request->input('secre_committee');
    $eventSecretariat->save();

    return redirect()->route('check-review-proposal');
  }
}
