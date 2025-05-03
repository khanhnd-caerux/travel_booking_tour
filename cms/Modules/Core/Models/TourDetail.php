<?php

namespace Cms\Modules\Core\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TourDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "tour_details";
    protected $guarded = [];
}
