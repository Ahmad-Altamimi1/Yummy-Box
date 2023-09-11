<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Volunteer extends Model
{
    use HasFactory;
    protected $table = 'volunteers';
    
    protected $fillable = ['Address', 'Languages' , 'day' , 'Experience' , 'CV'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
