<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{   
    use HasFactory;

    protected $table = 'category';

    protected $fillable =['name','unaccented_name'];

    public function typeNews(){
        return $this->hasMany(typeNews::class);
    }
    public function news(){
        return $this->hasManyThrough(typeNews::class,news::class);
    }
}
