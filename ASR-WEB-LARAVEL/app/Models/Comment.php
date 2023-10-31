<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = "_komentar";
    protected $fillable = ["nama","email","date",'_blog_id','comment'];

    public function blog(){
        return $this->belongsTo(blog::class, '_blog_id');
      }
}
