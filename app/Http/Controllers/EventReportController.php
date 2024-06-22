<?php

namespace App\Http\Controllers;

use App\Models\EventReport;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use Illuminate\Support\Facades\Response;
use Illuminate\View\View;

class EventReportController extends Controller
{

  public function updateEventReportStatus(Request $request, $id)
  {
    $request->validate([
      'status' => 'required|string',
    ]);

    $eventReport = EventReport::findOrFail($id);
    $eventReport->status = $request->input('status');
    $eventReport->save();

    return redirect()->back()->with('success', 'Status updated successfully');
  }

  public function getEventReport(Request $request): View
  {
    $eventReport = EventReport::all();

    return view('admin.check-review-report', [
      'user' => $request->user(),
      'eventReport' => $eventReport
    ]);

  }

  public function getSubmitEventReport(Request $request): View
  {
    return view('submit-event-report-form', [
      'user' => $request->user(),
      'admin' => $request->user(),
    ]);
  }

  public function getViewEventReport(Request $request, int $id): View
  {
    $eventReportData = EventReport::find($id);

    return view('view-event-report-form', [
      'user' => $request->user(),
      /* 'admin' => $request->user(), */
      'eventReportData' => $eventReportData
    ]);
  }

  /* letak dekat controller event report */
  public function postEventReport(Request $request)
  {
    $eventReport = new EventReport();

    $this->validate($request, [
      /* 'purpose' => 'required|string|max:255',
      'background' => 'required|string|max:1000',
      'eventName' => 'required|string|max:255',
      'organizer' => 'required|string|max:255',

      'organizer_exco' => 'required|string|max:255',
      'event_director' => 'required|string|max:255',

      'date' => 'required|string|max:255',
      'day' => 'required|string|max:255',
      'time' => 'required|string|max:255',
      'location' => 'required|string|max:255',
      'objective1' => 'required|string|max:255',
      'objective2' => 'required|string|max:255',
      'objective3' => 'required|string|max:255',
      'per_Masalah1' => 'required|string|max:255',
      'per_Masalah2' => 'required|string|max:255',
      'per_Masalah3' => 'required|string|max:255',
      'description_Comment' => 'nullable|string|max:1000',
      'eventDetails_Comment' => 'nullable|string|max:1000',
      'organizer_Comment' => 'nullable|string|max:1000',
      'obj_Comment' => 'nullable|string|max:1000',
 */
      /* 'background' => 'nullable|string|max:255',
      'eventName' => 'nullable|string|max:255',
      'organizer' => 'nullable|string|max:255',

      'organizer_exco' => 'nullable|string|max:255',
      'event_director' => 'nullable|string|max:255',

      'date' => 'nullable|string|max:255',
      'day' => 'nullable|string|max:255',
      'time' => 'nullable|string|max:255',
      'location' => 'nullable|string|max:255',
      'objective1' => 'nullable|string|max:255',
      'objective2' => 'nullable|string|max:255',
      'objective3' => 'nullable|string|max:255',
      'per_Masalah1' => 'nullable|string|max:255',
      'per_Masalah2' => 'nullable|string|max:255',
      'per_Masalah3' => 'nullable|string|max:255',
      'description_Comment' => 'nullable|string|max:1000',
      'eventDetails_Comment' => 'nullable|string|max:1000',
      'organizer_Comment' => 'nullable|string|max:1000',
      'obj_Comment' => 'nullable|string|max:1000',

      'participant_escorts' => 'nullable|string|max:255',
      'name_of_mentor' => 'nullable|string|max:255',
      'position_of_mentor' => 'nullable|string|max:255',
      'company_address' => 'nullable|string|max:255',
      'suggested_role' => 'nullable|string|max:255',

      'impact_student_1' => 'nullable|string|max:255',
      'impact_student_2' => 'nullable|string|max:255',
      'impact_student_3' => 'nullable|string|max:255',
      'toward_club_1' => 'nullable|string|max:255',
      'toward_club_2' => 'nullable|string|max:255',
      'toward_club_3' => 'nullable|string|max:255',



      'committee' => 'required|array', // Validate the committee array
      'committee.*.role' => 'required|string|max:255', // Validate each role
      'committee.*.name' => 'required|string|max:255', // Validate each name
      'committee.*.matric' => 'required|string|max:255', // Validate each name
      'committee.*.faculty' => 'required|string|max:255', // Validate each name




      'tentative' => 'nullable|array', // Validate the committee array
      'tentative.*.time' => 'nullable|string|max:255', // Validate each role
      'tentative.*.content' => 'nullable|string|max:255', // Validate each name

      'others' => 'nullable|string|max:255',
      'implication' => 'nullable|string|max:255',
      'decision' => 'nullable|string|max:255', */

      'others_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
      'others_captions.*' => 'nullable|string',

      'background' => 'nullable|string',
      'purpose' => 'nullable|string',
      'eventName' => 'nullable|string',
      'organizer' => 'nullable|string',
      'organizer_exco' => 'nullable|string',
      'event_director' => 'nullable|string',
      'date' => 'nullable|string',
      'day' => 'nullable|string',
      'time' => 'nullable|string',
      'location' => 'nullable|string',
      'objective1' => 'nullable|string',
      'objective2' => 'nullable|string',
      'objective3' => 'nullable|string',
      'per_Masalah1' => 'nullable|string',
      'per_Masalah2' => 'nullable|string',
      'per_Masalah3' => 'nullable|string',
      'description_Comment' => 'nullable|string',
      'eventDetails_Comment' => 'nullable|string',
      'organizer_Comment' => 'nullable|string',
      'obj_Comment' => 'nullable|string',
      'participant_escorts' => 'nullable|string',
      'name_of_mentor' => 'nullable|string',
      'position_of_mentor' => 'nullable|string',
      'company_address' => 'nullable|string',
      'suggested_role' => 'nullable|string',
      'impact_student_1' => 'nullable|string',
      'impact_student_2' => 'nullable|string',
      'impact_student_3' => 'nullable|string',
      'toward_club_1' => 'nullable|string',
      'toward_club_2' => 'nullable|string',
      'toward_club_3' => 'nullable|string',
      'others' => 'nullable|string',
      'implication' => 'nullable|string',
      'decision' => 'nullable|string',
      'club_president' => 'nullable|string',
      'club_advisor' => 'nullable|string',
      'mpp' => 'nullable|string',

      'committee' => 'required|array',
      'committee.*.role' => 'required|string|max:255',
      'committee.*.name' => 'required|string|max:255',
      'committee.*.matric' => 'required|string|max:255',
      'committee.*.faculty' => 'required|string|max:255',
      'tentative' => 'nullable|array',
      'tentative.*.time' => 'nullable|string|max:255',
      'tentative.*.content' => 'nullable|string|max:255',


    ]);

    if ($request->has('id')) {
      // Find the existing event report by ID
      $eventReport = EventReport::find($request->id);

      // If an event report with the provided ID doesn't exist, create a new one
      if (!$eventReport) {
        $eventReport = new EventReport();
      }
    } else {
      // If no ID is provided in the request, create a new event report
      $eventReport = new EventReport();
    }


    $others = [];
    if ($request->hasFile('others_images')) {
      foreach ($request->file('others_images') as $index => $file) {
        if ($file) {
          $path = $file->store('others_images', 'public');
          $others[] = [
            'image_path' => $path,
            'caption' => $request->input('others_captions')[$index] ?? '',
          ];
        }
      }
    }
    $eventReport->others = json_encode($others);

    // Update the event report details
    $eventReport->purpose = $request->input('purpose');
    $eventReport->background = $request->input('background');

    $eventReport->committee_members = json_encode($request->input('committee'));

    $eventReport->tentative_activity = json_encode($request->input('tentative'));


    $eventReport->eventName = $request->input('eventName');
    $eventReport->organizer = $request->input('organizer');

    $eventReport->organizer_exco = $request->input('organizer_exco');
    $eventReport->event_director = $request->input('event_director');

    $eventReport->date = $request->input('date');
    $eventReport->day = $request->input('day');
    $eventReport->time = $request->input('time');
    $eventReport->location = $request->input('location');
    $eventReport->objective1 = $request->input('objective1');
    $eventReport->objective2 = $request->input('objective2');
    $eventReport->objective3 = $request->input('objective3');
    $eventReport->per_Masalah1 = $request->input('per_Masalah1');
    $eventReport->per_Masalah2 = $request->input('per_Masalah2');
    $eventReport->per_Masalah3 = $request->input('per_Masalah3');

    $eventReport->participant_escorts = $request->input('participant_escorts');

    $eventReport->name_of_mentor = $request->input('name_of_mentor');
    $eventReport->position_of_mentor = $request->input('position_of_mentor');
    $eventReport->company_address = $request->input('company_address');
    $eventReport->suggested_role = $request->input('suggested_role');

    $eventReport->impact_student_1 = $request->input('impact_student_1');
    $eventReport->impact_student_2 = $request->input('impact_student_2');
    $eventReport->impact_student_3 = $request->input('impact_student_3');
    $eventReport->toward_club_1 = $request->input('toward_club_1');
    $eventReport->toward_club_2 = $request->input('toward_club_2');
    $eventReport->toward_club_3 = $request->input('toward_club_3');






    $eventReport->description_Comment = $request->input('description_Comment');
    $eventReport->eventDetails_Comment = $request->input('eventDetails_Comment');
    $eventReport->organizer_Comment = $request->input('organizer_Comment');
    $eventReport->obj_Comment = $request->input('obj_Comment');

    /*  $eventReport->others = $request->input('others'); */
    $eventReport->implication = $request->input('implication');
    $eventReport->decision = $request->input('decision');

    $eventReport->club_president = $request->input('club_president');
    $eventReport->club_advisor = $request->input('club_advisor');
    $eventReport->mpp = $request->input('mpp');

    $eventReport->save();

    return redirect()->route('submit-event-report-form');
  }

  //update
  public function updateEventReport(Request $request, $id)
  {
    $eventReport = EventReport::findOrFail($id);

    $this->validate($request, [
      'purpose' => 'nullable|string',
      'background' => 'nullable|string',
      'eventName' => 'nullable|string',
      'organizer' => 'nullable|string',
      'organizer_exco' => 'nullable|string',
      'event_director' => 'nullable|string',
      'date' => 'nullable|string',
      'day' => 'nullable|string',
      'time' => 'nullable|string',
      'location' => 'nullable|string',
      'objective1' => 'nullable|string',
      'objective2' => 'nullable|string',
      'objective3' => 'nullable|string',
      'per_Masalah1' => 'nullable|string',
      'per_Masalah2' => 'nullable|string',
      'per_Masalah3' => 'nullable|string',
      'description_Comment' => 'nullable|string',
      'eventDetails_Comment' => 'nullable|string',
      'organizer_Comment' => 'nullable|string',
      'obj_Comment' => 'nullable|string',
      /* 'participant_escorts_Comment' => 'nullable|string',
      'suggested_role_Comment' => 'nullable|string',
      'impact_student_Comment' => 'nullable|string',
      'tentative_activity_Comment' => 'nullable|string',
      'committee_Comment' => 'nullable|string',
      'others_Comment' => 'nullable|string',
      'implication_Comment' => 'nullable|string',
      'decision_Comment' => 'nullable|string', */
      'participant_escorts' => 'nullable|string',
      'name_of_mentor' => 'nullable|string',
      'position_of_mentor' => 'nullable|string',
      'company_address' => 'nullable|string',
      'suggested_role' => 'nullable|string',
      'impact_student_1' => 'nullable|string',
      'impact_student_2' => 'nullable|string',
      'impact_student_3' => 'nullable|string',
      'toward_club_1' => 'nullable|string',
      'toward_club_2' => 'nullable|string',
      'toward_club_3' => 'nullable|string',
      /*  'others' => 'nullable|string', */
      'implication' => 'nullable|string',
      'decision' => 'nullable|string',
      'club_president' => 'nullable|string',
      'club_advisor' => 'nullable|string',
      'mpp' => 'nullable|string',
      /* 'committee' => 'nullable|string', */
      /*  'committee.*.role' => 'nullable|string',
       'committee.*.name' => 'nullable|string',
       'committee.*.matric' => 'nullable|string',
       'committee.*.faculty' => 'nullable|string', */
      /*  'tentative' => 'nullable|string', */
      /*  'tentative.*.time' => 'nullable|string',
       'tentative.*.content' => 'nullable|string', */

    ]);

    $eventReport->update([
      'background' => $request->input('background'),
      'purpose' => $request->input('purpose'),
      'eventName' => $request->input('eventName'),
      'organizer' => $request->input('organizer'),
      'organizer_exco' => $request->input('organizer_exco'),
      'event_director' => $request->input('event_director'),
      'date' => $request->input('date'),
      'day' => $request->input('day'),
      'location' => $request->input('location'),
      'time' => $request->input('time'),
      'objective1' => $request->input('objective1'),
      'objective2' => $request->input('objective2'),

      'objective3' => $request->input('objective3'),
      'per_Masalah1' => $request->input('per_Masalah1'),
      'per_Masalah2' => $request->input('per_Masalah2'),
      'per_Masalah3' => $request->input('per_Masalah3'),
      'description_Comment' => $request->input('description_Comment'),
      'eventDetails_Comment' => $request->input('eventDetails_Comment'),
      'organizer_Comment' => $request->input('organizer_Comment'),
      'obj_Comment' => $request->input('obj_Comment'),
      /* 'participant_escorts_Comment' => $request->input('participant_escorts_Comment'),
      'suggested_role_Comment' => $request->input('suggested_role_Comment'),
      'impact_student_Comment' => $request->input('impact_student_Comment'),
      'tentative_activity_Comment' => $request->input('tentative_activity_Comment'),
      'committee_Comment' => $request->input('committee_Comment'),
      'others_Comment' => $request->input('others_Comment'),
      'implication_Comment' => $request->input('implication_Comment'),
      'decision_Comment' => $request->input('decision_Comment'), */
      'participant_escorts' => $request->input('participant_escorts'),
      'name_of_mentor' => $request->input('name_of_mentor'),
      'position_of_mentor' => $request->input('position_of_mentor'),
      'company_address' => $request->input('company_address'),
      'suggested_role' => $request->input('suggested_role'),
      'impact_student_1' => $request->input('impact_student_1'),
      'impact_student_2' => $request->input('impact_student_2'),
      'impact_student_3' => $request->input('impact_student_3'),
      'toward_club_1' => $request->input('toward_club_1'),
      'toward_club_2' => $request->input('toward_club_2'),
      'toward_club_3' => $request->input('toward_club_3'),
      /*  'others' => $request->input('others'), */
      'implication' => $request->input('implication'),
      'decision' => $request->input('decision'),
      'club_president' => $request->input('club_president'),
      /* 'club_advisor' => $request->input('club_advisor'), */

      'mpp' => $request->input('mpp'),
      /* 'committee' => $request->input('committee'), */
      /*       'committee.*.role' => $request->input('committee.*.role'),
            'committee.*.name' => $request->input('committee.*.name'),
            'committee.*.matric' => $request->input('committee.*.matric'),
            'committee.*.faculty' => $request->input('committee.*.faculty'), */
      /* 'tentative' => $request->input('tentative'), */
      /* 'tentative.*.time' => $request->input('tentative.*.time'),
      'tentative.*.content' => $request->input('tentative.*.content'), */
    ]);

    /* return redirect()->route('submit-event-proposal-form'); */
    return redirect()->route('event.get-event-report');
  }
  public function fetchData()
  {
    return EventReport::latest()->first(); // Get the latest event report
  }


  /* public function generateWordDocument($data) */ //yang asal
  public function generateWordDocument($eventReport) //yg modified
  {
    // Initialize PHPWord object
    $phpWord = new PhpWord();

    // Define styles for the different levels
    $phpWord->addNumberingStyle(
      'multilevel',
      array(
        'type' => 'multilevel',
        'levels' => array(
          array('pStyle' => 'Heading1', 'format' => 'decimal', 'text' => '%1.0', 'left' => 360, 'hanging' => 720, 'tabPos' => 360),
          array('pStyle' => 'Heading2', 'format' => 'decimal', 'text' => '%1.%2', 'left' => 1080, 'hanging' => 720, 'tabPos' => 360),
          array('pStyle' => 'Heading3', 'format' => 'lowerLetter', 'text' => '%3.', 'left' => 1800, 'hanging' => 720, 'tabPos' => 360),
        )
      )
    );

    /* $phpWord->addNumberingStyle(
      'multilevel',
      array(
        'type' => 'multilevel',
        'levels' => array(
          array(
            'pStyle' => 'Heading1',
            'format' => 'decimal',
            'text' => '%1.',
            'left' => 360,
            'hanging' => 720,
            'tabPos' => 360
          ),
          array(
            'pStyle' => 'Heading2',
            'format' => 'decimal',
            'text' => '%1.%2',
            'left' => 720,
            'hanging' => 720,
            'tabPos' => 720
          ),
          array(
            'pStyle' => 'Heading3',
            'format' => 'lowerLetter',
            'text' => '%3.',
            'left' => 1080,
            'hanging' => 720,
            'tabPos' => 1080
          ),
        )
      )
    ); */


    // Add a section
    $section2 = $phpWord->addSection();

    // Define paragraph style with indentation for level 2 items
    $phpWord->addParagraphStyle(
      'p2_style',
      array('indentation' => array('left' => 720))
    );

    $phpWord->addParagraphStyle(
      'p3_style',
      array('indentation' => array('left' => 360))
    );

    // Define text style for bold text
    $phpWord->addFontStyle(
      'boldText',
      array('bold' => true, 'name' => 'Arial', 'size' => 11)
    );

    // Define paragraph style for level 1 items' text
    $phpWord->addParagraphStyle(
      'level1_text_style',
      array('indentation' => array('left' => 720))
    );

    //Add textbreak
    $section2->addTextBreak(4);


    //add Logo
    $logoPath = public_path('img/logo_uthm.png'); // Path to your logo image file
    $section2->addImage($logoPath, [
      'width' => 268.08, // Width of the logo in points
      'height' => 76.32, // Height of the logo in points
      'alignment' => 'center', // Alignment of the logo within the page
    ]);

    $section2->addText('UNIVERSITI TUN HUSSEIN ONN MALAYSIA', [
      'name' => 'Arial', // Font name
      'size' => 13, // Font size
      'bold' => true, // Bold style
    ], [
      'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER, // Text alignment
    ]);

    $section2->addTextBreak(1);

    $section2->addText('LAPORAN', [
      'name' => 'Arial', // Font name
      'size' => 13, // Font size
      'bold' => true, // Bold style
    ], [
      'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER, // Text alignment
    ]);

    $section2->addTextBreak(1);

    // Retrieve and add eventName below "KERTAS KERJA"
    $eventName = $eventReport->eventName;
    $section2->addText($eventName, [
      'name' => 'Arial', // Font name
      'size' => 12, // Font size
      'bold' => true, // Bold style
    ], [
      'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER, // Text alignment
    ]);

    $section2->addTextBreak(1);

    $section2->addText('TEMPAT:', [
      'name' => 'Arial', // Font name
      'size' => 13, // Font size
      'bold' => true, // Bold style
    ], [
      'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER, // Text alignment
    ]);

    $section2->addTextBreak(1);

    $location = $eventReport->location;
    $section2->addText($location, [
      'name' => 'Arial', // Font name
      'size' => 12, // Font size
      'bold' => true, // Bold style
    ], [
      'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER, // Text alignment
    ]);

    $section2->addTextBreak(1);

    $section2->addText('ANJURAN :', [
      'name' => 'Arial', // Font name
      'size' => 13, // Font size
      'bold' => true, // Bold style
    ], [
      'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER, // Text alignment
    ]);

    $section2->addTextBreak(1);

    $organizer = $eventReport->organizer;
    $section2->addText($organizer, [
      'name' => 'Arial', // Font name
      'size' => 12, // Font size
      'bold' => true, // Bold style
    ], [
      'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER, // Text alignment
    ]);

    $section2->addTextBreak(1);

    $section2->addText('TARIKH :', [
      'name' => 'Arial', // Font name
      'size' => 13, // Font size
      'bold' => true, // Bold style
    ], [
      'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER, // Text alignment
    ]);

    $date = $eventReport->date;
    $section2->addText($date, [
      'name' => 'Arial', // Font name
      'size' => 12, // Font size
      'bold' => true, // Bold style
    ], [
      'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER, // Text alignment
    ]);

    //Page 2

    $section2 = $phpWord->addSection();

    // Add content to the second page
    /* $section2->addText('MAJLIS PERWAKILAN PELAJAR & PEJABAT HAL EHWAL PELAJAR', [
      'name' => 'Arial', // Font name
      'size' => 12, // Font size
      'bold' => true, // Bold style
    ], [
      'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER, // Text alignment
    ]); */

    $secondPageText = 'MAJLIS PERWAKILAN PELAJAR & PEJABAT HAL EHWAL PELAJAR UNIVERSITI TUN HUSSEIN ONN MALAYSIA';
    $section2->addText(htmlspecialchars($secondPageText), [
      'name' => 'Arial', // Font name
      'size' => 12, // Font size
      'bold' => true, // Bold style
    ], [
      'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER, // Text alignment
    ]);

    $section2->addText('LAPORAN', [
      'name' => 'Arial', // Font name
      'size' => 13, // Font size
      'bold' => true, // Bold style
    ], [
      'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER, // Text alignment
    ]);

    $section2->addTextBreak(1);

    $eventName = $eventReport->eventName;
    $section2->addText($eventName, [
      'name' => 'Arial', // Font name
      'size' => 12, // Font size
      'bold' => true, // Bold style
    ], [
      'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER, // Text alignment
    ]);

    // Define font style for bold headings and numbering
    $phpWord->addFontStyle(
      'boldText',
      array('bold' => true, 'name' => 'Arial', 'size' => 11)
    );

    $phpWord->addFontStyle(
      'notBoldText',
      array('bold' => false, 'name' => 'Arial', 'size' => 11, 'indentation' => ['left' => 360])
    );

    // Define a text style for font size 11
    $phpWord->addFontStyle(
      'size11', // Style name
      array('name' => 'Arial', 'size' => 11)
    );

    // Define text style for normal text with size 11
    $phpWord->addFontStyle(
      'normalText',
      array('name' => 'Arial', 'size' => 11)
    );

    // Add a title with numbering
    $section2->addListItem('TUJUAN', 0,/*  null */ 'boldText', 'multilevel');

    $phpWord->addParagraphStyle(
      'justifiedStyle',
      [
        'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::BOTH,
        'indentation' => ['left' => 360],
      ]
    );

    $phpWord->addParagraphStyle(
      'justifiedStyle2',
      [
        'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::BOTH,
        'indentation' => ['left' => 1080],
      ]
    );

    $phpWord->addParagraphStyle(
      'justifiedStyle3',
      [
        'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::BOTH,
        'indentation' => ['left' => 1800],
      ]
    );

    //
    $purpose = $eventReport->purpose;
    $section2->addText($purpose, [
      'name' => 'Arial', // Font name
      'size' => 11, // Font size
      'bold' => false, // Bold style
    ], 'justifiedStyle');

    $section2->addTextBreak(1);

    $section2->addListItem('LATAR BELAKANG', 0, 'boldText', 'multilevel');

    $section2->addListItem('Pengenalan', 1, 'notBoldText', 'multilevel');

    $background = $eventReport->background;
    $section2->addText($background, [
      'name' => 'Arial', // Font name
      'size' => 11, // Font size
      'bold' => false, // Bold style
    ], 'justifiedStyle2');

    $section2->addTextBreak(1);

    $section2->addListItem('NAMA AKTIVITI DAN PENGANJUR', 0, 'boldText', 'multilevel');
    $section2->addListItem('Nama Aktiviti', 1, 'notBoldText', 'multilevel');
    $section2->addText($eventName, [
      'name' => 'Arial', // Font name
      'size' => 11, // Font size
      'bold' => false, // Bold style
    ], 'justifiedStyle2');

    $section2->addListItem('Nama Penganjur', 1, 'notBoldText', 'multilevel');
    $section2->addText($organizer, [
      'name' => 'Arial', // Font name
      'size' => 11, // Font size
      'bold' => false, // Bold style
    ], 'justifiedStyle2');

    $section2->addTextBreak(1);

    $section2->addListItem('BUTIRAN AKTIVITI', 0, 'boldText', 'multilevel');

    $section2->addListItem('Tarikh', 1, 'notBoldText', 'multilevel');
    $section2->addText($date, [
      'name' => 'Arial', // Font name
      'size' => 11, // Font size
      'bold' => false, // Bold style
    ], 'justifiedStyle2');

    $section2->addListItem('Hari', 1, 'notBoldText', 'multilevel');
    $day = $eventReport->day;
    $section2->addText($day, [
      'name' => 'Arial', // Font name
      'size' => 11, // Font size
      'bold' => false, // Bold style
    ], 'justifiedStyle2');

    $section2->addListItem('Lokasi', 1, 'notBoldText', 'multilevel');
    $section2->addText($location, [
      'name' => 'Arial', // Font name
      'size' => 11, // Font size
      'bold' => false, // Bold style
    ], 'justifiedStyle2');

    $section2->addListItem('Masa', 1, 'notBoldText', 'multilevel');
    $time = $eventReport->time;
    $section2->addText($time, [
      'name' => 'Arial', // Font name
      'size' => 11, // Font size
      'bold' => false, // Bold style
    ], 'justifiedStyle2');


    $section2->addTextBreak(1);

    $objective1 = $eventReport->objective1;
    $objective2 = $eventReport->objective2;
    $objective3 = $eventReport->objective3;

    $section2->addListItem('OBJEKTIF AKTIVITI', 0, 'boldText', 'multilevel');

    $section2->addListItem($objective1, 1, 'notBoldText', 'multilevel');
    $section2->addListItem($objective2, 1, 'notBoldText', 'multilevel');
    $section2->addListItem($objective3, 1, 'notBoldText', 'multilevel');

    $section2->addTextBreak(1);

    $section2->addListItem('PERNYATAAN MASALAH', 0, 'boldText', 'multilevel');

    $per_Masalah1 = $eventReport->per_Masalah1;
    $per_Masalah2 = $eventReport->per_Masalah2;
    $per_Masalah3 = $eventReport->per_Masalah3;

    $section2->addListItem($per_Masalah1, 1, 'notBoldText', 'multilevel');
    $section2->addListItem($per_Masalah2, 1, 'notBoldText', 'multilevel');
    $section2->addListItem($per_Masalah3, 1, 'notBoldText', 'multilevel');

    $section2->addTextBreak(1);

    $section2->addListItem('SENARAI PESERTA DAN PENGIRING ', 0, 'boldText', 'multilevel');

    $participant_escorts = $eventReport->participant_escorts;

    $section2->addListItem($participant_escorts, 1, 'notBoldText', 'multilevel');

    $section2->addTextBreak(1);

    $section2->addListItem('SASARAN PADANAN TERAS AKTIVITI DAN KEBERHASILAN GRADUAN ', 0, 'boldText', 'multilevel');
    $section2->addListItem('Sila rujuk Lampiran 1 - Format Kertas Kerja.', 1, 'notBoldText', 'multilevel');

    $section2->addTextBreak(1);

    $section2->addListItem('PENGLIBATAN INDUSTRI/ PERSATUAN/ AGENSI/ BADAN ORGANISASI LUAR SEBAGAI MENTOR/ PENASIHAT ', 0, 'boldText', 'multilevel');
    $section2->addTextBreak(1);
    $section2->addListItem('Nama dan Alamat Industri/ Persatuan/ Agensi/ Badan Organisasi Luar', 1, 'notBoldText', 'multilevel');
    $name_of_mentor = $eventReport->name_of_mentor;
    $position_of_mentor = $eventReport->position_of_mentor;

    // Concatenate name and position with indentation (using tabs)
    $mentor_info = $name_of_mentor . "\t\t" . $position_of_mentor;

    $section2->addListItem('Nama dan Jawatan Mentor/ Penasihat ', 2, 'notBoldText', 'multilevel');
    $section2->addText($mentor_info, [
      'name' => 'Arial', // Font name
      'size' => 11, // Font size
      'bold' => false, // Bold style
    ], 'justifiedStyle3');
    $section2->addTextBreak(1);
    $section2->addListItem('Alamat Syarikat ', 2, 'notBoldText', 'multilevel');
    $company_address = $eventReport->company_address;
    $section2->addText($company_address, [
      'name' => 'Arial', // Font name
      'size' => 11, // Font size
      'bold' => false, // Bold style
    ], 'justifiedStyle3');

    $section2->addTextBreak(1);
    $section2->addListItem('Cadangan Peranan dan Sumbangan Mentor / Penasihat ', 2, 'notBoldText', 'multilevel');
    $suggested_role = $eventReport->suggested_role;
    $section2->addText($suggested_role, [
      'name' => 'Arial', // Font name
      'size' => 11, // Font size
      'bold' => false, // Bold style
    ], 'justifiedStyle3');

    $section2->addTextBreak(1);
    $section2->addListItem('KEBERHASILAN AKTIVITI / IMPAK', 0, 'boldText', 'multilevel');
    $section2->addTextBreak(1);
    $section2->addListItem('Kepada Pelajar / Peserta', 1, 'notBoldText', 'multilevel');
    $impact_student_1 = $eventReport->impact_student_1;
    $impact_student_2 = $eventReport->impact_student_2;
    $impact_student_3 = $eventReport->impact_student_3;
    $section2->addListItem($impact_student_1, 2, 'notBoldText', 'multilevel');
    $section2->addListItem($impact_student_2, 2, 'notBoldText', 'multilevel');
    $section2->addListItem($impact_student_3, 2, 'notBoldText', 'multilevel');
    $section2->addTextBreak(1);
    $section2->addListItem('Kepada Kelab / Universiti / Komuniti', 1, 'notBoldText', 'multilevel');
    $toward_club_1 = $eventReport->toward_club_1;
    $toward_club_2 = $eventReport->toward_club_2;
    $toward_club_3 = $eventReport->toward_club_3;
    $section2->addListItem($toward_club_1, 2, 'notBoldText', 'multilevel');
    $section2->addListItem($toward_club_2, 2, 'notBoldText', 'multilevel');
    $section2->addListItem($toward_club_3, 2, 'notBoldText', 'multilevel');
    $section2->addTextBreak(1);
    $section2->addListItem('Kepada Kelestarian (Sila rujuk contoh di Lampiran 2 - Format Kertas Kerja)', 1, 'notBoldText', 'multilevel');
    $section2->addListItem('Melalui program yang dijalankan, kadar penggunaan karbon yang rendah kerana program ini kerana para peserta digalakkan berkongsi kenderaan menuju ke lokasi program.', 2, 'notBoldText', 'multilevel');
    $section2->addListItem('Promosi aktiviti menggunakan E=Poster dan E-Banner dengan minima cetakan.', 2, 'notBoldText', 'multilevel');
    $section2->addTextBreak(1);
    $section2->addListItem('ATUR CARA AKTIVITI ', 0, 'boldText', 'multilevel');


    //ADD TABLE TENTATIVE
    $tentativeActivity = json_decode($eventReport->tentative_activity, true);
    $tableStyle = array(
      'borderSize' => 6,
      'borderColor' => '000000',
      'cellMargin' => 50,
    );
    $phpWord->addTableStyle('TentativeTable', $tableStyle);
    $table = $section2->addTable('TentativeTable', );

    $table->addRow();
    $table->addCell(4750)->addText('Masa ', ['bold' => true]);
    $table->addCell(4750)->addText('Pengisian', ['bold' => true]);

    foreach ($tentativeActivity as $tentative) {
      $table->addRow();
      $table->addCell(4750)->addText($tentative['time']);
      $table->addCell(4750)->addText($tentative['content']);
    }

    $section2->addTextBreak(1);
    $section2->addListItem('JAWATANKUASA AKTIVITI ', 0, 'boldText', 'multilevel');
    //ADD TABLE COMMITTEE
    $committeeMembers = json_decode($eventReport->committee_members, true);
    $tableStyle = array(
      'borderSize' => 10,
      'borderColor' => '000000',
      'cellMargin' => 50,
    );

    $phpWord->addTableStyle('CommitteeTable', $tableStyle);
    $table = $section2->addTable('CommitteeTable');

    $table->addRow();
    $table->addCell(4000)->addText('Nama ', ['bold' => true]);
    $table->addCell(2000)->addText('No. Matrik', ['bold' => true]);
    $table->addCell(1000)->addText('Fakulti', ['bold' => true]);
    $table->addCell(2500)->addText('Jawatan / Peranan', ['bold' => true]);

    foreach ($committeeMembers as $member) {
      $table->addRow();
      $table->addCell(4000)->addText($member['name']);
      $table->addCell(2000)->addText($member['matric']);
      $table->addCell(1000)->addText($member['faculty']);
      $table->addCell(2500)->addText($member['role']);
    }

    $section2->addTextBreak(1);
    $section2->addListItem('GAMBAR AKTIVITI', 0, 'boldText', 'multilevel');
    if ($eventReport->others) {
      $others = json_decode($eventReport->others, true);
      foreach ($others as $index => $other) {



        // Add image to the section
        $imagePath = public_path('storage/' . $other['image_path']);
        $section2->addImage($imagePath, [
          'width' => 280, // Adjust width as needed
          'height' => 280, // Adjust height as needed
          'alignment' => 'center',
        ]);
        $section2->addTextRun(['alignment' => 'center'])->addText($other['caption'], ['bold' => true, 'size' => 11]);
        $section2->addText('');

        // Add space between sections

      }
    }

    $section2->addTextBreak(1);
    $section2->addListItem('ULASAN PERJALANAN KESELURUHAN AKTIVITI', 0, 'boldText', 'multilevel');
    $implication = $eventReport->implication;
    $section2->addTextBreak(1);
    $section2->addText($implication, [
      'name' => 'Arial', // Font name
      'size' => 11, // Font size
      'bold' => false, // Bold style
    ], 'justifiedStyle');

    $section2->addTextBreak(1);
    $section2->addListItem('KEPUTUSAN', 0, 'boldText', 'multilevel');
    $decision = $eventReport->decision;

    $section2->addText($decision, [
      'name' => 'Arial', // Font name
      'size' => 11, // Font size
      'bold' => false, // Bold style
    ], 'justifiedStyle');
    $section2->addTextBreak(1);
    //
// Define table style arrays
    $tableStyle = [
      /* 'borderSize' => 20,
      'cellMargin' => 10, */
    ];

    // Add table style

    $club_president = $eventReport->club_president;
    $club_advisor = $eventReport->club_advisor;
    $mpp = $eventReport->mpp;
    $event_director = $eventReport->event_director;

    $phpWord->addTableStyle('Colspan Rowspan', $tableStyle);

    // Add table
    $table = $section2->addTable('Colspan Rowspan');

    // Add row for the first section
    $table->addRow();
    $table->addCell(5000)->addText('Disediakan Oleh Pengarah Program :');
    $table->addCell(5000)->addText('Disemak Oleh Pengerusi Kelab :');

    $table->addRow();
    $table->addCell(5000)->addText('');
    $table->addCell(5000)->addText('');

    $table->addRow();
    $table->addCell(5000)->addText($event_director);
    $table->addCell(5000)->addText($club_president);



    $table->addRow();
    $table->addCell(5000)->addText('Kelab Teknologi Maklumat');
    $table->addCell(5000)->addText('Kelab Teknologi Maklumat');

    $table->addRow();
    $table->addCell(5000)->addText('Fakulti Sains Komputer Dan Teknologi Maklumat');
    $table->addCell(5000)->addText('Fakulti Sains Komputer Dan Teknologi Maklumat');

    $table->addRow();
    $table->addCell(5000)->addText('Universiti Tun Hussein Onn Malaysia');
    $table->addCell(5000)->addText('Universiti Tun Hussein Onn Malaysia');

    $table->addRow();
    $table->addCell(5000)->addText('');
    $table->addCell(5000)->addText('');

    // Add space between sections

    // Add row for the second section
    $table->addRow();
    $table->addCell(5000)->addText('Disahkan oleh Penasihat :');
    $table->addCell(5000)->addText('Disemak Oleh Naib Yang Dipertua MPP:');
    $table->addRow();
    $table->addCell(5000)->addText('');
    $table->addCell(5000)->addText('');

    $table->addRow();
    $table->addCell(5000)->addText($club_advisor);
    $table->addCell(5000)->addText($mpp);

    $table->addRow();
    $table->addCell(5000)->addText('Penasihat');
    $table->addCell(5000)->addText('Naib Yang Dipertua');

    $table->addRow();
    $table->addCell(5000)->addText('Kelab Teknologi Maklumat');
    $table->addCell(5000)->addText('Majlis Perwakilan Pelajar');

    //

    $section3 = $phpWord->addSection();

    // Determine page size and adjust for margins
    $pageWidth = 595.3; // A4 width in points
    $pageHeight = 841.9; // A4 height in points
    $margin = 50; // Adjust based on your document's margins

    $logoPath = public_path('img/lampiran1.png'); // Path to your logo image file
    $section3->addImage($logoPath, [
      'width' => $pageWidth - 2 * $margin, // Adjusting for left and right margins
      'height' => $pageHeight - 2 * $margin, // Adjusting for top and bottom margins
      'alignment' => 'center', // Alignment of the logo within the page
      'marginTop' => -20 // Adjust this value as needed to move the image up
    ]);

    $section4 = $phpWord->addSection();

    // Determine page size and adjust for margins
    $pageWidth = 595.3; // A4 width in points
    $pageHeight = 841.9; // A4 height in points
    $margin = 50; // Adjust based on your document's margins

    $logoPath = public_path('img/lampiran2.png'); // Path to your logo image file
    $section4->addImage($logoPath, [
      'width' => $pageWidth - 2 * $margin, // Adjusting for left and right margins
      'height' => $pageHeight - 2 * $margin, // Adjusting for top and bottom margins
      'alignment' => 'center', // Alignment of the logo within the page
      'marginTop' => -20 // Adjust this value as needed to move the image up
    ]);

    $section5 = $phpWord->addSection();

    // Determine page size and adjust for margins
    $pageWidth = 595.3; // A4 width in points
    $pageHeight = 841.9; // A4 height in points
    $margin = 50; // Adjust based on your document's margins

    $logoPath = public_path('img/lampiran3.png'); // Path to your logo image file
    $section5->addImage($logoPath, [
      'width' => $pageWidth - 2 * $margin, // Adjusting for left and right margins
      'height' => $pageHeight - 2 * $margin, // Adjusting for top and bottom margins
      'alignment' => 'center', // Alignment of the logo within the page
      'marginTop' => -20 // Adjust this value as needed to move the image up
    ]);

    $section6 = $phpWord->addSection();

    ///




    // Determine page size and adjust for margins
    $pageWidth = 595.3; // A4 width in points
    $pageHeight = 841.9; // A4 height in points
    $margin = 50; // Adjust based on your document's margins

    $logoPath = public_path('img/lampiran4.png'); // Path to your logo image file
    $section6->addImage($logoPath, [
      'width' => $pageWidth - 2 * $margin, // Adjusting for left and right margins
      'height' => $pageHeight - 2 * $margin, // Adjusting for top and bottom margins
      'alignment' => 'center', // Alignment of the logo within the page
      'marginTop' => -20 // Adjust this value as needed to move the image up
    ]);

    // Save the document
    $filename = 'exported_data.docx';
    $path = storage_path('app/' . $filename);
    $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
    $objWriter->save($path);

    return $path;
  }

  /* public function exportToWord()
  {
    // Fetch data
    $data = $this->fetchData();

    // Generate Word document
    $filePath = $this->generateWordDocument($data);

    // Download the document
    return Response::download($filePath);
  } */

  public function exportToWord($id)
  {
    // Fetch data based on the provided ID
    $data = EventReport::find($id);

    if (!$data) {
      return redirect()->back()->with('error', 'Event Report not found');
    }

    // Generate Word document
    $filePath = $this->generateWordDocument($data);

    // Download the document
    return Response::download($filePath);
  }


}

