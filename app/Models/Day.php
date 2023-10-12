<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->hasMany(products::class, 'dayId', 'id');
    }
}
