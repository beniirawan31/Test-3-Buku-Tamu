<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class settingsubmenu extends Model
{
    use HasFactory;
    protected $fillable = [
        'icon',
        'title',
        'deskripsi',
    ];
}
