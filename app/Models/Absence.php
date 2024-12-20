<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    use HasFactory;

    protected $fillable = ['seance_id', 'etudiant_id', 'nbr_heures_total'];

    // Relation : Une absence appartient à une séance
    public function seance()
    {
        return $this->belongsTo(Seance::class);
    }

    // Relation : Une absence appartient à un étudiant
    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }
}
