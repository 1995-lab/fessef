<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;

    protected $fillable = [
        'NomEntreprise',
        'adresse',
        'telephone',
        'lien',
        'description',
        'domaineActivites',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}