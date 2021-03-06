<?php

namespace App\Models;
use App\Models\Post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class PostsImage extends Model
{
    use HasFactory;

    protected $fillable=['post_id','image'];

   
   public function post(){
   	return $this->belongsTo(Post::class);
   }
}
