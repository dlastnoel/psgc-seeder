<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;

    protected $fillable = [
        'province_code',
        'code',
        'zipcode',
        'name',
        'old_name'
    ];

    public $timestamps = false;
}
