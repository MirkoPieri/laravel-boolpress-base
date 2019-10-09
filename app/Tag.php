<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
      'title',
      'text',
      'post_id'
    ];

    public function posts() {
      return $this -> belongsToMany(Post::class);
    }
}
