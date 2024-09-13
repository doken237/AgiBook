<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = [
        'commande_uuid',
        'country_id',
        'nom_client', 
        'email_client',
        'fiche_technique_id',
        'url_fiche',
        'etat',
    ];

    protected $guarded=['id','created_ad'];

    public function country(){
        return $this->belongsTo(Country::class,'country_id');
    }

    public function fiches_techniques(){
      
        return $this->belongsTo(Fiches_Technique::class,'fiche_technique_id');
    }



}
