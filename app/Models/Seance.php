<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    use HasFactory;

    protected $fillable = ['date_seance', 'niveau_id', 'groupe_id', 'module_id'];

    // Relation : Une séance appartient à un niveau
    public function niveau()
    {
        return $this->belongsTo(Niveau::class);
    }

    // Relation : Une séance appartient à un groupe
    public function groupe()
    {
        return $this->belongsTo(Groupe::class);
    }

    // Relation : Une séance appartient à un module
    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    // Relation : Une séance peut avoir plusieurs absences
    public function absences()
    {
        return $this->hasMany(Absence::class);
    }
}
