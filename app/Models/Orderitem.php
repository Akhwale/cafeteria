<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderitem extends Model
{
    use HasFactory;

    protected $table="orderitems";
    protected $fillable= [
        'order_id',
        'item_id',
        'quantity',
        'price',
    ];

    public function items(){
        return $this->belongsTo(Item::class,'item_id','id');
    }
}
