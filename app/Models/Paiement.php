<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;

    protected $fillable = [
        'commande_id',
        'mode_paiement',
        'montant',
        'trasaction_id',
        'etat',
    ];

    protected $guarded=['id','created_ad'];

    public function commande(){
        return $this->belongsTo(Commande::class,'commande_id');
    }

}
