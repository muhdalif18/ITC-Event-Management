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
    Schema::create('event_proposals', function (Blueprint $table) {
      $table->id();
      $table->string('purpose');
      $table->string('background');

      $table->json('committee_members')->nullable();

      $table->string('eventName');
      $table->string('organizer');

      $table->string('organizer_exco');
      $table->string('event_director');

      $table->string('date');
      $table->string('day');
      $table->string('time');
      $table->string('location');
      $table->string('objective1');
      $table->string('objective2');
      $table->string('objective3');
      $table->string('per_Masalah1');
      $table->string('per_Masalah2');
      $table->string('per_Masalah3');
      $table->string('description_Comment');
      $table->string('eventDetails_Comment');
      $table->string('organizer_Comment');
      $table->string('obj_Comment');
      $table->string('status')->default('Pending');

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('event_proposals');
  }
};
