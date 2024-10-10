<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps=false;

    protected $primaryKey = 'id';
    protected $fillable = [
        'code_a_bar',
        'reference',
        'libelle',
        'categorie_id',
        'qt_stock',
        'couleur',
        'taille',
        'prix',
        'remise',
    ];

    public function pointVente()
    {
        return $this->belongsTo(PointVente::class, 'point_vente_ID');
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function vendeur()
    {
        return $this->belongsTo(Vendeur::class);
    }


    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }

}