<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $primaryKey = 'code';

    protected $keyType = 'string';

    protected $fillable = [
        'code',
        'name',
        'old_name'
    ];

    public $timestamps = false;
}
