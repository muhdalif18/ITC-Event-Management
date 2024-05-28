<?php

use App\Http\Controllers\EventProposalController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\YourController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  return view('welcome');
});

Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/submit-event-proposal-form', function () {
  return view('submit-event-proposal-form');
})->middleware(['auth', 'verified'])->name('submit-event-proposal-form');


Route::get('/generate-event-report-form', function () {
  return view('generate-event-report-form');
})->middleware(['auth', 'verified'])->name('generate-event-report-form');


/* Route::get('/calendar', function () {
  return view('calendar');
})->middleware(['auth', 'verified'])->name('calendar'); */

Route::get('/update-profile-form', function () {
  return view('update-profile-form');
})->middleware(['auth', 'verified'])->name('update-profile-form');

Route::get('/submit-manage-event-form', function () {
  return view('submit-manage-event-form');
})->middleware(['auth', 'verified'])->name('submit-manage-event-form');

Route::get('create', 'DocumentController@create');
Route::post('store', 'DocumentController@store');

Route::get('generate-docx', 'HomeController@generateDocx');

/* Route::get('export-to-word', [EventProposalController::class, 'exportToWord']); */


Route::middleware('auth')->group(function () {
  // Event Proposal
  Route::post('/event-proposal', [EventProposalController::class, 'postEventProposal'])->name('event.post-event-proposal');
  Route::get('/event-proposal', [EventProposalController::class, 'getEventProposal'])->name('event.get-event-proposal');
  Route::get('/event-proposal-user', [EventProposalController::class, 'getEventProposalUser'])->name('event.get-event-proposal-user');
  Route::get('/event-proposal/submit/', [EventProposalController::class, 'getSubmitEventProposal'])->name('event.get-submit-event-proposal');
  Route::get('/event-proposal/view/{id}', [EventProposalController::class, 'getViewEventProposal'])->name('event.get-view-event-proposal');
  Route::get('/export-to-word/{id}', [EventProposalController::class, 'exportToWord'])->name('export-to-word');

  // Calendar
  Route::get('/calendar', [CalendarController::class, 'getCalendar'])->name('calendar.get-calendar');
  Route::post('/calendar', [CalendarController::class, 'postCalendarEvent'])->name('calendar.post-calendar-event');

  Route::delete('/calendar/delete-event', [CalendarController::class, 'deleteEvent'])->name('calendar.delete-calendar-event');



  // Profile
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
