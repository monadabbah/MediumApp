<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo',
        'article_id'
    ];

    public function articles()
    {
        return $this->belongsTo(Article::class);
    }
}
