<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = ['cin', 'filiere_id', 'niveau_id', 'groupe_id'];

    // Relation : Un étudiant appartient à une filière
    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }

    // Relation : Un étudiant appartient à un niveau
    public function niveau()
    {
        return $this->belongsTo(Niveau::class);
    }

    // Relation : Un étudiant appartient à un groupe
    public function groupe()
    {
        return $this->belongsTo(Groupe::class);
    }

    // Relation : Un étudiant peut avoir plusieurs absences
    public function absences()
    {
        return $this->hasMany(Absence::class);
    }
}

