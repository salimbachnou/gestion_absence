<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;

    protected $fillable = ['nom_filiere', 'annee_etude', 'date_creation'];

    // Relation : Une filière a plusieurs niveaux
    public function niveaux()
    {
        return $this->hasMany(Niveau::class);
    }

    // Relation : Une filière a plusieurs modules
    public function modules()
    {
        return $this->hasMany(Module::class);
    }
    
}
