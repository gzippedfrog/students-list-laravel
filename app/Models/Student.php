<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        "first_name",
        "last_name",
        "group_number",
        "points",
    ];
}
