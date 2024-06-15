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
    Schema::table('event_proposals', function (Blueprint $table) {
      $table->string('description_comment', 1000)->nullable()->change(); // Make the column nullable
      $table->string('eventDetails_Comment', 1000)->nullable()->change(); // Similarly nullable if needed
      $table->string('organizer_Comment', 1000)->nullable()->change(); // Similarly nullable if needed
      $table->string('obj_Comment', 1000)->nullable()->change(); // Similarly nullable if needed
    });
  }

  /**
   * Reverse the migrations.
   */
  /* public function down(): void
  {
    Schema::table('event_proposals', function (Blueprint $table) {
      $table->string('description_comment', 1000)->nullable(false)->change(); // Revert to not nullable
      $table->string('eventDetails_Comment', 1000)->nullable(false)->change(); // Similarly revert if needed
      $table->string('organizer_Comment', 1000)->nullable(false)->change(); // Similarly revert if needed
      $table->string('obj_Comment', 1000)->nullable(false)->change(); // Similarly revert if needed
    });
  } */
};
