<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up()
  {
    Schema::table('event_proposals', function (Blueprint $table) {
      $table->text('background')->change();
      $table->text('eventName')->change();
      $table->text('organizer')->change();
      $table->text('organizer_exco')->change();
      $table->text('event_director')->change();
      $table->text('date')->change();
      $table->text('day')->change();
      $table->text('time')->change();
      $table->text('location')->change();
      $table->text('objective1')->change();
      $table->text('objective2')->change();
      $table->text('objective3')->change();
      $table->text('per_Masalah1')->change();
      $table->text('per_Masalah2')->change();
      $table->text('per_Masalah3')->change();
      $table->text('description_Comment')->change();
      $table->text('eventDetails_Comment')->change();
      $table->text('organizer_Comment')->change();
      $table->text('obj_Comment')->change();
      $table->text('participant_escorts')->change();
      $table->text('name_of_mentor')->change();
      $table->text('position_of_mentor')->change();
      $table->text('company_address')->change();
      $table->text('suggested_role')->change();
      $table->text('impact_student_1')->change();
      $table->text('impact_student_2')->change();
      $table->text('impact_student_3')->change();
      $table->text('toward_club_1')->change();
      $table->text('toward_club_2')->change();
      $table->text('toward_club_3')->change();
      $table->text('others')->change();
      $table->text('implication')->change();
      $table->text('decision')->change();
    });
  }

  public function down()
  {
    Schema::table('event_proposals', function (Blueprint $table) {
      $table->string('background', 255)->change();
      $table->string('eventName', 255)->change();
      $table->string('organizer', 255)->change();
      $table->string('organizer_exco', 255)->change();
      $table->string('event_director', 255)->change();
      $table->string('date', 255)->change();
      $table->string('day', 255)->change();
      $table->string('time', 255)->change();
      $table->string('location', 255)->change();
      $table->string('objective1', 255)->change();
      $table->string('objective2', 255)->change();
      $table->string('objective3', 255)->change();
      $table->string('per_Masalah1', 255)->change();
      $table->string('per_Masalah2', 255)->change();
      $table->string('per_Masalah3', 255)->change();
      $table->string('description_Comment', 255)->change();
      $table->string('eventDetails_Comment', 255)->change();
      $table->string('organizer_Comment', 255)->change();
      $table->string('obj_Comment', 255)->change();
      $table->string('participant_escorts', 255)->change();
      $table->string('name_of_mentor', 255)->change();
      $table->string('position_of_mentor', 255)->change();
      $table->string('company_address', 255)->change();
      $table->string('suggested_role', 255)->change();
      $table->string('impact_student_1', 255)->change();
      $table->string('impact_student_2', 255)->change();
      $table->string('impact_student_3', 255)->change();
      $table->string('toward_club_1', 255)->change();
      $table->string('toward_club_2', 255)->change();
      $table->string('toward_club_3', 255)->change();
      $table->string('others', 255)->change();
      $table->string('implication', 255)->change();
      $table->string('decision', 255)->change();
    });
  }
};
