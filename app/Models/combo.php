<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class combo extends Model
{
    use HasFactory;
    protected $table = 'combos';
    protected $fillable = [
        'tencombo',
        'chucnang',
        'giatien',
    ];
}
