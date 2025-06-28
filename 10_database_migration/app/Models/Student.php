<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    function getNameAttribute($value)
    {
        return ucfirst($value);
    }
    function getPhoneAttribute($value)
    {
        return '+977-' . $value;
    }

    function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }
    function setPhoneAttribute($value)
    {
        $this->attributes['phone'] = str_replace('+977-', '', $value);  
    }
}
