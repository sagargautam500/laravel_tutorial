<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'college_students'; // Specify the table name if it doesn't follow Laravel's naming convention

    function testFunction()
    {
        return "This is a test function from the Student model.";
    }
}
