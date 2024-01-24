<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;
    public function desenvolvedores(){
        return $this->hasMany(Desenvolvedor::class, 'equipes_id');
    }
}
