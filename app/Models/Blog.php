<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];

    public function category_blog()
    {
        return $this->belongsTo(CategoryBlog::class, 'categories_id')->withTrashed();
    }
}
