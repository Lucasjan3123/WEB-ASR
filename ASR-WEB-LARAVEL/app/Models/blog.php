<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class blog extends Model
{
    use HasFactory;

    protected $table = "_blog";
    protected $fillable =[ 'nama','title','_kategori_id','gambar', 'content', 'users_id',"tag1","tag2","tag3" ,'created_at','updated_at'];

    public $timestamps = true;


    protected $dates = [
      'created_at',
      'updated_at',
  ];

  

  // public function scopeArchive($query)
  //   {
  //       return $query->orderBy('created_at', 'desc')
  //                    ->get()
  //                    ->groupBy(function($blog) {
  //                        return Carbon::parse($blog->created_at)->format('Y-m');
  //                    });
  //     }
    public function User()
    {
      return $this->belongsTo(User::class,'users_id' );
    }

    public function Comment(){
      return $this->hasMany(Comment::class,'_blog_id');

      
    }

    public function kategori()
    {
      return $this->belongsTo(Kategori::class,'_kategori_id' );
    }

    public function getSlugAttribute()
{
    return Str::slug($this->title);
}

}
