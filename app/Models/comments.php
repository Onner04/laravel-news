<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    protected $fillable =['id_user','id_news','content'];
    use HasFactory;
    public function news(){
        return $this->belongsTo(news::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
