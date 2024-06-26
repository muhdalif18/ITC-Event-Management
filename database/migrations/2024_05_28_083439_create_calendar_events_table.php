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
    Schema::create('calendar_events', function (Blueprint $table) {
      $table->id();
      $table->date('date');
      $table->string('event');
      $table->time('start_time');
      $table->time('end_time');

      $table->json('tasks')->nullable();
      $table->json('persons_in_charge')->nullable();
      $table->json('tasks_status')->nullable();

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('calendar_events');
  }
};
