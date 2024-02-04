<?php

namespace Cms\Modules\Core\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'orders';

    protected $fillable = [
        'name',
        'email',
        'note',
        'phone',
        'status'
    ];

    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class, 'order_id');
    }
}
