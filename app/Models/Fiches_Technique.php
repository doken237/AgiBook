<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fiches_Technique extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'titre',
        'description', 
        'photo',  
        'speculation_id',
        'prix', 
        'Etat',  


    ];

    protected $guarded=['id','created_ad'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function speculation(){
        return $this->belongsTo(Speculation::class,'speculation_id');
    }


}
