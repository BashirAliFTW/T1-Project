<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable =  [
        'articleAuthor',
        'articlesTitle',
        'articlesDate',
        'articlesTime',
        'articlesEmail',
        'articlesContent',
        'articlesTag',
        'user_id'
    ];
}
