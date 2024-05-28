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
  /* public function getEventProposal(Request $request): View
  {
    $eventProposal = EventProposal::all();

    $user = $request->user();

    // Check a condition to determine which view to return
    if ($user->role === 'admin') {
      // Return the 'admin.check-review-proposal' view for admins
      return view('admin.check-review-proposal', [
        'user' => $user,
        'eventProposal' => $eventProposal
      ]);
    } else {
      // Return a different view for non-admin users
      return view('submit-manage-event-form', [
        'user' => $user,
        'eventProposal' => $eventProposal
      ]);
    }
  } */
  public function getEventProposal(Request $request): View
  {
    $eventProposal = EventProposal::all();

    return view('admin.check-review-proposal', [
      'user' => $request->user(),
      'eventProposal' => $eventProposal
    ]);

  }

  public function getEventProposalUser(Request $request): View
  {
    $eventProposal = EventProposal::all();

    return view('submit-manage-event-form', [
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
      'purpose' => 'required|string|max:255',
      'background' => 'required|string|max:1000',
      'eventName' => 'required|string|max:255',
      'organizer' => 'required|string|max:255',
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
      'description_Comment' => 'string|max:255',
      'eventDetails_Comment' => 'string|max:255',
      'organizer_Comment' => 'string|max:255',
      'obj_Comment' => 'string|max:255',

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
    $eventProposal->eventName = $request->input('eventName');
    $eventProposal->organizer = $request->input('organizer');
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
    $eventProposal->description_Comment = $request->input('description_Comment');
    $eventProposal->eventDetails_Comment = $request->input('eventDetails_Comment');
    $eventProposal->organizer_Comment = $request->input('organizer_Comment');
    $eventProposal->obj_Comment = $request->input('obj_Comment');
    $eventProposal->save();

    return redirect()->route('submit-event-proposal-form');
  }

  public function postSecondEventProposal(Request $request)
  {
    /* $eventProposal = new EventProposal();

    $this->validate($request, [
      'purpose' => 'required|string|max:255',
      'background' => 'required|string|max:255',
    ]);

    $eventProposal->purpose = $request['purpose'];
    $eventProposal->background = $request['background'];
    $eventProposal->save();

    return redirect()->route('submit-event-proposal-form'); */
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
    $section = $phpWord->addSection();

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
    $section->addTextBreak(4);


    //add Logo
    $logoPath = public_path('img/logo_uthm.png'); // Path to your logo image file
    $section->addImage($logoPath, [
      'width' => 268.08, // Width of the logo in points
      'height' => 76.32, // Height of the logo in points
      'alignment' => 'center', // Alignment of the logo within the page
    ]);

    /* $section->addText('UNIVERSITI TUN HUSSEIN ONN MALAYSIA', [
      'name' => 'Arial', // Font name
      'size' => 13, // Font size
      'bold' => true, // Bold style
      'alignment' => 'center', // Text alignment
      'valign' => 'center', // Vertical alignment
    ]); */

    $section->addText('UNIVERSITI TUN HUSSEIN ONN MALAYSIA', [
      'name' => 'Arial', // Font name
      'size' => 13, // Font size
      'bold' => true, // Bold style
    ], [
      'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER, // Text alignment
    ]);

    $section->addTextBreak(1);

    $section->addText('KERTAS KERJA', [
      'name' => 'Arial', // Font name
      'size' => 13, // Font size
      'bold' => true, // Bold style
    ], [
      'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER, // Text alignment
    ]);

    $section->addTextBreak(1);

    // Retrieve and add eventName below "KERTAS KERJA"
    $eventName = $eventProposal->eventName;
    $section->addText($eventName, [
      'name' => 'Arial', // Font name
      'size' => 12, // Font size
      'bold' => true, // Bold style
    ], [
      'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER, // Text alignment
    ]);

    $section->addTextBreak(1);

    $section->addText('TEMPAT:', [
      'name' => 'Arial', // Font name
      'size' => 13, // Font size
      'bold' => true, // Bold style
    ], [
      'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER, // Text alignment
    ]);

    $section->addTextBreak(1);

    $location = $eventProposal->location;
    $section->addText($location, [
      'name' => 'Arial', // Font name
      'size' => 12, // Font size
      'bold' => true, // Bold style
    ], [
      'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER, // Text alignment
    ]);

    $section->addTextBreak(1);

    $section->addText('ANJURAN :', [
      'name' => 'Arial', // Font name
      'size' => 13, // Font size
      'bold' => true, // Bold style
    ], [
      'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER, // Text alignment
    ]);

    $section->addTextBreak(1);

    $organizer = $eventProposal->organizer;
    $section->addText($organizer, [
      'name' => 'Arial', // Font name
      'size' => 12, // Font size
      'bold' => true, // Bold style
    ], [
      'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER, // Text alignment
    ]);

    $section->addTextBreak(1);

    $section->addText('TARIKH :', [
      'name' => 'Arial', // Font name
      'size' => 13, // Font size
      'bold' => true, // Bold style
    ], [
      'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER, // Text alignment
    ]);

    $date = $eventProposal->date;
    $section->addText($date, [
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

