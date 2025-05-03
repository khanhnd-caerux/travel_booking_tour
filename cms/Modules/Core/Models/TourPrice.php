<?php

namespace Cms\Modules\Core\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TourPrice extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "tour_prices";
    protected $fillable = [
        'price',
        'description',
        'tour_id',
    ];
}
