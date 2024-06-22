<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventProposal extends Model
{
  use HasFactory;

  protected $fillable = [
    'purpose',
    'background',
    'organizer',
    'eventName',
    'organizer_exco',
    'event_director',
    'date',
    'day',
    'time',
    'location',
    'objective1',
    'objective2',
    'objective3',
    'per_Masalah1',
    'per_Masalah2',
    'per_Masalah3',
    'description_Comment',
    'eventDetails_Comment',
    'organizer_Comment',
    'obj_Comment',
    'participant_escorts_Comment',
    'suggested_role_Comment',
    'impact_student_Comment',
    'tentative_activity_Comment',
    'committee_Comment',
    'others_Comment',
    'implication_Comment',
    'decision_Comment',
    'participant_escorts',
    'name_of_mentor',
    'position_of_mentor',
    'company_address',
    'suggested_role',
    'impact_student_1',
    'impact_student_2',
    'impact_student_3',
    'toward_club_1',
    'toward_club_2',
    'toward_club_3',
    'others',
    'implication',
    'decision',
    /* 'committee',
    'committee.*.role',
    'committee.*.name',
    'committee.*.matric',
    'committee.*.faculty', */
    /*  'tentative',
     'tentative.*.time',
     'tentative.*.content', */
  ];
}
