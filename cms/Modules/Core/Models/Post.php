<?php

namespace Cms\Modules\Core\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "posts";

    protected $fillable = [
        'title',
        'slug',
        'description',
        'content',
        'image_path',
        'image_name',
        'status',
        'type'
    ];
}
