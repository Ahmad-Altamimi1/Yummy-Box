<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'name',
        'breif',
        'description2',
        'description3',
        'location',
        'period',
        'time',
        'image',
        
    ];
    public $timestamps =false;

    public function pay()
    {
        return $this->belongsToMany(paypal::class);

    }
}