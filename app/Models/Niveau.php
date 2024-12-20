<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    use HasFactory;

    protected $fillable = ['nom_niveau', 'filiere_id'];

    // Relation : Un niveau appartient à une filière
    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }

    // Relation : Un niveau a plusieurs groupes
    public function groupes()
    {
        return $this->hasMany(Groupe::class);
    }

    // Relation : Un niveau a plusieurs séances
    public function seances()
    {
        return $this->hasMany(Seance::class);
    }
}
