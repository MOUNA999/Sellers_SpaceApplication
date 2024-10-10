<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ligne_commande extends Model
{
    use HasFactory;
    protected $table = '_ligne_commandes';
    protected $primaryKey = 'id';
    protected $fillable =['order_ID','product_ID','quantity','total','remise'] ;
    public function order()
{
    return $this->belongsTo(Order::class);
}
}
