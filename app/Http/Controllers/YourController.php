<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\YourModel;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;

use Illuminate\Support\Facades\Response;


class YourController extends Controller
{
  //
  public function fetchData()
  {
    $data = YourModel::all();

    return $data;
  }

  public function generateWordDocument($data)
  {
    // Initialize PHPWord object
    $phpWord = new PhpWord();

    // Add a section
    $section = $phpWord->addSection();

    // Add table
    $table = $section->addTable();

    // Add headers
    $table->addRow();
    $headers = ['purpose', 'background', 'eventName']; // Replace with your column names
    foreach ($headers as $header) {
      $table->addCell()->addText($header);
    }

    // Add data rows
    foreach ($data as $row) {
      $table->addRow();
      foreach ($row->toArray() as $column) {
        $table->addCell()->addText($column);
      }
    }

    // Save the document
    $filename = 'exported_data.docx';
    $path = storage_path('app/' . $filename);
    $objWriter = IOFactory::createWriter($phpWord, 'Word2010');
    $objWriter->save($path);

    return $path;
  }

  public function exportToWord()
  {
    // Fetch data
    $data = $this->fetchData();

    // Generate Word document
    $filePath = $this->generateWordDocument($data);

    // Download the document
    return Response::download($filePath);
  }
}
