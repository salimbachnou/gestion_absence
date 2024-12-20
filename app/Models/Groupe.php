<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;

    protected $fillable = ['nom_groupe', 'niveau_id'];

    // Relation : Un groupe appartient à un niveau
    public function niveau()
    {
        return $this->belongsTo(Niveau::class);
    }

    // Relation : Un groupe a plusieurs étudiants
    public function etudiants()
    {
        return $this->hasMany(Etudiant::class);
    }

    // Relation : Un groupe peut avoir plusieurs séances
    public function seances()
    {
        return $this->hasMany(Seance::class);
    }
}
