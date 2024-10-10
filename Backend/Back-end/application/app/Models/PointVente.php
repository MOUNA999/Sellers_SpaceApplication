<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointVente extends Model
{
    use HasFactory;

    protected $table = 'points_ventes';
    protected $primaryKey = 'id';
    protected $fillable =['libelle','code'] ;

}