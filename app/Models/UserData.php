<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    use HasFactory;
    protected $fillable = [
    'question1',
    'question2',
    'question3',
    'question4',
    'question5',
    'question6',
    'question7',
    'question8',
    'question9',
    'question10',
    'question11',
    'question12',
    'question13',
    'question14',
    'question15',
    'moreQuestion1',
    'moreQuestion2',
    'moreQuestion3',
    ];

}
