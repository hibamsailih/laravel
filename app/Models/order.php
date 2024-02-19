<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_num',
        'custom_order_num',
        'fullname',
        'price',
        'product',
        'sku',
        'source',
        'created_by',
    ];

    protected static function boot()
{
    parent::boot();

    static::saving(function ($order) {
        // Set 'order_num' as 'COD-id'
        $order->order_num = 'COD-' . $order->id;
    });
}

    
    

}
