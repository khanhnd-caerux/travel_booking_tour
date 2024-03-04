<?php

namespace Cms\Modules\Core\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "categories";

    protected $fillable = [
        'name',
        'slug',
        'description',
        'parent_id',
        'image_path',
        'status',
        'type',
        'locale',
    ];

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }

    public function tour()
    {
        return $this->hasMany(Tour::class, 'category_id');
    }

    public function ticket()
    {
        return $this->hasMany(Ticket::class, 'category_id');
    }

    public function car()
    {
        return $this->hasMany(Car::class, 'category_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
