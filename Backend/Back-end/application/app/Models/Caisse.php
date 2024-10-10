<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caisse extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $primaryKey = 'id';
    protected $fillable =['code_caisse','date','point_vente_ID','code'] ;
    

public function pointVente()
{
    return $this->belongsTo(PointVente::class, 'point_vente_ID');
}
}