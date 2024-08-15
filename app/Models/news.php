<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{   
    use HasFactory;

    protected $table = 'news';

    protected $fillable=['name','title','status','content','image','category','type','id_type_news'];

    public function typeNews()  
    {
        return $this->belongsTo(typeNews::class);
    }
}
