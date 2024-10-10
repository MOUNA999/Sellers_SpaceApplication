<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendeur extends Model
{
    use HasFactory;

    public $timestamps=false;
    protected $table = 'vendeuse';
    protected $primaryKey = 'id';
    protected $fillable =['nom','prenom','code','point_vente_ID ','cle','login','password','isActive'] ;
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($vendeuse) {
            $vendeuse->code = Str::uuid()->toString();
        });
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}