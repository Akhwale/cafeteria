<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Orderitem;

class Order extends Model
{
    use HasFactory;
    protected $table="orders";
    protected $fillable= [
        'user_id',
        'name',
        'address',
        'phone',
        'paymentmethod',
        'status',
        'total_price',
        'tracking_no',
    ];

    public function orderitems(){
        return $this->hasMany(Orderitem::class);
        }
}
