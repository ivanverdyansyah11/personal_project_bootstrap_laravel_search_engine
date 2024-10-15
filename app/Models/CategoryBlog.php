<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryBlog extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];
    public function blogs()
    {
        return $this->hasMany(Blog::class)->withTrashed();
    }
}
