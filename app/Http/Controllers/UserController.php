<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\MonthlyUsersChart;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function getDashbaord(Request $request, MonthlyUsersChart $chart): View
  {
    return view('dashboard', [
      'user' => $request->user(),
      'chart' => $chart->build(),
    ]);
  }

  public function uploadProfileImage(Request $request)
  {
    $request->validate([
      'profile_image' => 'required|image|mimes:jpg,jpeg,png,gif|max:800',
    ]);

    $user = Auth::user();
    if ($user->profile_image) {
      Storage::delete('public/' . $user->profile_image);
    }

    $path = $request->file('profile_image')->store('profile_images', 'public');
    $user->profile_image = $path;
    $user->save();

    return back()->with('success', 'Profile picture updated successfully.');
  }
  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
