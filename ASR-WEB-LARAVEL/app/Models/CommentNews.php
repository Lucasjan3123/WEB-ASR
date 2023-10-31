<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentNews extends Model
{
    use HasFactory;

    protected $table = "_komentar_news";
    protected $fillable = ["nama","email","date",'news_id','comment'];

    public function news(){
        return $this->belongsTo(news::class, 'news_id');
      }
}
