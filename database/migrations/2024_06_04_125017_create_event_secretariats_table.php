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
    Schema::create('event_secretariats', function (Blueprint $table) {
      /* $table->id();
      $table->string('secre_name');
      $table->string('secre_matric_number');
      $table->timestamps(); */
      $table->id();
      $table->string('secre_name');
      $table->string('secre_matric_number');
      $table->unsignedBigInteger('event_id');
      $table->foreign('event_id')->references('id')->on('event_proposals')->onDelete('cascade');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('event_secretariats');
  }
};
