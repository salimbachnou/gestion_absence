<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = ['nom_module', 'date_creation', 'date_fin', 'description'];

    // Relation : Un module a plusieurs séances
    public function seances()
    {
        return $this->hasMany(Seance::class);
    }

    // Relation : Un module appartient à une filière
    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }
}
