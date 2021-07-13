<?php

namespace App\Models;

use App\Models\Categoria;
use App\Models\PostsImage;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title','url_clean','content','category_id','posted'];

    public function categoria(){
    	return $this->belongsTo(Categoria::class,'category_id');

    }

    public function image(){
    	return $this->hasOne(PostsImage::class);
    }
}
