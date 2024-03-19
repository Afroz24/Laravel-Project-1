<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $fillable=[
        "name","age","qualification","phone_number","gender","skills","picture","country","resume"
    ];
}
