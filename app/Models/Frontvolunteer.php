<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frontvolunteer extends Model
{
    use HasFactory;
    protected $table = 'frontvolunteers';
    protected $fillable = ['Address', 'Languages' , 'day' , 'Experience' , 'CV'];
}
