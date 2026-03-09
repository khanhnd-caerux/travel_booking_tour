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

    public function tourPrices() {
        return $this->hasMany(TourPrice::class, 'tour_id');
    }

    public function tourDetails() {
        return $this->hasMany(TourDetail::class, 'tour_id');
    }
}
