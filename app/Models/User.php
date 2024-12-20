<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['email', 'password', 'role', 'cin'];

    // Relation : Un utilisateur (enseignant) peut avoir plusieurs modules
    public function modules()
    {
        return $this->hasMany(Module::class);
    }
}

