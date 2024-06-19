<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('users')->insert([
      'name' => 'ADMIN',
      'email' => 'informationtechnologyclub2@gmail.com',
      'role' => 'admin',
      'matric_number' => 'test',
      'exco' => 'test',
      'password' => Hash::make('12345678'),
    ]);

    DB::table('users')->insert([
      'name' => 'USER 1',
      'email' => 'user1@example.com',
      'role' => 'user',
      'matric_number' => 'ci210001',
      'exco' => 'test 1',
      'password' => Hash::make('12345678'),
    ]);

    DB::table('users')->insert([
      'name' => 'USER 2',
      'email' => 'user2@example.com',
      'role' => 'user',
      'matric_number' => 'ci210002',
      'exco' => 'test 2',
      'password' => Hash::make('12345678'),
    ]);

    DB::table('users')->insert([
      'name' => 'USER 3',
      'email' => 'user3@example.com',
      'role' => 'user',
      'matric_number' => 'ci210003',
      'exco' => 'test 3',
      'password' => Hash::make('12345678'),
    ]);

    /* DB::table('event_proposals')->insert([
      'purpose' => 'test',
      'background' => 'test',
      'eventName' => 'test',
      'organizer' => 'test',
      'organizer_exco' => 'test',
      'event_director' => 'test',
      'date' => 'test',
      'day' => 'test',
      'time' => 'test',
      'location' => 'test',
      'objective1' => 'test',
      'objective2' => 'test',
      'objective3' => 'test',
      'per_Masalah1' => 'test',
      'per_Masalah2' => 'test',
      'per_Masalah3' => 'test',

      'participant_escorts' => 'test',
      'name_of_mentor' => 'test',


      'description_Comment' => 'test',
      'eventDetails_Comment' => 'test',
      'organizer_Comment' => 'test',
      'obj_Comment' => 'test',

    ]); */

    /* DB::table('event_proposals')->insert([
      'purpose' => 'ABCD',
      'background' => 'ABCD',
      'eventName' => 'ABCD',
      'organizer' => 'ABCD',
      'organizer_exco' => 'ZXCV',
      'event_director' => 'VBNM',
      'date' => 'ABCD',
      'day' => 'ABCD',
      'time' => 'ABCD',
      'location' => 'ABCD',
      'objective1' => 'ABCD',
      'objective2' => 'ABCD',
      'objective3' => 'ABCD',
      'per_Masalah1' => 'ABCD',
      'per_Masalah2' => 'ABCD',
      'per_Masalah3' => 'ABCD',
      'description_Comment' => 'ABCD',
      'eventDetails_Comment' => 'ABCD',
      'organizer_Comment' => 'ABCD',
      'obj_Comment' => 'ABCD',

    ]); */

    DB::table('event_reports')->insert([
      'r_purpose' => 'ABCD',
      'r_background' => 'ABCD',
      'r_organizer_exco' => 'ZXCV',
      'r_event_director' => 'VBNM',
      'r_description_Comment' => 'ABCD',


    ]);
  }
}
