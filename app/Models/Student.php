<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;  // Add this line
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;  // Import this line

class Student extends Model
{
    use HasFactory, HasRoles; 
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'title',
        'work_phone',
        'home_phone',
        'mobile_phone',
        'address',
        'usi',
    ];
}
