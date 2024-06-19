<?php

namespace App\Http\Controllers;

use App\Models\EventProposal;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use Illuminate\Support\Facades\Response;
use Illuminate\View\View;

class EventProposalController extends Controller
{

  public function updateEventProposalStatus(Request $request, $id)
  {
    $request->validate([
      'status' => 'required|string',
    ]);

    $eventProposal = EventProposal::findOrFail($id);
    $eventProposal->status = $request->input('status');
    $eventProposal->save();

    return redirect()->back()->with('success', 'Status updated successfully');
  }

  public function getEventProposal(Request $request): View
  {
    $eventProposal = EventProposal::all();

    return view('admin.check-review-proposal', [
      'user' => $request->user(),
      'eventProposal' => $eventProposal
    ]);

  }

  public function getSubmitEventProposal(Request $request): View
  {
    return view('submit-event-proposal-form', [
      'user' => $request->user(),
      'admin' => $request->user(),
    ]);
  }

  public function getViewEventProposal(Request $request, int $id): View
  {
    $eventProposalData = EventProposal::find($id);

    return view('view-event-proposal-form', [
      'user' => $request->user(),
      /* 'admin' => $request->user(), */
      'eventProposalData' => $eventProposalData
    ]);
  }

  /* letak dekat controller event proposal */
  public function postEventProposal(Request $request)
  {
    $eventProposal = new EventProposal();

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
      'purpose' => 'nullable|string|max:255',
      'background' => 'nullable|string|max:255',
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
      'decision' => 'nullable|string|max:255',


    ]);

    if ($request->has('id')) {
      // Find the existing event proposal by ID
      $eventProposal = EventProposal::find($request->id);

      // If an event proposal with the provided ID doesn't exist, create a new one
      if (!$eventProposal) {
        $eventProposal = new EventProposal();
      }
    } else {
      // If no ID is provided in the request, create a new event proposal
      $eventProposal = new EventProposal();
    }

    // Update the event proposal details
    $eventProposal->purpose = $request->input('purpose');
    $eventProposal->background = $request->input('background');

    $eventProposal->committee_members = json_encode($request->input('committee'));

    $eventProposal->tentative_activity = json_encode($request->input('tentative'));


    $eventProposal->eventName = $request->input('eventName');
    $eventProposal->organizer = $request->input('organizer');

    $eventProposal->organizer_exco = $request->input('organizer_exco');
    $eventProposal->event_director = $request->input('event_director');

    $eventProposal->date = $request->input('date');
    $eventProposal->day = $request->input('day');
    $eventProposal->time = $request->input('time');
    $eventProposal->location = $request->input('location');
    $eventProposal->objective1 = $request->input('objective1');
    $eventProposal->objective2 = $request->input('objective2');
    $eventProposal->objective3 = $request->input('objective3');
    $eventProposal->per_Masalah1 = $request->input('per_Masalah1');
    $eventProposal->per_Masalah2 = $request->input('per_Masalah2');
    $eventProposal->per_Masalah3 = $request->input('per_Masalah3');

    $eventProposal->participant_escorts = $request->input('participant_escorts');

    $eventProposal->name_of_mentor = $request->input('name_of_mentor');
    $eventProposal->position_of_mentor = $request->input('position_of_mentor');
    $eventProposal->company_address = $request->input('company_address');
    $eventProposal->suggested_role = $request->input('suggested_role');

    $eventProposal->impact_student_1 = $request->input('impact_student_1');
    $eventProposal->impact_student_2 = $request->input('impact_student_2');
    $eventProposal->impact_student_3 = $request->input('impact_student_3');
    $eventProposal->toward_club_1 = $request->input('toward_club_1');
    $eventProposal->toward_club_2 = $request->input('toward_club_2');
    $eventProposal->toward_club_3 = $request->input('toward_club_3');






    $eventProposal->description_Comment = $request->input('description_Comment');
    $eventProposal->eventDetails_Comment = $request->input('eventDetails_Comment');
    $eventProposal->organizer_Comment = $request->input('organizer_Comment');
    $eventProposal->obj_Comment = $request->input('obj_Comment');

    $eventProposal->others = $request->input('others');
    $eventProposal->implication = $request->input('implication');
    $eventProposal->decision = $request->input('decision');




    $eventProposal->save();

    return redirect()->route('submit-event-proposal-form');
  }

  public function fetchData()
  {
    return EventProposal::latest()->first(); // Get the latest event proposal
  }


  /* public function generateWordDocument($data) */ //yang asal
  public function generateWordDocument($eventProposal) //yg modified
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

    $section2->addText('KERTAS KERJA', [
      'name' => 'Arial', // Font name
      'size' => 13, // Font size
      'bold' => true, // Bold style
    ], [
      'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER, // Text alignment
    ]);

    $section2->addTextBreak(1);

    // Retrieve and add eventName below "KERTAS KERJA"
    $eventName = $eventProposal->eventName;
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

    $location = $eventProposal->location;
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

    $organizer = $eventProposal->organizer;
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

    $date = $eventProposal->date;
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

    $section2->addTextBreak(1);

    $eventName = $eventProposal->eventName;
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
    $purpose = $eventProposal->purpose;
    $section2->addText($purpose, [
      'name' => 'Arial', // Font name
      'size' => 11, // Font size
      'bold' => false, // Bold style
    ], 'justifiedStyle');

    $section2->addTextBreak(1);

    $section2->addListItem('LATAR BELAKANG', 0, 'boldText', 'multilevel');

    $section2->addListItem('Pengenalan', 1, 'notBoldText', 'multilevel');

    $background = $eventProposal->background;
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
    $day = $eventProposal->day;
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
    $time = $eventProposal->time;
    $section2->addText($time, [
      'name' => 'Arial', // Font name
      'size' => 11, // Font size
      'bold' => false, // Bold style
    ], 'justifiedStyle2');


    $section2->addTextBreak(1);

    $objective1 = $eventProposal->objective1;
    $objective2 = $eventProposal->objective2;
    $objective3 = $eventProposal->objective3;

    $section2->addListItem('OBJEKTIF AKTIVITI', 0, 'boldText', 'multilevel');

    $section2->addListItem($objective1, 1, 'notBoldText', 'multilevel');
    $section2->addListItem($objective2, 1, 'notBoldText', 'multilevel');
    $section2->addListItem($objective3, 1, 'notBoldText', 'multilevel');

    $section2->addTextBreak(1);

    $section2->addListItem('PERNYATAAN MASALAH', 0, 'boldText', 'multilevel');

    $per_Masalah1 = $eventProposal->per_Masalah1;
    $per_Masalah2 = $eventProposal->per_Masalah2;
    $per_Masalah3 = $eventProposal->per_Masalah3;

    $section2->addListItem($per_Masalah1, 1, 'notBoldText', 'multilevel');
    $section2->addListItem($per_Masalah2, 1, 'notBoldText', 'multilevel');
    $section2->addListItem($per_Masalah3, 1, 'notBoldText', 'multilevel');

    $section2->addTextBreak(1);

    $section2->addListItem('SENARAI PESERTA DAN PENGIRING ', 0, 'boldText', 'multilevel');

    $participant_escorts = $eventProposal->participant_escorts;

    $section2->addListItem($participant_escorts, 1, 'notBoldText', 'multilevel');

    $section2->addTextBreak(1);

    $section2->addListItem('SASARAN PADANAN TERAS AKTIVITI DAN KEBERHASILAN GRADUAN ', 0, 'boldText', 'multilevel');
    $section2->addListItem('Sila rujuk Lampiran 1 - Format Kertas Kerja.', 1, 'notBoldText', 'multilevel');

    $section2->addTextBreak(1);

    $section2->addListItem('PENGLIBATAN INDUSTRI/ PERSATUAN/ AGENSI/ BADAN ORGANISASI LUAR SEBAGAI MENTOR/ PENASIHAT ', 0, 'boldText', 'multilevel');
    $section2->addTextBreak(1);
    $section2->addListItem('Nama dan Alamat Industri/ Persatuan/ Agensi/ Badan Organisasi Luar', 1, 'notBoldText', 'multilevel');
    $name_of_mentor = $eventProposal->name_of_mentor;
    $position_of_mentor = $eventProposal->position_of_mentor;

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
    $company_address = $eventProposal->company_address;
    $section2->addText($company_address, [
      'name' => 'Arial', // Font name
      'size' => 11, // Font size
      'bold' => false, // Bold style
    ], 'justifiedStyle3');

    $section2->addTextBreak(1);
    $section2->addListItem('Cadangan Peranan dan Sumbangan Mentor / Penasihat ', 2, 'notBoldText', 'multilevel');
    $suggested_role = $eventProposal->suggested_role;
    $section2->addText($suggested_role, [
      'name' => 'Arial', // Font name
      'size' => 11, // Font size
      'bold' => false, // Bold style
    ], 'justifiedStyle3');

    $section2->addTextBreak(1);
    $section2->addListItem('KEBERHASILAN AKTIVITI / IMPAK', 0, 'boldText', 'multilevel');
    $section2->addTextBreak(1);
    $section2->addListItem('Kepada Pelajar / Peserta', 1, 'notBoldText', 'multilevel');
    $impact_student_1 = $eventProposal->impact_student_1;
    $impact_student_2 = $eventProposal->impact_student_2;
    $impact_student_3 = $eventProposal->impact_student_3;
    $section2->addListItem($impact_student_1, 2, 'notBoldText', 'multilevel');
    $section2->addListItem($impact_student_2, 2, 'notBoldText', 'multilevel');
    $section2->addListItem($impact_student_3, 2, 'notBoldText', 'multilevel');
    $section2->addTextBreak(1);
    $section2->addListItem('Kepada Kelab / Universiti / Komuniti', 1, 'notBoldText', 'multilevel');
    $toward_club_1 = $eventProposal->toward_club_1;
    $toward_club_2 = $eventProposal->toward_club_2;
    $toward_club_3 = $eventProposal->toward_club_3;
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
    $tentativeActivity = json_decode($eventProposal->tentative_activity, true);
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
    $committeeMembers = json_decode($eventProposal->committee_members, true);
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
    $section2->addListItem('LAIN - LAIN', 0, 'boldText', 'multilevel');
    $others = $eventProposal->others;
    $section2->addTextBreak(1);
    $section2->addText($others, [
      'name' => 'Arial', // Font name
      'size' => 11, // Font size
      'bold' => false, // Bold style
    ], 'justifiedStyle');

    $section2->addTextBreak(1);
    $section2->addListItem('IMPLIKASI SEKIRANYA TIDAK DILULUSKAN ', 0, 'boldText', 'multilevel');
    $implication = $eventProposal->implication;
    $section2->addTextBreak(1);
    $section2->addText($implication, [
      'name' => 'Arial', // Font name
      'size' => 11, // Font size
      'bold' => false, // Bold style
    ], 'justifiedStyle');

    $section2->addTextBreak(1);
    $section2->addListItem('KEPUTUSAN', 0, 'boldText', 'multilevel');
    $decision = $eventProposal->decision;
    $section2->addTextBreak(1);
    $section2->addText($decision, [
      'name' => 'Arial', // Font name
      'size' => 11, // Font size
      'bold' => false, // Bold style
    ], 'justifiedStyle');

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

    /*  if ($committeeMembers) {
       // Create a table for committee members
       $table = $section->addTable();

       // Add table headers
       $table->addRow();
       $table->addCell(2000)->addText('Name', 'boldText');
       $table->addCell(2000)->addText('Matric Number', 'boldText');
       $table->addCell(2000)->addText('Faculty', 'boldText');
       $table->addCell(2000)->addText('Role', 'boldText');

       // Populate the table with committee members data
       foreach ($committeeMembers as $committee) {
         $table->addRow();
         $table->addCell(2000)->addText($committee['name']);
         $table->addCell(2000)->addText($committee['matric']);
         $table->addCell(2000)->addText($committee['faculty']);
         $table->addCell(2000)->addText($committee['role']);

       }
     } else {
       $section->addText('No committee members found.', 'notBoldText', 'level1_text_style');
     } */

    //MULTILEVEL ABC
    /* $section2->addListItem('Nama dan Alamat Industri/Persatuan/Agensi/Badan Organisasi Luar', 1, 'notBoldText', 'multilevel');
    $section2->addListItem($background, 2, 'notBoldText', 'multilevel'); */

    // Add table
    /* $table = $section->addTable();

    // Add headers
    $table->addRow();
    $headers = ['purpose', 'background', 'eventName', 'organizer']; // Replace with your column names
    foreach ($headers as $header) {
      $table->addCell()->addText($header);
    }

    // Add data rows
    foreach ($data as $row) {
      $table->addRow();
      foreach ($row->toArray() as $column) {
        $table->addCell()->addText($column);
      }
    } */

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
    $data = EventProposal::find($id);

    if (!$data) {
      return redirect()->back()->with('error', 'Event Proposal not found');
    }

    // Generate Word document
    $filePath = $this->generateWordDocument($data);

    // Download the document
    return Response::download($filePath);
  }


}

