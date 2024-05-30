<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('secretariats', function (Blueprint $table) {
      $table->id();
      $table->string('secre_name');
      $table->string('secre_matric_number');
      $table->string('secre_committee');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('secretariats');
  }
};
