<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutDetail extends Model
{
    use HasFactory;

    protected $fillable = ['icon', 'title_en', 'title_ru', 'info_en', 'info_ru'];
}
