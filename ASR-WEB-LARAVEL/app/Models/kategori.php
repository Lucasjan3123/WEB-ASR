<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;

    protected $table = "_kategori";
    protected $fillable = ["nama"];

    public function blog()
    {
     return $this->hasMany(blog::class, '_kategori_id');
    } 
}
