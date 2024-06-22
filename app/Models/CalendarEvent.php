<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalendarEvent extends Model
{
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'date',
    'event',
    'start_time',
    'end_time',
    'tasks',
    'persons_in_charge',
  ];

  protected $casts = [
    'tasks' => 'array',
    'persons_in_charge' => 'array',
  ];

}
