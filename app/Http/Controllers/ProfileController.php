<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use App\Models\EventProposal;
use PhpOffice\PhpWord\IOFactory;
use Illuminate\Support\Facades\Response;

class ProfileController extends Controller
{
  /**
   * Display the user's profile form.
   */
  public function edit(Request $request): View
  {
    return view('profile.edit', [
      'user' => $request->user(),
    ]);
  }

  /**example
   * Update the user's profile information.
   */
  public function update(ProfileUpdateRequest $request): RedirectResponse
  {
    $request->user()->fill($request->validated());

    if ($request->user()->isDirty('email')) {
      $request->user()->email_verified_at = null;
    }

    $request->user()->save();

    return Redirect::route('profile.edit')->with('status', 'profile-updated');
  }

  //Change password

  // ProfileController.php

  public function changePassword(Request $request)
  {
    $request->validate([
      'current-password' => 'required',
      'new-password' => 'required|min:6',
      'confirm-password' => 'required|same:new-password',
    ]);

    $user = Auth::user();

    // Check if current password matches
    if (!Hash::check($request->input('current-password'), $user->password)) {
      return back()->withErrors(['current-password' => 'Current password is incorrect']);
    }

    // Update the new password
    $user->password = Hash::make($request->input('new-password'));
    $user->save();

    return back()->with('success', 'Password changed successfully');
  }



  /**
   * Delete the user's account.
   */
  public function destroy(Request $request): RedirectResponse
  {
    $request->validateWithBag('userDeletion', [
      'password' => ['required', 'current_password'],
    ]);

    $user = $request->user();

    Auth::logout();

    $user->delete();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return Redirect::to('/');
  }
}
