<?php

namespace Cms\Modules\Core\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Charity extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "charities";

    protected $fillable = [
        'name',
        'phone',
        'tour_id',
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class, 'tour_id');
    }
}
