<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // الحقول اللي مسموح للمستخدم يدخلها
    protected $fillable = ['title', 'author', 'year_published', 'status'];
}
