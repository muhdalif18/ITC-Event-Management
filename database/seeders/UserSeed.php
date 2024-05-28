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
      'email' => 'admin@example.com',
      'role' => 'admin',
      'matric_number' => 'test',
      'exco' => 'test',
      'password' => Hash::make('12345678'),
    ]);

    DB::table('users')->insert([
      'name' => 'USER',
      'email' => 'user1@example.com',
      'role' => 'user',
      'matric_number' => 'test',
      'exco' => 'test',
      'password' => Hash::make('12345678'),
    ]);
  }
}
