<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barangay extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'municipality_code',
        'name',
        'old_name'
    ];

    public $timestamps = false;
}
