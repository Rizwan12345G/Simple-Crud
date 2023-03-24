<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_online extends Model
{
    use HasFactory;
    protected $table = "student_online";



    protected $primarykey = "id";
}
