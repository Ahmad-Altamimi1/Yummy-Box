<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frontvolunteer extends Model
{
    use HasFactory;
    protected $table = 'frontvolunteers';
    protected $fillable = ['Address', 'Languages' , 'day' , 'Experience' , 'CV','user_id'];
    public function setLanguagesAttribute($value)
    {
        $this->attributes['Languages'] = json_encode($value);
    }
    public function getLanguagesAttribute($value)
    {
        $this->attributes['Languages'] = json_decode($value);
    }
    
}
