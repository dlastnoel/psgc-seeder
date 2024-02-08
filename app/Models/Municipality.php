<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;

    protected $primaryKey = 'code';

    protected $keyType = 'string';

    protected $fillable = [
        'province_code',
        'code',
        'zip_code',
        'name',
        'old_name'
    ];

    public $timestamps = false;
}
