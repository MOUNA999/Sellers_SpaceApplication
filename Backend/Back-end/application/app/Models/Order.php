<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $timestamps=false;
    protected $table = 'order';
    protected $primaryKey = 'id';
    protected $fillable =['code','date','total','subTotal','remise','client_ID','caisse_ID','vendeur_ID'] ;


    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function vendeur()
    {
        return $this->belongsTo(Vendeur::class);
    }

  
    public function lignesCommandes()
{
    return $this->hasMany(Ligne_commande::class, 'order_ID');
}
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }
    public function paiement()
    {
        return $this->hasOne (Paiement::class);
    }
}