<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
class OrderLine extends Model
{
    use HasFactory;
    use HasFactory;

    public $timestamps=false;

    protected $primaryKey = 'id';
    protected $fillable =['order_id','product_id','quantite'] ;


    public function orders()
    {
        return $this->hasOne(Order::class);
    }
    public function products()
    {
        return $this->belongsToMany(Product::class)->withTimestamps();
    }
}