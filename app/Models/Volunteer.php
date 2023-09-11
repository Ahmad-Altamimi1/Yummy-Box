<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Volunteer extends Model
{
    use HasFactory;
    protected $table = 'volunteers';
<<<<<<< HEAD
    protected $fillable = ['user_id'=>"1",'Address', 'Languages' , 'Experience' , 'CV',];
    public function users()
    {
        
        return $this->hasOne(User::class);

    }
=======
    protected $fillable = ['Address', 'Languages' , 'day' , 'Experience' , 'CV'];
>>>>>>> f3afae06a2528f96e07427878c2c68daae02d416
}
