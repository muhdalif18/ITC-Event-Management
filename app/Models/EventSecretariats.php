<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventSecretariats extends Model
{
  use HasFactory;

  protected $fillable = [
    'secre_name',
    'secre_matric_number',
    'secre_task',
    'event_id',
  ];

  public function eventProposal()
  {
    return $this->belongsTo(EventProposal::class, 'event_id');
  }
}
