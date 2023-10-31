<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable =[ 'Author ','Date','Title','gambar','gambar1','gambar2','gambar3','gambar4','gambar5','gambar6','gamba7', 'Content',"published_at"];

    protected $date = [
        'published_at'
    ];

    public function User()
    {
      return $this->belongsTo(User::class,'users_id' );
    }

    public function CommentNews(){
      return $this->hasMany(CommentNews::class,'news_id');
    }
}
