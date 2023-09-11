<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Volunteer extends Model
{
    use HasFactory;
    protected $table = 'volunteers';
    protected $fillable = ['user_id'=>"1",'Address', 'Languages' , 'Experience' , 'CV',];
    public function users()
    {
        
        return $this->hasOne(User::class);

    }
}
