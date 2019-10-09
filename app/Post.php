<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
      'text',
      'author',
      'category_id'
    ];

    public function category() {
      return $this -> belongsTo(Category::class);
    }

    public function tags() {
      return $this -> belongsToMany(Tag::class);
    }
}
