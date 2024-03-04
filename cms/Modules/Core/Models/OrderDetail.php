<?php

namespace Cms\Modules\Core\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'order_details';

    protected $fillable = [
        'order_id',
        'tour_id',
        'car_id',
        'ticket_id',
        'quantity',
        'gender',
        'status',
        'date_selected',
        'total_price',
    ];
}
