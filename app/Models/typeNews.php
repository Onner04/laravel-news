<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typeNews extends Model
{
    protected $fillable = ['id_category','name','unaccented_name'];
    use HasFactory;
    public function category(){
        return $this->belongsTo(category::class);
    }
    public function news(){
        return $this->hasMany(news::class);
    }
}
