<?php

namespace Cms\Modules\Core\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tour extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $guarded = [];

    public function productImages(){
        return $this->hasMany(Tour::class, 'tour_id');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
