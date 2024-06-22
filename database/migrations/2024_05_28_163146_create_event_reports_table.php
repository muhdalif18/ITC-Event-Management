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
    Schema::create('event_reports', function (Blueprint $table) {
      $table->id();
      $table->string('purpose');
      $table->string('background');
      $table->json('committee_members')->nullable();
      $table->json('tentative_activity')->nullable();
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
      $table->string('participant_escorts');
      $table->string('name_of_mentor');
      $table->string('position_of_mentor');
      $table->string('company_address');
      $table->string('suggested_role');
      $table->string('impact_student_1');
      $table->string('impact_student_2');
      $table->string('impact_student_3');
      $table->string('toward_club_1');
      $table->string('toward_club_2');
      $table->string('toward_club_3');

      /* $table->string('others'); */
      $table->json('others')->nullable();
      $table->string('implication');
      $table->string('decision');
      $table->string('club_president');
      $table->string('club_advisor');
      $table->string('mpp');

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
    Schema::dropIfExists('event_reports');
  }
};
