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
      $table->string('others');
      $table->string('implication');
      $table->string('decision');

      $table->string('description_Comment')->nullable();
      $table->string('eventDetails_Comment')->nullable();
      $table->string('organizer_Comment')->nullable();
      $table->string('obj_Comment')->nullable();
      $table->string('status')->default('Pending');

      $table->string('participant_escorts_Comment')->nullable();
      $table->string('suggested_role_Comment')->nullable();
      $table->string('impact_student_Comment')->nullable();
      $table->string('tentative_activity_Comment')->nullable();
      $table->string('committee_Comment')->nullable();
      $table->string('others_Comment')->nullable();
      $table->string('implication_Comment')->nullable();
      $table->string('decision_Comment')->nullable();



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
