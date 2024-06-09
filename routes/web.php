<?php

use App\Http\Controllers\EventProposalController;
use App\Http\Controllers\EventReportController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SecretariatController;

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\YourController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

use App\Http\Controllers\EventSecretariatController;

// Other routes


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


Route::post('/profile/change-password', [ProfileController::class, 'changePassword'])->name('profile.change-password');


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
  $request->fulfill();

  return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
  $request->user()->sendEmailVerificationNotification();

  return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/profile', function () {
  // Only verified users may access this route...
})->middleware(['auth', 'verified']);



/* Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */

Route::get('/submit-event-proposal-form', function () {
  return view('submit-event-proposal-form');
})->middleware(['auth', 'verified'])->name('submit-event-proposal-form');

Route::get('/event-proposal-overview', function () {
  return view('event-proposal-overview');
})->middleware(['auth', 'verified'])->name('event-proposal-overview');

Route::get('/event-report-overview', function () {
  return view('event-report-overview');
})->middleware(['auth', 'verified'])->name('event-report-overview');

Route::get('/generate-event-report-form', function () {
  return view('generate-event-report-form');
})->middleware(['auth', 'verified'])->name('generate-event-report-form');

Route::get('/proposal', function () {
  return view('proposal');
})->middleware(['auth', 'verified'])->name('proposal');

Route::get('/report', function () {
  return view('report');
})->middleware(['auth', 'verified'])->name('report');
/* Route::get('/calendar', function () {
  return view('calendar');
})->middleware(['auth', 'verified'])->name('calendar'); */

Route::get('/update-profile-form', function () {
  return view('update-profile-form');
})->middleware(['auth', 'verified'])->name('update-profile-form');

Route::get('/submit-manage-event-form', function () {
  return view('submit-manage-event-form');
})->middleware(['auth', 'verified'])->name('submit-manage-event-form');

Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::get('/profile', [ProfileController::class, 'edit'])->middleware(['auth', 'verified'])->name('profile.edit');




Route::get('create', 'DocumentController@create');
Route::post('store', 'DocumentController@store');

Route::get('generate-docx', 'HomeController@generateDocx');

/* Route::get('export-to-word', [EventProposalController::class, 'exportToWord']); */

Route::middleware('auth')->group(function () {
  /*  Route::get('/dashboard', [UserController::class, 'getDashbaord'])->name('dashboard'); */

  // Event Proposal
  Route::post('/event-proposal', [EventProposalController::class, 'postEventProposal'])->name('event.post-event-proposal');
  Route::get('/event-proposal', [EventProposalController::class, 'getEventProposal'])->name('event.get-event-proposal');
  Route::get('/event-proposal-user', [EventProposalController::class, 'getEventProposalUser'])->name('event.get-event-proposal-user');
  Route::get('/event-proposal/submit/', [EventProposalController::class, 'getSubmitEventProposal'])->name('event.get-submit-event-proposal');
  Route::get('/event-proposal/view/{id}', [EventProposalController::class, 'getViewEventProposal'])->name('event.get-view-event-proposal');
  Route::get('/export-to-word/{id}', [EventProposalController::class, 'exportToWord'])->name('export-to-word');

  //status for report and proposal
  Route::patch('/event-proposal/{id}/status', [EventProposalController::class, 'updateEventProposalStatus'])->name('event.update-event-proposal-status');
  Route::patch('/event-report/{id}/status', [EventReportController::class, 'updateEventReportStatus'])->name('event.update-event-report-status');


  // Event Report
  Route::post('/event-report', [EventReportController::class, 'postEventReport'])->name('event.post-event-report');
  Route::get('/event-report', [EventReportController::class, 'getEventReport'])->name('event.get-event-report');
  Route::get('/event-report-user', [EventReportController::class, 'getEventReportUser'])->name('event.get-event-report-user');
  Route::get('/event-report/submit/', [EventReportController::class, 'getGenerateEventReport'])->name('event.get-generate-event-report');
  Route::get('/event-report/view/{id}', [EventReportController::class, 'getViewEventReport'])->name('event.get-view-event-report');
  /* Route::get('/export-to-word/{id}', [EventProposalController::class, 'exportToWord'])->name('export-to-word'); */


  //chart
  Route::get('/index', [UserController::class, 'index'])->name('index');

  //Event Report
  //Route::post('/event-report', [EventReportController::class, 'postEventReport'])->name('event.post-event-report');

  // Calendar
  Route::get('/calendar', [CalendarController::class, 'getCalendar'])->name('calendar.get-calendar');
  Route::post('/calendar', [CalendarController::class, 'postCalendarEvent'])->name('calendar.post-calendar-event');

  Route::delete('/calendar/delete-event', [CalendarController::class, 'deleteEvent'])->name('calendar.delete-calendar-event');

  // Profile
  /*  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit'); */
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

  //secre
  Route::post('/event-secretariat', [EventSecretariatController::class, 'store'])->name('event.secretariat.store');


});

require __DIR__ . '/auth.php';
